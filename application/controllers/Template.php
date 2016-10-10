<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');    
        $this->load->model('Recipes_model');   
        $this->load->library('pagination');
    }

	public function index()
	{
		$this->page();
	}

	public function page()
	{
		$details = array (
			// 'posted_content'			=>	$this->Postcontent_model->get_content(),
			'recipes_content'			=>	$this->Recipes_model->get_content(),
			// 'posted_content_num_rows'	=>	sizeof($this->Postcontent_model->get_content()) % 2,
			'curpage'					=>	'home',
			'title'						=>	'Home',
			'ctr'						=>	1
		);

		$config = array();
		$config["base_url"] = base_url() . "template/page";
		$total_row = $this->Postcontent_model->posted_content_numrows();
		$config["total_rows"] = $total_row;
		$config["per_page"] = 4;
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = $total_row;
		
		$config['full_tag_open'] = '<center><ul class="pagination">';
        $config['full_tag_close'] = '</ul></center>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$page = ($page-1) * $config["per_page"];
		}
		else{
			$page = 0;
		}

		$data["posted_content"] = $this->Postcontent_model->get_content($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		
		 // = explode('&nbsp;',$str_links );

		$data['content'] = $this->load->view('carouselimagescontent.php', $details, TRUE);
		$data['content'] = $this->load->view('templatebodycontent_left.php', $data, TRUE);
		$this->load->view('template.php', $data);
	}
}
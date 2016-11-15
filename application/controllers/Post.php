<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');   
        $this->load->model('Recipes_model');    
        $this->load->model('Categories_model');     
        $this->load->model('Aboutmysite_model'); 
    }

	public function link($param1)
	{
		$details = array (
			'link_data' 			=> $this->Postcontent_model->get_specific_content($param1),
			'comment_post'			=> $this->Postcontent_model->get_comment_per_post($param1),
			'categories_content'		=>  $this->Categories_model->get_content(),
			'get_content_active'		=>  $this->Aboutmysite_model->get_content_active(),
			'comment_post_numrow'	=> $this->Postcontent_model->get_comment_per_post_numrow($param1),
			'popular_content'			=>	$this->Recipes_model->get_content_popular()
		);

		foreach ($details['link_data'] as $ld) {
			$command = $ld->COMMAND;
			if($command == "FREE"){
				$data['content'] = $this->load->view('templatecontent.php',$details,TRUE);
				$data['curpage']	=	"home";
				$data['title']		=	"Post";
				$this->load->view('template.php',$data);
			}elseif($command == "SELL"){
				redirect ('/');
			}
		}
	}

	public function insert_comment_cont()
	{
		$comment_name	= $this->input->post('comment_name');
		$comment_email	= $this->input->post('comment_email');
		$comment_here	= $this->input->post('comment_here');
		$post_no	= $this->input->post('post_no');
		$timedate	= $this->input->post('timedate');

		$params = array(
			'NO'			=> '',
			'NAME' 			=> $comment_name,
			'EMAIL'			=> $comment_email,
			'DATECOMMENT'	=> $timedate,
			'COMMENTHERE'	=> $comment_here,
			'POSTNO'		=> $post_no,
			'TEMPLATENAME'	=> 'DESIGN2'
		);

		$this->Postcontent_model->insert_comment_mod($params);
	}
}
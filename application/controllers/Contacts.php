<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');  
        $this->load->model('Services_model');   
    }

	public function index()
	{
		$details = array (
			// 'posted_content'	=>	$this->Postcontent_model->get_content(),
		);

		$data['content']	=	$this->load->view('user/contacts/template_contacts.php', $details, TRUE);
		$data['curpage']	=	"contacts";
		$data['title']		=	"Contacts";
		$this->load->view('template.php', $data);
	}

	public function insert_contact()
	{
		$params = array (
			'NO'		=>	'',
			'NAME'		=>	$this->input->post('name'),
			'EMAIL'		=>	$this->input->post('email'),
			'PHONE'		=>	$this->input->post('phone'),
			'MESSAGE'	=>	$this->input->post('comment')
		);
		$this->Services_model->insert_contant($params);
	}
}
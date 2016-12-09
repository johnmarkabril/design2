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
        $this->load->model('Notification_model'); 
    }

	public function link($param1)
	{
		$get_det = "";
		if ( !empty($this->session->userdata['log_sess']) ) {
			$get_det = $this->Users_model->get_user_details($this->session->userdata['log_sess']->USER_ID);
		} else {
			$get_det = $this->Users_model->get_user_details(null);
		}

		$details = array (
			'get_det'					=>  $get_det,
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
		date_default_timezone_set("Asia/Manila");
    	$date = date("F d, Y");
    	$time = date("g:i A");
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

		$params_notif = array(
			'NO'			=> '',
			'NAME'			=> $comment_name,
			'USERNAME'		=> $this->session->userdata('log_sess')->USERNAME,
			'CONTENT'		=> "commented on the post" ,
			'DATE'			=> $date,
			'HOUR'			=> $time,
			'ACTIVE'		=> '1',
			'IMAGEURL'		=> $this->session->userdata('log_sess')->IMAGEURL
		);

		$this->Postcontent_model->insert_comment_mod($params);
		$this->Notification_model->insert_new_notif($params_notif);
	}
}
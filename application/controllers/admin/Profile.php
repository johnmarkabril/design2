<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Notification_model');
        $this->load->model('Aboutus_model');
        $this->load->model('Adminposted_model');
        $this->load->model('Adminposted_model');
    }

	public function index()
	{
		redirect('admin');
	}

	public function username($uname)
	{
		$no_logsess = $this->session->userdata('log_sess')->USER_ID;

		$perm = $this->Users_model->get_permiss($no_logsess);
		$permis = "";
		foreach ($perm as $per) {
			$permis = $per->PERMISSION;
		}
    	date_default_timezone_set("Asia/Manila");
		$details = array (
			'curpage'					=> 	'Profile',
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'			=> 	explode("|", $permis),
			'get_specific_data'			=>	$this->Users_model->get_specific_data($uname),
			'get_spec_about_user'		=>	$this->Aboutus_model->get_spec_about_user($uname),
			'get_notification'			=>	$this->Notification_model->get_notification(),
			'date'						=>	date("F d, Y"),
			'hour'						=>	date("g:i A"),
			'get_all_admin_posted'		=>	$this->Adminposted_model->get_all_admin_posted(),
			'get_all_notification_rows'	=>  $this->Notification_model->get_all_notification_rows(),
			'title'						=> 	'Profile'
		);

		$data['content'] = $this->load->view('admin/profile/profile', $details, TRUE);
		$this->load->view('admin/template_admin.php', $data);
	}

	public function insertPost()
	{
    	date_default_timezone_set("Asia/Manila");
    	$date = date("F d, Y");
    	$hour = date("g:i A");

    	$params = array (
    		'NO'			=> '',
    		'NAME'			=> $this->session->userdata('log_sess')->NAME,
    		'USERNAME'		=> $this->input->post('txt_admin_prof_uname'),
    		'DESCRIPTION'	=> $this->input->post('txt_admin_prof_descript'),
    		'DATE'			=> $this->input->post('txt_admin_prof_date'),
    		'HOUR'			=> $this->input->post('txt_admin_prof_hour'),
    		'IMAGEURL'		=> $this->input->post('txt_admin_prof_imagename'),
    		'DELETION'		=> '0'
    	);
    	
    	$this->Adminposted_model->insert_post($params);
	}

	public function updateAboutUs()
	{
		$params = array (
			'ABOUTUS'	=>	$this->input->post('txt_about_descript')
		);

		$this->Aboutus_model->update_about_user($params, $this->session->userdata('log_sess')->USERNAME);
	}

	public function updateProfileImage()
	{
        $uname =  $this->session->userdata('log_sess')->USERNAME;
        $loc = $_SERVER['DOCUMENT_ROOT'].base_url()."public/img/prof/";

        if ( isset ( $_POST['submit'] ) ) {
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);
            // print_r($image_name);

            $params = array (
                'IMAGEURL' => $image_name
            );

            $this->Users_model->update_personal_infor($params, $uname);
            move_uploaded_file($_FILES['image']['tmp_name'], $loc . $_FILES['image']['name']);
            
            $this->session->userdata('log_sess')->IMAGEURL = $image_name;

            $dateMDY = date("F d, Y");
            $time = date("g:i A");
            $params_notif = array(
                'NO'            => '',
                'NAME'          => $this->session->userdata('log_sess')->NAME,
                'USERNAME'      => $this->session->userdata('log_sess')->USERNAME,
                'CONTENT'       => 'updated his/her profile picture' ,
                'DATE'          => $dateMDY,
                'HOUR'          => $time,
                'ACTIVE'        => '1',
                'IMAGEURL'      => $this->session->userdata('log_sess')->IMAGEURL
            );
            $this->Notification_model->insert_new_notif($params_notif);

            $params_updateURL = array(
                'IMAGEURL'     => $image_name
            );
            
            $this->Adminposted_model->update_content($params, $uname);
            $this->Notification_model->update_content($params, $uname);

            redirect("admin/profile/username/".$uname."");
        } else {
            redirect("admin/profile/username/".$uname."");
        }
	}
}
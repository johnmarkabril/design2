<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');  
        $this->load->model('Subscribe_model');   
        $this->load->model('Location_model');   
        $this->load->model('Purchaseproduct_model'); 
        $this->load->model('Aboutus_model');   
        $this->load->model('Notification_model'); 
        
    }
    
	public function account($uname)
	{

		if ($this->session->userdata('log_sess') != null){
            $get_det = "";
            if ( !empty($this->session->userdata['log_sess']) ) {
                $get_det = $this->Users_model->get_user_details($this->session->userdata['log_sess']->USER_ID);
            } else {
                $get_det = $this->Users_model->get_user_details(null);
            }
			$details = array (
                'get_det'           =>  $get_det,
				'specific_account'	=>	$this->Users_model->get_specific_data($uname),
				'num_subscriber'	=>	$this->Subscribe_model->get_subscriber($uname),
				'get_location'		=>	$this->Location_model->get_location_place($uname),
				'num_posted'		=>	$this->Postcontent_model->posted_num_spec($uname),
				'num_purchased'		=>	$this->Purchaseproduct_model->purchased_num_spec($uname),
				'purchased'			=>	$this->Purchaseproduct_model->purchased_spec($uname),
				'postedcont'		=>	$this->Postcontent_model->posted_spec($uname),
                'get_about_user'    =>  $this->Aboutus_model->get_about_user($uname),
				'subscriber_ctr'	=>	'0',
                'curpage'           =>  'profile'
			);

            $data['content']    =   $this->load->view('user/profile/profile_content.php', $details, TRUE);
            $data['curpage']    =   "profile";
            $data['title']      =   "Profile";
			$this->load->view('template.php', $data);
		}else{
			$this->session->set_flashdata('attempt_open', 'This is my message');
			redirect('/');
		}
	}

    public function settings($uname)
    {
        if ($this->session->userdata('log_sess') != null){
            $get_det = "";
            if ( !empty($this->session->userdata['log_sess']) ) {
                $get_det = $this->Users_model->get_user_details($this->session->userdata['log_sess']->USER_ID);
            } else {
                $get_det = $this->Users_model->get_user_details(null);
            }
            $details = array (
                'get_det'           =>  $get_det,
                'specific_account'  =>  $this->Users_model->get_specific_data($uname),
                'num_subscriber'    =>  $this->Subscribe_model->get_subscriber($uname),
                'get_location'      =>  $this->Location_model->get_location_place($uname),
                'num_posted'        =>  $this->Postcontent_model->posted_num_spec($uname),
                'num_purchased'     =>  $this->Purchaseproduct_model->purchased_num_spec($uname),
                'purchased'         =>  $this->Purchaseproduct_model->purchased_spec($uname),
                'postedcont'        =>  $this->Postcontent_model->posted_spec($uname),
                'get_about_user'    =>  $this->Aboutus_model->get_about_user($uname),
                'curpage'           =>  'settings',
                'subscriber_ctr'    =>  '0'
            );

            $data['content']    =   $this->load->view('user/settings/settings.php', $details, TRUE);
            $data['curpage']    =   "settings";
            $data['title']      =   "Settings";
            $this->load->view('template.php', $data);
        }else{
            $this->session->set_flashdata('attempt_open', 'This is my message');
            redirect('/');
        }
    }

	public function uploadImage()
    {
        $uploadfile =  $_SERVER['DOCUMENT_ROOT']. base_url() ."public/img/".$_FILES["image"]["name"];
        // $tar
        // move_uploaded_file($_FILES["image"]["name"], $uploadfile);
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
    }

    public function addRecipe()
    {
    	date_default_timezone_set("Asia/Manila");
    	$date = date("F d, Y g:i A");

    	$params = array (
    		'NO'			=>	'',
    		'NAME'			=>	$this->session->userdata('log_sess')->NAME,
    		'USERNAME'		=>	$this->session->userdata('log_sess')->USERNAME,
    		'ACCOUNT_TYPE'	=>	$this->session->userdata('log_sess')->ACCOUNT_TYPE,
    		'TITLE'			=>	$this->input->post('title'),
    		'IMAGEURL'		=>	substr($this->input->post('imageName'), 12),
    		'DESCRIPTION'	=>	$this->input->post('descript'),
    		'DATE'			=>	$date,
    		'TEMPLATENAME'	=>	'design2',
    		'RECIPES'		=>	$this->input->post('recipe'),
    		'COMMAND'		=>	'FREE',
    		'PRICE'			=>	'',
    		'CATEGORIES'	=>	'CUPCAKES'
    	);
    	// print_r($params);
    	$this->Postcontent_model->insert_new_recipe_free($params);

        $dateMDY = date("F d, Y");
        $time = date("g:i A");
        $params_notif = array(
            'NO'            => '',
            'NAME'          => $this->session->userdata('log_sess')->NAME,
            'USERNAME'      => $this->session->userdata('log_sess')->USERNAME,
            'CONTENT'       => 'posted new recipes! Named "'.$this->input->post('title').'"' ,
            'DATE'          => $dateMDY,
            'HOUR'          => $time,
            'ACTIVE'        => '1',
            'IMAGEURL'      => $this->session->userdata('log_sess')->IMAGEURL
        );
        $this->Notification_model->insert_new_notif($params_notif);
    }

    // public function index(){
    // }
    public function update_about_me()
    {
        $usernameSess = $this->session->userdata('log_sess')->USERNAME;
        $params = array (
            'ABOUTUS'   =>   $this->input->post('set_ot_in_about')
        );

        $this->Aboutus_model->update_about_user($params, $usernameSess);

        $dateMDY = date("F d, Y");
        $time = date("g:i A");
        $params_notif = array(
            'NO'            => '',
            'NAME'          => $this->session->userdata('log_sess')->NAME,
            'USERNAME'      => $this->session->userdata('log_sess')->USERNAME,
            'CONTENT'       => 'updated his/her about page' ,
            'DATE'          => $dateMDY,
            'HOUR'          => $time,
            'ACTIVE'        => '1',
            'IMAGEURL'      => $this->session->userdata('log_sess')->IMAGEURL
        );
        $this->Notification_model->insert_new_notif($params_notif);
    }

    public function update_personal_information()
    {
        $usernameSess = $this->session->userdata('log_sess')->USERNAME;

        
        $params = array (
            'NAME'          =>      $this->input->post('NAME'),
            'PHONENUMBER'   =>      $this->input->post('PHONENUMBER'),
            'EMAIL'         =>      $this->input->post('EMAIL'),
            'PASSWORD'      =>      md5($this->input->post('PASSWORD'))
        );

        $this->Users_model->update_personal_infor($params, $usernameSess);
        // $this->session->userdata('log_sess') = $this->input->post('params');
        $this->session->userdata('log_sess')->NAME              =  $this->input->post('NAME') ;
        $this->session->userdata('log_sess')->PHONENUMBER       =  $this->input->post('PHONENUMBER') ;
        $this->session->userdata('log_sess')->EMAIL             =  $this->input->post('EMAIL') ;
        $this->session->userdata('log_sess')->PASSWORD          =  md5($this->input->post('PASSWORD')) ;


        $dateMDY = date("F d, Y");
        $time = date("g:i A");
        $params_notif = array(
            'NO'            => '',
            'NAME'          => $this->session->userdata('log_sess')->NAME,
            'USERNAME'      => $this->session->userdata('log_sess')->USERNAME,
            'CONTENT'       => 'updated his/her personal information' ,
            'DATE'          => $dateMDY,
            'HOUR'          => $time,
            'ACTIVE'        => '1',
            'IMAGEURL'      => $this->session->userdata('log_sess')->IMAGEURL
        );
        $this->Notification_model->insert_new_notif($params_notif);
    }

    public function update_personal_skills()
    {
        $usernameSess = $this->session->userdata('log_sess')->USERNAME;
        $skill = $this->input->post('set_ot_in_skills');

        $new = "";

        foreach ($skill as $sk) {
            $new .= $sk;
        }

        $params = array (
            'SKILLS'    =>  rtrim($new, "|")
        );

        $this->Users_model->update_skills($params, $usernameSess);

        $dateMDY = date("F d, Y");
        $time = date("g:i A");
        $params_notif = array(
            'NO'            => '',
            'NAME'          => $this->session->userdata('log_sess')->NAME,
            'USERNAME'      => $this->session->userdata('log_sess')->USERNAME,
            'CONTENT'       => 'updated his/her skills' ,
            'DATE'          => $dateMDY,
            'HOUR'          => $time,
            'ACTIVE'        => '1',
            'IMAGEURL'      => $this->session->userdata('log_sess')->IMAGEURL
        );
        $this->Notification_model->insert_new_notif($params_notif);
    }

    public function update_profile_picture()
    {
        $uname =  $this->session->userdata('log_sess')->USERNAME;
        $loc = $_SERVER['DOCUMENT_ROOT'].base_url()."public/img/prof/";
        // print_r($loc);
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

            redirect("profile/settings/".$uname."");
        } else {
            redirect("profile/settings/".$uname."");
        }
    }
}
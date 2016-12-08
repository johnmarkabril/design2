<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');    
        $this->load->model('Recipes_model');     
        $this->load->model('Location_model');      
        $this->load->model('Aboutus_model'); 
    }

	public function index()
	{
		$details = array (
			// 'posted_content'	=>	$this->Postcontent_model->get_content(),
			// 'recipes_content'	=>	$this->Recipes_model->get_content(),
			'curpage'			=>	'',
			'title'				=>	''
		);

		// $data['content'] = $this->load->view('carouselimagescontent.php', $details, TRUE);
		// $this->load->view('template.php', $details);
		$data['content'] = $this->load->view('signup.php',$details,TRUE);
		$data['curpage']	=	"signup";
		$data['title']		=	"Sign-up";
		$this->load->view('template.php', $data);
	}

	public function insert_verify_no()
	{
		$random_code	= 	$_POST['random_code'];
		$su_fname		= 	$_POST['su_fname'];
		$su_lname		= 	$_POST['su_lname'];
		$fullname		= 	$su_fname.' '.$su_lname;
		$su_uname		= 	$_POST['su_uname'];
		$su_cpnum		= 	$_POST['su_cpnum'];
		$su_email		= 	$_POST['su_email'];
		$su_pword		= 	md5($_POST['su_pword']);

		$params = array (
			'USER_ID'			=>		'',
			'NAME'				=>		$fullname,
			'USERNAME'			=>		$su_uname,
			'PHONENUMBER'		=>		$su_cpnum,
			'EMAIL'				=>		$su_email,
			'PASSWORD'			=>		$su_pword,
			'ACCOUNT_TYPE'		=>		'User',
			'REG_TIME'			=>		'',
			'ACTIVATED'			=>		0,
			'TEMPLATENAME'		=>		'DESIGN2',
			'VERIFIED'			=>		'NO',
			'VERIFICATIONCODE'	=>		$random_code,
			'PERMISSION'		=>		'',
			'SKILLS'			=>		'',
			'IMAGEURL'			=>		'firstprof.png',
			'DELETION'			=>		'0',
    		'LATITUDE'			=>		"",
    		'LONGHITUDE'		=>		""
		);

		$params_loc = array (
			'NO'			=>		'',
			'USERNAME'		=>		$su_uname,
			'PLACE'			=>		'Philippines'
		);

		$params_aboutuser = array (
			'NO'	 	=>	'',
			'USERNAME'	=> 	$uname,
			'ABOUTUS'	=> 	""
		);

		$this->Users_model->insert_new_user($params);
		$this->Location_model->insert_user_location($params_loc);
		$this->Aboutus_model->insert_user_about($params_aboutuser);

		// print_r($params);
	}

	public function check_verification()
	{
		$su_emailcode	= 	$_POST['su_emailcode'];
		$su_fname		= 	$_POST['su_fname'];
		$su_lname		= 	$_POST['su_lname'];
		$fullname		= 	$su_fname.' '.$su_lname;
		$su_uname		= 	$_POST['su_uname'];
		$su_cpnum		= 	$_POST['su_cpnum'];
		$su_email		= 	$_POST['su_email'];
		$su_pword		= 	md5($_POST['su_pword']);

		$checking 	=	$this->Users_model->check_verification_code($su_emailcode, $su_uname, $su_pword, $su_email);
		
		if (sizeof($checking) == 1){
			$userid = $checking[0]->USER_ID; 

			$params = array (
				'USER_ID'			=>		$userid,
				'NAME'				=>		$fullname,
				'USERNAME'			=>		$su_uname,
				'PHONENUMBER'		=>		$su_cpnum,
				'EMAIL'				=>		$su_email,
				'PASSWORD'			=>		$su_pword,
				'ACCOUNT_TYPE'		=>		'User',
				'REG_TIME'			=>		'',
				'ACTIVATED'			=>		0,
				'TEMPLATENAME'		=>		'DESIGN2',
				'VERIFIED'			=>		'YES',
				'VERIFICATIONCODE'	=>		''
			);

			$this->Users_model->update_verified($su_emailcode, $su_email, $params);

			echo "TRUE";
			// echo $userid;
		}else{
			echo "FALSE";
		}
		// print_r($su_emailcode . " - " . $su_uname . " - " . $su_pword . " - " . $su_email );
		// print_r($checking);
	}
}
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
		$arrayEmail = array();
		foreach ( $this->Users_model->get_all_email() as $gae ) :
			array_push($arrayEmail, $gae->EMAIL);
		endforeach;
		$details = array (
			'curpage'			=>	'',
			'title'				=>	'',
			'get_all_email'		=>	json_encode($arrayEmail)
		);

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
		$this->Users_model->insert_new_user($params);

		$params_loc = array (
			'NO'			=>		'',
			'USERNAME'		=>		$su_uname,
			'PLACE'			=>		'Philippines'
		);
		$this->Location_model->insert_user_location($params_loc);

		$params_aboutuser = array (
			'NO'	 	=>	'',
			'USERNAME'	=> 	$su_uname,
			'ABOUTUS'	=> 	''
		);
		$this->Aboutus_model->insert_user_about($params_aboutuser);

		require_once('public/swiftmailer/lib/swift_required.php');
		// Create the Transport
		$transport = Swift_SmtpTransport::newInstance('mx1.hostinger.ph', 2525)
		  ->setUsername('jmaeprovider@jmaeprovider.xyz')
		  ->setPassword('111517jmae')
		  ;

		$mailer = Swift_Mailer::newInstance($transport);

		$message = Swift_Message::newInstance('JMAE SITE PROVIDER - VERIFICATION CODE')
		  ->setFrom(array('jmaeprovider@jmaeprovider.xyz' => 'JMAE Provider'))
		  ->setTo(array($su_email))
		  ->setBody('This is your verification code: ' . $random_code);	
		  ;

		$result = $mailer->send($message);

		// print_r($params);
	}

	public function check_email()
	{
		$su_email		= 	$_POST['su_email'];
		$row = $this->Users_model->check_email($email);
		echo $row;
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
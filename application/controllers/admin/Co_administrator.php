<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Co_Administrator extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Notification_model');
        $this->load->model('Permissiondata_model');
        $this->load->model('Aboutus_model');
        $this->curpage = "Co-Administrator";
    }

	public function index()
	{
		$no_logsess = $this->session->userdata('log_sess')->USER_ID;

		$perm = $this->Users_model->get_permiss($no_logsess);
		$permis = "";
		foreach ($perm as $per) {
			$permis = $per->PERMISSION;
		}

		$details = array (
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'			=> 	explode("|", $permis),
			'get_spec'					=>	$this->Users_model->get_permiss(null),
			'get_content'				=>	$this->Permissiondata_model->get_content(),
			'get_notification'			=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'get_all_admin'				=>	$this->Users_model->get_all_admin()
		);

		$data['content'] = $this->load->view('admin/usermanagement/co_administrator.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

	public function information($uname)
	{
		$no_logsess = $this->session->userdata('log_sess')->USER_ID;

		$perm = $this->Users_model->get_permiss($no_logsess);
		$permis = "";
		foreach ($perm as $per) {
			$permis = $per->PERMISSION;
		}

		$details = array (
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'			=> 	explode("|", $permis),
			'get_spec'					=>	$this->Users_model->get_permiss($uname),
			'get_content'				=>	$this->Permissiondata_model->get_content(),
			'get_notification'			=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> 	$this->Notification_model->get_all_notification_rows(),
			'get_all_admin'				=>	$this->Users_model->get_all_admin()
		);

		$data['content'] = $this->load->view('admin/usermanagement/co_administrator.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);

		// print_r($details['get_spec']);
	}

	public function insert_co_admin()
	{
    	date_default_timezone_set("Asia/Manila");
    	$date = date("F d, Y g:i A");

    	$params = array (
    		'USER_ID'			=>	"",
    		'NAME'				=>	$this->input->post('fullname'),
    		'USERNAME'			=>	$this->input->post('txt_create_coa_uname'),
    		'PHONENUMBER'		=>	$this->input->post('txt_create_coa_pnum'),
    		'EMAIL'				=>	$this->input->post('txt_create_coa_email'),
    		'PASSWORD'			=>	md5($this->input->post('txt_create_coa_pword')),
    		'ACCOUNT_TYPE'		=>	"Administrator",
    		'REG_TIME'			=>	$date,
    		'ACTIVATED'			=>	"0",
    		'TEMPLATENAME'		=>	"DESIGN2",
    		'VERIFIED'			=>	"YES",
    		'VERIFICATIONCODE'	=>	"",
    		'PERMISSION'		=>	"",
    		'SKILLS'			=>	"",
    		'IMAGEURL'			=>	"",
    		'DELETION'			=>	"0",
    		'LATITUDE'			=>	"",
    		'LONGHITUDE'		=>	""
    	);

    	$this->Users_model->insert_coadmin($params);

    	$params_about = array (
    		'NO'		=>	'',
    		'USERNAME'	=>	$this->input->post('txt_create_coa_uname'),
    		'ABOUTUS'	=>	''
    	);
    	$this->Aboutus_model->insert_user_about($params_about);
    	// print_r($params);
	}

	public function delete_coadministrator($no)
	{
		$params = array (
			'DELETION'		=> "1"
		);
		$this->Users_model->delete_coadmm($params, $no);
		redirect("admin/co_administrator");
		// delete_coadmm($params, $no)
	}

	public function update_coadministrator()
	{
		$permission = $this->input->post('txt_select_perm');

        $new = "";

        foreach ($permission as $per) {
            $new .= $per;
        }

        $params = array (
            'PERMISSION'    =>  rtrim($new, "|")
        );

		$this->Users_model->delete_coadmm($params, $this->input->post('txt_update_coa_userid'));
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Notification_model');
        $this->load->model('Admin_contacts_model');
    }

	public function index()
	{
		$no_logsess 	= $this->session->userdata('log_sess')->USER_ID;
		$uname_logsess = $this->session->userdata('log_sess')->USERNAME;

		$perm = $this->Users_model->get_permiss($no_logsess);
		$permis = "";
		foreach ($perm as $per) {
			$permis = $per->PERMISSION;
		}
		$details = array (
			'curpage'					=> 	'Contacts',
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'			=> 	explode("|", $permis),
			'get_notification'			=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'title'						=> 	'Contacts',
			'get_all_contacts'			=> $this->Admin_contacts_model->get_all_contacts($uname_logsess)
		);

		$data['content'] = $this->load->view('admin/contacts/contacts', $details, TRUE);
		$this->load->view('admin/template_admin.php', $data);
	}

	public function uploadImage()
    {
        $uploadfile =  $_SERVER['DOCUMENT_ROOT']. base_url() ."public/img/prof/".$_FILES["image"]["name"];
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
    }

    public function insertContacts()
    {
    	$params = array (
    		'NO'			=>	'',
    		'IMAGEURL'		=>	$this->input->post('subimage'),
    		'LASTNAME'		=>	$this->input->post('txt_contact_lname'),
    		'FIRSTNAME'		=>	$this->input->post('txt_contact_fname'),
    		'POSITION'		=>	$this->input->post('txt_contact_pos'),
    		'COMPANY'		=>	$this->input->post('txt_contact_comp'),
    		'ADDRESS'		=>	$this->input->post('txt_contact_add'),
    		'PHONE_NUM'		=>	$this->input->post('txt_contact_pnum'),
    		'DELETION'		=>	'0',
    		'ADMIN_UNAME'	=>	$this->session->userdata('log_sess')->USERNAME
    	);

    	$this->Admin_contacts_model->insertnew_contact($params);
    }

    public function updateContacts()
    {

        if ( isset($_POST['submit']) ) {
            $params = array (
                'DELETION'  =>  "1"
            );

            $this->Admin_contacts_model->update_contact($params, $this->session->userdata('log_sess')->USERNAME, $_POST['txt_contact_no']);
            redirect('admin/contacts');
        } else {
            redirect('admin/contacts');
        }
    }

    public function updateInformation()
    {
        if ( isset($_POST['submit']) ) {

            $uploadfile =  $_SERVER['DOCUMENT_ROOT']. base_url() ."public/img/prof/".$_FILES["image"]["name"];
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

            $params = array (
                'LASTNAME'      =>  $_POST['txt_contact_lname'],
                'FIRSTNAME'     =>  $_POST['txt_contact_fname'],
                'POSITION'      =>  $_POST['txt_contact_pos'],
                'COMPANY'       =>  $_POST['txt_contact_comp'],
                'ADDRESS'       =>  $_POST['txt_contact_add'],
                'PHONE_NUM'     =>  $_POST['txt_contact_pnum'],
                'IMAGEURL'      =>  $_FILES["image"]["name"],
                'DELETION'      =>  '0',
                'ADMIN_UNAME'   =>  $this->session->userdata('log_sess')->USERNAME
            );

            $this->Admin_contacts_model->update_contact($params, $this->session->userdata('log_sess')->USERNAME, $_POST['txt_contact_no']);
            redirect('admin/contacts');
        } else {
            redirect('admin/contacts');
        }
    }
}
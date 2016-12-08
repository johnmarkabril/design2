<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_contacts_model extends CI_Model
{

	public $table				= 'admin_contacts';
	public $no					= 'NO';
	public $img_url				= 'IMAGE_URL';
	public $lname				= 'LASTNAME';
	public $fname				= 'FIRSTNAME';
	public $position			= 'POSITION';
	public $company				= 'COMPANY';
	public $address				= 'ADDRESS';
	public $phone_num			= 'PHONE_NUM';
	public $deletion			= 'DELETION';
	public $admin_name			= 'ADMIN_NAME';

	function __construct()
	{
		parent::__construct();
	}

	function get_all_contacts(){
		$row = $this->db->get($this->table);

		return $row->result();
	}
}
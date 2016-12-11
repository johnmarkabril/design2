<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_contacts_model extends CI_Model
{

	public $table				= 'admin_contacts';
	public $no					= 'NO';
	public $img_url				= 'IMAGEURL';
	public $lname				= 'LASTNAME';
	public $fname				= 'FIRSTNAME';
	public $position			= 'POSITION';
	public $company				= 'COMPANY';
	public $address				= 'ADDRESS';
	public $phone_num			= 'PHONE_NUM';
	public $deletion			= 'DELETION';
	public $admin_uname			= 'ADMIN_UNAME';

	function __construct()
	{
		parent::__construct();
	}

	function get_all_contacts($uname){
		$row = $this->db->where($this->admin_uname, $uname)
						->order_by($this->lname, "ASC")
						->where($this->deletion, "0")
						->get($this->table);

		return $row->result();
	}

	function insertnew_contact($params)
	{
		$this->db->insert($this->table, $params);
	}

	function update_contact($params, $uname, $no)
	{
		$this->db->where($this->admin_uname, $uname)
				 ->where($this->no, $no)
				 ->update($this->table,$params);
	}
}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Paypal_model extends CI_Model
{
	public $table 		 			= "paypal_configuration";
	public $dbno 					= "NO";
	public $status					= "STATUS";
	public $email					= "PAYPAL_EMAIL";

	function __construct()
	{
		parent::__construct();
	}


	function insert_new_account($params)
	{
		$this->db->insert($this->table, $params);
	}

	function get_paypal_account(){
		$row = 	$this->db->get($this->table);
					 	 
		return $row->result();
	}

	function get_spec_paypal($no){
		$row = 	$this->db->where($this->dbno, $no)
						 ->limit(1,0)
						 ->get($this->table);
					 	 
		return $row->result();
	}

	function update_paypal_account($params, $email)
	{
		$this->db->where($this->email, $email)
				 ->update($this->table,$params);
	}

	function disable_all_enabled($paramsDisableAll)
	{
		$this->db->where($this->status, "enabled")
				 ->update($this->table,$paramsDisableAll);
	}

	function get_paypal_enable()
	{
		$row = 	$this->db->where($this->status, "enabled")
						 ->limit(1,0)
						 ->get($this->table);
					 	 
		return $row->result();
	}
}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Messages_model extends CI_Model
{
	public $table 		 			= "messages";
	public $dbno 					= "NO";
	public $hashnoemail				= "HASHNOEMAIL";
	public $emailto					= "EMAILTO";
	public $deletion				= "DELETION";

	function __construct()
	{
		parent::__construct();
	}

	function get_all_content($email)
	{
		$row = 	$this->db->order_by($this->dbno, "DESC")
						 ->where($this->deletion, "0")
						 ->where($this->emailto, $email)
					 	 ->get($this->table);
		return $row->result();
	}

	function get_all_numrows($email)
	{
		$row = 	$this->db->order_by($this->dbno, "DESC")
						 ->where($this->deletion, "0")
						 ->where($this->emailto, $email)
					 	 ->get($this->table);
		return $row->num_rows();
	}

	function get_specific_mess($hash,$email)
	{
		$row = 	$this->db->where($this->deletion, "0")
						 ->where($this->hashnoemail, $hash)
						 ->where($this->emailto, $email)
						 ->limit(1)
					 	 ->get($this->table);
		return $row->num_rows();
	}

}
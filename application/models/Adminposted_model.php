<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Adminposted_model extends CI_Model
{
	public $table 		 			= "admin_posted";
	public $dbno					= "NO";


	function __construct()
	{
		parent::__construct();
	}

	function get_all_admin_posted(){
		$row = 	$this->db->order_by($this->dbno, "DESC")
						 ->get($this->table);
					 	 
		return $row->result();
	}
	
}
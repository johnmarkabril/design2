<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Adminposted_model extends CI_Model
{
	public $table 		 			= "admin_posted";
	public $dbno					= "NO";
	public $uname					= "USERNAME";
	public $deletion				= "DELETION";


	function __construct()
	{
		parent::__construct();
	}

	function get_all_admin_posted(){
		$row = 	$this->db->where($this->deletion, "0")
						 ->order_by($this->dbno, "DESC")
						 ->get($this->table);
					 	 
		return $row->result();
	}

	function insert_post($params){
		$this->db->insert($this->table, $params);
	}
	
	function update_content($params, $uname){
		$this->db->where($this->uname, $uname)
				 ->update($this->table, $params);
	}
}
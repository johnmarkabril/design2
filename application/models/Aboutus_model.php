<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aboutus_model extends CI_Model
{
	public $table 		 			= "about_user";
	public $dbno 					= "NO";
	public $uname 					= "USERNAME";

	function __construct()
	{
		parent::__construct();
	}

	function get_about_user($uname){
		$row = 	$this->db->where($this->uname, $uname)
					 	 ->get($this->table);
		return $row->result();
	}
	
	function insert_user_about($params){
		$this->db->insert($this->table, $params);
	}

	function update_about_user($params, $username){
        $this->db->where($this->uname, $username);	
        $this->db->update($this->table, $params); 
	}
}
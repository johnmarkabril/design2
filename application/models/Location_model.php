<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Location_model extends CI_Model
{
	public $table 		 			= "location";
	public $dbno 					= "NO";
	public $uname 					= "USERNAME";

	function __construct()
	{
		parent::__construct();
	}

        // $this->db->order_by($this->id,$this->order);
	function get_location_place($uname){
		$row = 	$this->db->where($this->uname, $uname)
					 	 ->get($this->table);
		return $row->result();
	}
	
	function insert_user_location($params){
		$this->db->insert($this->table, $params);
	}
}
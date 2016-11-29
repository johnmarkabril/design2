<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Permissiondata_model extends CI_Model
{
	public $table 		 			= "permission_data";
	public $dbno 					= "NO";
	public $active 					= "ACTIVE";

	function __construct()
	{
		parent::__construct();
	}

        // $this->db->order_by($this->id,$this->order);
	function get_content(){
		$row = 	$this->db->where($this->active, 'yes')
					 	 ->get($this->table);
		return $row->result();
	}

}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Services_model extends CI_Model
{
	public $table 				= "services";
	public $dbno 					= "NO";

	function __construct()
	{
		parent::__construct();
	}

	function get_services(){
		$row = 	$this->db->get($this->table);
		return $row->result();
	}

	function get_specific_services($no){
		$row = 	$this->db->where($this->dbno, $no)
						 ->get($this->table);
		return $row->result();
	}
}
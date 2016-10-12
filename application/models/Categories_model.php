<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categories_model extends CI_Model
{
	public $table 		 			= "categories";
	public $dbno 					= "NO";
	public $catname 				= "CATNAME";

	function __construct()
	{
		parent::__construct();
	}

        // $this->db->order_by($this->id,$this->order);
	function get_content(){
		$row = 	$this->db->order_by($this->dbno, "ASC")
					 	 ->get($this->table);
		return $row->result();
	}

}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categories_model extends CI_Model
{
	public $table 		 			= "categories";
	public $dbno 					= "NO";
	public $catname 				= "CATNAME";
	public $status 					= "STATUS";

	function __construct()
	{
		parent::__construct();
	}

        // $this->db->order_by($this->id,$this->order);
	function get_content()
	{
		$row = 	$this->db->order_by($this->dbno, "DESC")
						 ->where($this->status, "Enabled")
					 	 ->get($this->table);
		return $row->result();
	}

	function get_all_content()
	{
		$row = 	$this->db->order_by($this->dbno, "DESC")
					 	 ->get($this->table);
		return $row->result();
	}

	function insert_new_categ($params)
	{
		$this->db->insert($this->table, $params);
	}

}
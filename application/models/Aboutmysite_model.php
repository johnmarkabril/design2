<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aboutmysite_model extends CI_Model
{
	public $table 		 			= "about_my_site";
	public $dbno 					= "NO";
	public $title 					= "TITLE";
	public $active 					= "ACTIVE";
	public $deletion 				= "DELETION";

	function __construct()
	{
		parent::__construct();
	}

        // $this->db->order_by($this->id,$this->order);
	function get_content_active(){
		$row = 	$this->db->where($this->active, "1")
						 ->limit(1)
					 	 ->get($this->table);
		return $row->result();
	}

	function get_list(){
		$row = 	$this->db->where($this->deletion, '0')
						 ->get($this->table);
		return $row->result();
	}

	function create_aboutMySite($params)
	{
		$this->db->insert($this->table, $params);
	}

	function delete_aboutMySite($params, $no){
		$this->db->where($this->dbno, $no)
				 ->update($this->table, $params);
	}

	function spec_aboutMySite($no){
		$row = $this->db->where($this->dbno, $no)
						->limit(1)
						->get($this->table);
		return $row->result();
	}
}
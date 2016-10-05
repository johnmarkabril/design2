<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Recipes_model extends CI_Model
{
	public $table 		 			= "posted";
	public $dbno 					= "NO";
	public $command 				= "COMMAND";
	public $templatename 			= "TEMPLATENAME";

	function __construct()
	{
		parent::__construct();
	}

	function get_content(){
		$row = 	$this->db->where($this->templatename, 'DESIGN2')
						 ->where($this->command, 'SELL')
				 		 ->get($this->table);
		return $row->result();
	}

	// function get_services(){
	// 	$row = 	$this->db->get($this->table);
	// 	return $row->result();
	// }

	// function get_specific_services($no){
	// 	$row = 	$this->db->where($this->dbno, $no)
	// 					 ->get($this->table);
	// 	return $row->result();
	// }
}
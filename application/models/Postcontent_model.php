<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Postcontent_model extends CI_Model
{
	public $table 				= "posted";
	public $tablecomment		= "comment_section_post";
	public $templatename 		= "TEMPLATENAME";
	public $dbno 				= "NO";
	public $postno 				= "POSTNO";
	public $order 				= "DESC";

	function __construct()
	{
		parent::__construct();
	}

	function get_content(){
		// " SELECT * FROM users WHERE EMAIL = '$c_email' AND PASSWORD = '$c_password' "
		$row = 	$this->db->where($this->templatename, 'DESIGN2')
				 		 ->get($this->table);
		return $row->result();
	}

	function get_specific_content($no){
		$row = 	$this->db->where($this->dbno, $no)
						 ->where($this->templatename, 'DESIGN2')
				 		 ->get($this->table);
		return $row->result();
	}

	function insert_comment_mod($params){
		$this->db->insert($this->tablecomment, $params);
	}

	function get_comment_per_post($no){
		$row = 	$this->db->where($this->postno, $no)
						 ->where($this->templatename, 'DESIGN2')
        				 ->order_by($this->dbno,$this->order)
				 		 ->get($this->tablecomment);
		return $row->result();
	}

	function get_comment_per_post_numrow($no){
		$row = 	$this->db->where($this->postno, $no)
						 ->where($this->templatename, 'DESIGN2')
				 		 ->get($this->tablecomment);
		return $row->num_rows();
	}
	
}
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
	public $command 			= "COMMAND";
	public $date 				= "DATE";
	public $uname 				= "USERNAME";

	function __construct()
	{
		parent::__construct();
	}

	function get_content($limit, $start){
		$row = 	$this->db->where($this->templatename, 'DESIGN2')
						 ->where($this->command, 'FREE')
						 ->limit($limit, $start)
						 ->order_by($this->dbno, $this->order)
				 		 ->get($this->table);
		return $row->result();
	}

	function get_content_cat(){
		$row = 	$this->db->where($this->templatename, 'DESIGN2')
						 ->where($this->command, 'FREE')
						 // ->limit($limit, $start)
				 		 ->get($this->table);
		return $row->result();
	}
	function posted_content_numrows(){
		$row = 	$this->db->where($this->templatename, 'DESIGN2')
						 ->where($this->command, 'FREE')
				 		 ->get($this->table);
		return $row->num_rows();
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

	function get_all_num_comment()
	{
		$row = 	$this->db->where($this->templatename, 'DESIGN2')
				 		 ->get($this->tablecomment);
		return $row->num_rows();
	}
	
	function posted_num_spec($uname){
		$row = 	$this->db->where($this->uname, $uname)
				 		 ->get($this->table);
		return $row->num_rows();
	}
	
	function posted_spec($uname){
		$row = 	$this->db->where($this->uname, $uname)
				 		 ->get($this->table);
		return $row->result();
	}
}
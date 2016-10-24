<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Recipes_model extends CI_Model
{
	public $table 		 			= "posted";
	public $dbno 					= "NO";
	public $command 				= "COMMAND";
	public $templatename 			= "TEMPLATENAME";
	public $price					= "PRICE";
	public $title					= "TITLE";

	function __construct()
	{
		parent::__construct();
	}

        // $this->db->order_by($this->id,$this->order);
	function get_content($categ){
		if ($categ == ""){
			$row = 	$this->db->where($this->templatename, 'DESIGN2')
							 ->where($this->command, 'SELL')
					 		 ->get($this->table);
			return $row->result();
		}else if($categ == "ascending"){
			$row = 	$this->db->where($this->templatename, 'DESIGN2')
							 ->where($this->command, 'SELL')
							 ->order_by($this->price,"ASC")
					 		 ->get($this->table);
			return $row->result();
		}else if($categ == "descending"){
			$row = 	$this->db->where($this->templatename, 'DESIGN2')
							 ->where($this->command, 'SELL')
							 ->order_by($this->price,"DESC")
					 		 ->get($this->table);
			return $row->result();
		}else if($categ == "alphabetical"){
			$row = 	$this->db->where($this->templatename, 'DESIGN2')
							 ->where($this->command, 'SELL')
							 ->order_by($this->title,"ASC")
					 		 ->get($this->table);
			return $row->result();
		}
	}

	function get_content_popular(){
		$row = 	$this->db->where($this->templatename, 'DESIGN2')
						 ->where($this->command, 'SELL')
						 ->order_by($this->dbno, "DESC")
						 ->limit(3, 0)
				 		 ->get($this->table);
		return $row->result();	
	}

	function get_specific_prod_sell($no){
		$row = 	$this->db->where($this->templatename, 'DESIGN2')
						 ->where($this->command, 'SELL')
						 ->where($this->dbno, $no)
				 		 ->get($this->table);
		return $row->result();	
	}
}
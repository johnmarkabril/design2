<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Purchaseproduct_model extends CI_Model
{
	public $table 	= 'purchase_product';
	public $no 		= 'NO';
	public $desc	= 'DESC';
	public $date	= 'DATE';
	public $uname	= 'USERNAME';

	function __construct()
	{
		parent::__construct();
	}

	function get_content()
	{
		$row = 	$this->db->order_by($this->no, $this->desc)
						 ->get($this->table);
						 
			return $row->result();
	}

	function get_num_content()
	{
		$row = 	$this->db->order_by($this->no, $this->desc)
						 ->get($this->table);
						 
			return $row->num_rows();
	}
	
	function purchased_num_spec($uname){
		$row = 	$this->db->where($this->uname, $uname)
				 		 ->get($this->table);
		return $row->num_rows();
	}
	
	function purchased_spec($uname){
		$row = 	$this->db->where($this->uname, $uname)
				 		 ->get($this->table);
		return $row->result();
	}

	function gross_month($d_m){
		$row = $this->db->like($this->date, $d_m)
						->get($this->table);
		return $row->result();
	}

	function gross_year($d_){
		$row = $this->db->like($this->date, $d_y)
						->get($this->table);
		return $row->result();
	}

	function activity_month($d_m){
		$row = $this->db->like($this->date, $d_m)
						->get($this->table);
		return $row->num_rows();
	}

}
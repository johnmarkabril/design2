<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Purchaseproduct_model extends CI_Model
{
	public $table 	= 'purchase_product';
	public $no 		= 'NO';
	public $desc	= 'DESC';

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
}
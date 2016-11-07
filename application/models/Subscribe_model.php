<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subscribe_model extends CI_Model
{
	public $table 		 			= "subscribe";
	public $dbno 					= "NO";
	public $uname 					= "USERNAME";

	function __construct()
	{
		parent::__construct();
	}

        // $this->db->order_by($this->id,$this->order);
	function get_subscriber($uname){
		$row = 	$this->db->where($this->uname, $uname)
					 	 ->get($this->table);
		return $row->result();
	}

}
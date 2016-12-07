<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Notification_model extends CI_Model
{
	public $table 		 			= "notification";
	public $dbno 					= "NO";
	public $uname 					= "USERNAME";
	public $active 					= "ACTIVE";
	public $desc					= "DESC";

	function __construct()
	{
		parent::__construct();
	}

        // $this->db->order_by($this->id,$this->order);
	function get_notification(){
		$row = 	$this->db->where($this->active, "1")
						 ->order_by($this->dbno, $this->desc)
						 ->limit(5)
					 	 ->get($this->table);
		return $row->result();
	}

	function get_all_notification_rows()
	{
		$row = 	$this->db->where($this->active, "1")
					 	 ->get($this->table);
		return $row->num_rows();
	}
}
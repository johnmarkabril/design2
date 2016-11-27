<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Events_model extends CI_Model
{
	public $table 		 			= "events";
	public $dbno 					= "NO";
	public $title 					= "TITLE";
	// public $active 					= "ACTIVE";

	function __construct()
	{
		parent::__construct();
	}

    function get_all_events()
    {
    	$row = $this->db->get($this->table);

    	return $row->result();
    }
}
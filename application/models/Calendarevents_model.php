<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Calendarevents_model extends CI_Model
{
	public $table 		 			= "calendarevents";
	public $dbno 					= "NO";
	public $title 					= "TITLE";
	public $start				    = "START";
    public $end                     = "END";
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

    function insert_event($params)
    {
        $this->db->insert($this->table, $params);
    }
}
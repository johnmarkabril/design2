<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Calendarevents_model extends CI_Model
{
	public $table 		 			= "calendarevents";
	public $dbno 					= "id";
	public $title 					= "title";
	public $start				    = "start";
    public $end                     = "end";
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

    function update_events_date($params, $id)
    {
        $this->db->where($this->dbno, $id)
                 ->update($this->table, $params);
    }

    function delete_event($id)
    {
        $this->db->where($this->dbno, $id)
                 ->delete($this->table);
    }
}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Events_model extends CI_Model
{
	public $table 		 			= "events";
	public $dbno 					= "NO";
	public $title 					= "TITLE";
	public $description				= "DESCRIPTION";
	public $deletion				= "DELETION";
	// public $active 					= "ACTIVE";

	function __construct()
	{
		parent::__construct();
	}

    function get_all_events()
    {
    	$row = $this->db->where($this->deletion, '0')
    					->get($this->table);
    	return $row->result();
    }

    function insert_events($params)
    {
		$this->db->insert($this->table, $params);
    }

    function delete_events($params, $no)
    {
        $this->db->where($this->dbno, $no)
        		 ->update($this->table, $params);
    }

    function specific_events($no)
    {
    	$row = $this->db->where($this->dbno, $no)
    					->limit(1)
    					->get($this->table);

    	return $row->result();
    }

    function update_events($params, $no)
    {
        $this->db->where($this->dbno, $no)
                 ->update($this->table, $params);
    }
}
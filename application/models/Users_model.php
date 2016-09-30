<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
{

	public $table			= 'user';
	public $user_id			= 'USER_ID';
	public $password		= 'PASSWORD';
	public $activated		= 'ACTIVATED';
	public $email			= 'EMAIL';
	public $acc_type		= 'ACCOUNT_TYPE';
	public $templatename	= 'TEMPLATENAME';

	function __construct()
	{
		parent::__construct();
	}

	function check_email_pass($c_email, $c_password){
		// " SELECT * FROM users WHERE EMAIL = '$c_email' AND PASSWORD = '$c_password' "
		$row = 	$this->db->where($this->email, $c_email)
				 		 ->where($this->password, md5($c_password))
				 		 ->where($this->activated, 0)
				 		 ->where($this->templatename, 'DESIGN2')
				  		 ->limit(1)
				 		 ->get($this->table);

		if($row->num_rows() > 0){
			return $row->row();
		}else{
			return false;
		}
	}
}
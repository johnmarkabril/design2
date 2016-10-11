<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
{

	public $table					= 'user';
	public $user_id					= 'USER_ID';
	public $password				= 'PASSWORD';
	public $activated				= 'ACTIVATED';
	public $email					= 'EMAIL';
	public $uname					= 'USERNAME';
	public $acc_type				= 'ACCOUNT_TYPE';
	public $templatename			= 'TEMPLATENAME';
	public $verified				= 'VERIFIED';
	public $verificationcode		= 'VERIFICATIONCODE';

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
				 		 ->where($this->verified, 'YES')
				  		 ->limit(1)
				 		 ->get($this->table);

		if($row->num_rows() > 0){
			return $row->row();
		}else{
			return false;
		}
	}

	function insert_new_user($params){
		$this->db->insert($this->table, $params);
	}

	function check_verification_code($su_emailcode, $su_uname, $su_pword, $su_email){
		$row = 	$this->db->where($this->email, $su_email)
						 ->where($this->uname, $su_uname)
						 ->where($this->password, $su_pword)
				 		 ->where($this->verificationcode, $su_emailcode)
				 		 ->where($this->templatename, 'DESIGN2')
				 		 ->where($this->verified, 'NO')
				 		 ->get($this->table);

				 return $row->result();
		// if($row->num_rows() == 1){
		// 	$row->result();
		// 	// print_r();
			
		// 	echo "TRUE";
		// }else{
		// 	echo "FALSE";
		// }
	}

	function update_verified($su_emailcode,$su_email, $params){
        $this->db->where($this->verificationcode, $su_emailcode);	
        // $this->db->where($this->email, $su_email);	
        $this->db->update($this->table, $params); 
	}
}
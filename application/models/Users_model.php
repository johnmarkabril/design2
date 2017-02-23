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
	public $regtime					= 'REG_TIME';
	public $deletion				= 'DELETION';

	function __construct()
	{
		parent::__construct();
	}

	function check_email_pass($c_email, $c_password){
		// " SELECT * FROM users WHERE EMAIL = '$c_email' AND PASSWORD = '$c_password' "
		$row = 	$this->db->where($this->email, $c_email)
				 		 ->where($this->password, md5($c_password))
				 		 ->where($this->activated, 0)
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
				 		 ->where($this->verified, 'NO')
				 		 ->get($this->table);

				 return $row->result();
	}

	function update_verified($su_emailcode,$su_email, $params){
        $this->db->where($this->verificationcode, $su_emailcode);	
        // $this->db->where($this->email, $su_email);	
        $this->db->update($this->table, $params); 
	}

	function get_specific_data($uname) {
		$row =	$this->db->where($this->uname, $uname)
						->limit(1)
						->get($this->table);

				return $row->result();
	}

	function update_personal_infor($params, $uname) {
        $this->db->where($this->uname, $uname);	
        $this->db->update($this->table, $params); 
	}

	function update_skills($params, $uname){
        $this->db->where($this->uname, $uname);	
        $this->db->update($this->table, $params);
	}

	function get_all_admin(){
		$row = $this->db->where($this->acc_type, "Administrator")
						->where($this->deletion, "0")
						->order_by($this->user_id, "DESC")
						->get($this->table);

		return $row->result();
	}

	function get_num_rows_all_user() {
		$row = $this->db->get($this->table);

		return $row->num_rows();
	}

	function get_num_rows_curmonth($c_m){
		$row = $this->db->like($this->regtime, $c_m)
						->get($this->table);

		return $row->num_rows();
	}

	function get_all_user(){
		$row = $this->db->get($this->table);

		return $row->result();
	}

	function get_permiss($userid){
		$row = $this->db->where($this->user_id, $userid)
						->limit(1)
						->get($this->table);

		return $row->result();
	}

	function insert_coadmin($params){
		$this->db->insert($this->table, $params);
	}

	function delete_coadmm($params, $no){
		$this->db->where($this->user_id, $no)
				 ->update($this->table, $params);
	}

	function check_email($email){
		$row = $this->db->where($this->email, $email)
						->get($this->table);

		return $row->num_rows();
	}

	function get_all_email()
	{
		$row = $this->db->get($this->table);

		return $row->result();
	}

	function updateVerificationforgot($params, $email){
		$this->db->where($this->email, $email)
				 ->update($this->table, $params);
	}

	function checkCode($code, $email){
		$row = $this->db->where($this->email, $email)
						->where($this->verificationcode, $code)
						->get($this->table);

		return $row->num_rows();
	}

	function get_user_details($no){
		$row = $this->db->where($this->user_id, $no)
						->limit(1)
						->get($this->table);
		return $row->result();
	}

}
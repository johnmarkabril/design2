<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Success extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');    
        $this->load->model('Recipes_model');   
    }

	public function purchase($no)
	{
		if ($this->session->userdata('log_sess')){
		
	        $get_det = "";
	        if ( !empty($this->session->userdata['log_sess']) ) {
	            $get_det = $this->Users_model->get_user_details($this->session->userdata['log_sess']->USER_ID);
	        } else {
	            $get_det = $this->Users_model->get_user_details(null);
	        }
	        
	        $details = array (
	            'get_det'           =>  $get_det,
				'prod_sell'			=>	$this->Recipes_model->get_specific_prod_sell($no)
			);

			$data['content'] = $this->load->view('user/success/success.php', $details, TRUE);
			$data['curpage']	=	"success";
			$data['title']		=	"Purchased Success";
			$this->load->view('template.php', $data);
		}else{
			$this->session->set_flashdata('attempt_open', 'This is my message');
			redirect('/');
		}
	}
}
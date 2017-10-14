<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
		
		public function __construct()
	{
		parent:: __construct();
		
		$this->load->model('login_model','login');
		
		
	}
	
	
	public function index()
	{
		
		$data['title']="BucketList";
			if($_SERVER['REQUEST_METHOD']=='POST'){
			$user=array(
			'username'=>$this->input->post('user'),
			'password'=>$this->input->post('pwrd'));
			$rs=$this->login->validate($user);
		$info=$rs->result_array();
			if($rs->num_rows()==0)
			{
		$this->load->view('template/header',$data);
		$this->load->view('template/login-header');
		$this->load->view('bucket/Login-body');
		$this->load->view('template/login_footer');
			}
			
			else{
				
		$data['title']="Home";
					
					$user=array(
					'username'=>$info[0]['username'],
					'password'=>$info[0]['password']);
					$this->session->set_userdata($user);	
						redirect('Bucket/home');
				}
		}
		
		else{
				$this->load->view('template/header',$data);
		$this->load->view('template/login-header');
		$this->load->view('bucket/Login-body');
		$this->load->view('template/login_footer');
		}
	}
    

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login','refresh');

		
			
	}
}

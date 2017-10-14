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

		if(isset($_SESSION['username'])||isset($_SESSION['email'])&&isset($_SESSION['password']))
		{
			redirect('Bucket/home','refresh');
		}
		else{

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
		
	}
    

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login','refresh');

		
			
	}
	
	public function signup()
	{
				$data=array(
				'username'=>$this->input->post('user_name'),
				'Email'=>$this->input->post('email'),
				'password'=>$this->input->post('pwrd')
				
				);
				$this->login->create($data);
					$user=array(
					'username'=>$data['username'],
					'password'=>$data['password']);
					$this->session->set_userdata($user);	
						redirect('Bucket/home');
				
     
	
			
	}
	
	
	public function check_user()
		{
			
		 $usr=$this->input->post('name');
		 $result=$this->login->check_user_exist($usr);
		
		 if($result>0)
		 {
			 
		 echo 'false';
		  }
		 else{
		   echo	 'true';
		  }
		}
}

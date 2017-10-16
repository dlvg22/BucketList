<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
		public function __construct()
	{
		parent:: __construct();
		
		$this->load->model('login_model','login');
		$this->load->model('Profile_model','prfile');
		
	}

	public function index()
	{
		if(isset($_SESSION['username'])||isset($_SESSION['email'])&&isset($_SESSION['password']))
		{
			redirect('Bucket','refresh');
		}
		else{
		$data['title']="BucketList";
			if($_SERVER['REQUEST_METHOD']=='POST'){
			$user=array(
			'username'=>$this->input->post('userlogin'),
			'password'=>$this->input->post('passlogin'),
			
			);
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
					'password'=>$info[0]['password'],
					'userID'=>$info[0]['userID']);
					
					$this->session->set_userdata($user);	
						redirect('Bucket');
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
	public function user_login(){
		
		$data=array('username'=>$this->input->post('name'));
	
		$rs=$this->login->check_user($data);
		
		if($rs==false){
			echo 'false';
			
			
		}
		else{
			
			
			echo 'true';
		}
	}
		public function user_pass(){
		
		$data=array('userpass'=>$this->input->post('pwd'));
	
		$rs=$this->login->check_pass($data);
		
		if($rs==false){
			echo 'false';
			
			
		}
		else{
			
			
			echo 'true';
		}
		}	


	
	public function signup()
	{
				$data=array(
				'username'=>$this->input->post('user_name'),
				'Email'=>$this->input->post('email'),
				'password'=>$this->input->post('pwrd'),
				);
					$rs=$this->login->create($data);
					$nickname=array(
					'nickname'=>$this->input->post('alias'),
					'userID'=>$rs);
					$this->prfile->nickname($nickname);
					$user=array(
					'username'=>$data['username'],
					'password'=>$data['password'],
					'userID'=>$rs
					);
					$this->session->set_userdata($user);	
						redirect('Bucket');
				
     
	
			
	}
	
	
	public function check_user()
		{
		
		$data=array(
		array('field'=>'name','label'=>'Username','rules'=>'trim|required|is_unique[users.username]'));
		$this->form_validation->set_rules($data);
		if ($this->form_validation->run()===FALSE){
				echo 'false';
				
		}
		else{
		   echo	 'true';
		}
		}
		
		public function check_email()
		{
		
		$data=array(
		array('field'=>'email','label'=>'email address','rules'=>'trim|required|valid_email|is_unique[users.Email]'));
		$this->form_validation->set_rules($data);
		if ($this->form_validation->run()===FALSE){
				
				echo 'false';
				
				
			
		}
		else{
		   echo	 'true';
		}
		}
		
			public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login','refresh');

		
			
	}
		
}


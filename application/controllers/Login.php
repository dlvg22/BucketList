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
		if(isset($_SESSION['user'][0]['username'])||isset($_SESSION['user'][0]['useremail']) &&isset($_SESSION['user'][0]['password'])){
					redirect('Bucket','refresh');
				}
				{
			$data['title']="BucketList";
			if($_SERVER['REQUEST_METHOD']=='POST'){
			$user=array(
			'username'=>$this->input->post('user'),
			'password'=>$this->input->post('pass'));
				$rs=$this->login->validate($user);
			if($rs==0){

				echo 'false';
			}
			else{
				echo 'true';
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
	public function verified(){

		
			$user=$this->login->myuserdata($this->input->post('userlogin'));
			$this->session->set_userdata('user',$user);
		
	redirect('Bucket');
		


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
					array(
					'username'=>$data['username'],
					'password'=>$data['password'],
					'userID'=>$rs)
					);
			
			$this->session->set_userdata('user',$user);
						redirect('Bucket');
				
    
	
			
	}
	
	
	public function check_user()
		{
		
		$data=array(
		array('field'=>'name','label'=>'Username','rules'=>'trim|required|is_unique[users.username]'));
		$this->form_validation->set_rules($data);
		$this->form_validation->set_message('is_unique', 'Username already exist');
		if ($this->form_validation->run()===FALSE){
					$error=validation_errors();
					echo $error;
				
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
				$this->form_validation->set_message('is_unique', 'Email already exist');

		if ($this->form_validation->run()===FALSE){
				
				$error=validation_errors();
				echo $error;
				
				
			
		}
		else{
		   echo	 'true';
		}
		}
		
public function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('user');
		 ob_clean();
		redirect('Login','refresh');

		
			
	}

		
}


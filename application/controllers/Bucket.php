<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bucket extends CI_Controller {
	
		public function __construct()
	{
		parent:: __construct();
	
	}
	
	public function index()
	{		
			
			if( $_SERVER['REQUEST_METHOD']=='POST'){
			
			
			$validate = array (
				array('field'=>'user','label'=>'User','rules'=>'trim|required'),
				array('field'=>'email','label'=>'Email','rules'=>'trim|required'),
				array('field'=>'password','label'=>'Password','rules'=>'trim|required'),
							);
			$this->form_validation->set_rules($validate);
			
			if ($this->form_validation->run()===FALSE){
				$data['errors'] = validation_errors();
			}
			else{ 
				$record = array(
								'user'=>$_POST['user'],
								'email'=>$_POST['email'],
								'password'=>$_POST['password']
								
							);
							
				$insert_user = $this->login->create($record);
				
				$data['saved'] = TRUE;
				
			}
			
		}
		else{ 
				
		}
		
			$data['title']="LOGIN";
			$this->load->view('template/header',$data);
			$this->load->view('bucket/login');
			$this->load->view('template/footer');
			
	}
	
	public function profile()
	{
		$data['title']="Profile";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar-home');
		$this->load->view('bucket/profile-view');
		$this->load->view('template/footer');
	}
	
	
	public function home()
	{
		$data['title']="Home";
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation',$data);
		$this->load->view('template/sidebar-home');
		$this->load->view('bucket/bucketwall');
		$this->load->view('template/right-panel');
		$this->load->view('template/footer');
	
	}
		public function settings()
	{
		$data['title']="Settings";
	
		$this->load->view('template/header',$data);
		$this->load->view('bucket/settings');
		$this->load->view('template/footer');

		
			
	}
	
	public function story()
	{
		$data['title']="story";
	
		$this->load->view('template/header',$data);
		$this->load->view('bucket/story');
		$this->load->view('template/footer');

		
			
	}
	
		
}
?>
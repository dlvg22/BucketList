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
			$this->load->view('template/navigation');
			$this->load->view('bucket/login');
			$this->load->view('template/footer');
			
	}
	
	
	
	public function profile()
	{
		$data['title']="Profile";
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sidebar-home');
		$this->load->view('bucket/profile-view');
		
	}
	
	
	public function home()
	{	
		if(isset($_SESSION['username'])||isset($_SESSION['Email']) && isset($_SESSION['passwword'])){
		$data['title']="Home";
	
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation',$data);
		$this->load->view('template/sidebar-home');
		$this->load->view('bucket/bucketwall');
		$this->load->view('template/right-panel');
		$this->load->view('template/footer');
		}
	else{
		redirect('Login','refresh');
		
		
	}
	
	}
		public function settings()
	{
		$user =$this->input->get('username');
	    $this->load->model('Profile_model','profile');
			 	
	 	$userinfo = $this->profile->getUser($user);

		$data['title']="Settings";
		if(isset($userinfo))
		{
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('bucket/settings',['userinfo'=>$userinfo]);
		$this->load->view('template/footer');
		}
		else
		echo "no results found";			
	
	}
	
	public function story()
	{
		$data['title']="Story";
	
		$this->load->view('template/header',$data);
		$this->load->view('bucket/thumbnail');
		$this->load->view('template/footer');			
	}
	
	public function update($username,$field)
	{
		$this->load->model('Profile_model','profile');
		$data['title']='Updated';
		$newnickname =$this->input->post('newdata');
		
		if($newnickname==null)
		{

		$this->load->view('bucket/thumbnail');
		$this->load->view('template/footer');

		$newnickname =$this->input->post('newuser');
		$this->profile->updateSettings($username, $field, $newnickname);
		redirect('bucket/settings?username='.$newnickname.'');
		
		}
		else{
		$this->profile->updateSettings($username, $field, $newnickname);
		redirect('bucket/settings?username='.$username.'');}
	}

	public function search()
	{
		$this->load->model('Profile_model','profile');
		$data['title']='search';

		$search =$this->input->get('search');
		$arr1 = str_split($search);
		
		if (!null==$search && $arr1[0]!=" ")
		{
		$profile = $this->profile->getProfile($search);
		
		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('bucket/searchfiltered', ['profile'=>$profile, 'search'=>$search] );
		$this->load->view('template/footer');
		}
		else{
			$this->load->view('template/header',$data);
			$this->load->view('template/navigation');
			$this->load->view('bucket/searchfiltered',['profile'=>'', 'search'=>$search]);
			$this->load->view('template/footer');
		}			
	}	
}
?>
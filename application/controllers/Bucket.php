<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bucket extends CI_Controller {
	
		
		public function __construct()
	{
		parent:: __construct();
		$this->load->model('login_model','login');
		$this->load->model('Upload_model','upl');
		$this->load->model('Cover_model','uplb');
	}
	public function index()
	{		
			
				if(isset($_SESSION['username'])||isset($_SESSION['Email']) && isset($_SESSION['passwword'])){
		$data['title']="Home";
		
		$details=$this->login->read($_SESSION['userID']);
		$photos=$this->upl->read($_SESSION['userID']);
	
		if($photos!=null){
			$name['dp']=$photos[0]['photoname'];
		}
		else{
			$name['dp']='default';
		}
		$name['username']=$details[0]['username'];
		$name['alias']=$details[0]['nickname'];
		foreach($photos as $s){
			$p=array(
			'myphotos'=>$s['photoname']
			
			);
			
			$ph[]=$p;
		}
		$name['old']=$ph;

		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation',$name);
		$this->load->view('template/sidebar-home',$name);
		$this->load->view('bucket/bucketwall',$name);
		$this->load->view('template/right-panel');
		$this->load->view('template/footer');
		}
	else{
		redirect('Login','refresh');

			$data['title']="LOGIN";
			$this->load->view('template/header',$data);
			$this->load->view('template/navigation');
			$this->load->view('bucket/profile');
			$this->load->view('template/footer');

		
	}

			
	}
	
	
	
	public function profile()
	{
		$data['title']="Profile";
		$details=$this->login->read($_SESSION['userID']);
		$photos=$this->upl->read($_SESSION['userID']);
		$cover=$this->uplb->read($_SESSION['userID']);
		if($cover!=null){
			$name['cp']=$cover[0]['covername'];
		}
		else{
			$name['cp']='default';
		}
	
		if($photos!=null){
			$name['dp']=$photos[0]['photoname'];
		}
		else{
			$name['dp']='default';
		}
		foreach($photos as $s){
			$p=array(
			'myphotos'=>$s['photoname']
			
			);
			
			$ph[]=$p;
		}
		$name['old']=$ph;

		$name['username']=$details[0]['username'];
		$name['alias']=$details[0]['nickname'];
		
		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation',$name);
		$this->load->view('template/sidebar-home',$name);
		$this->load->view('bucket/profile-view');
		
	}

		public function settings()
	{
		$user =$this->input->get('username');
	    $this->load->model('Profile_model','profile');
			 	
	 	$userinfo = $this->profile->getUser($user);
				$photos=$this->upl->read($_SESSION['userID']);
		$cover=$this->uplb->read($_SESSION['userID']);
		if($cover!=null){
			$name['cp']=$cover[0]['covername'];
		}
		else{
			$name['cp']='default';
		}
	
		if($photos!=null){
			$name['dp']=$photos[0]['photoname'];
		}
		else{
			$name['dp']='default';
		}
		
		$details=$this->login->read($_SESSION['userID']);
		// Array ( [0] => Array ( [userID] => 1 [username] => dlvg22 [Email] => dlvg22@yahoo.com [password] => bucketlist ) )
		$name['username']=$details[0]['username'];
		$name['alias']=$details[0]['nickname'];
		$name['userID']=$details[0]['userID'];
		$name['email']=$details[0]['Email'];
		$name['password']=$details[0]['password'];
		$data['title']="Settings";
		if(isset($userinfo))
		{
		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation',$name);
		$this->load->view('bucket/settings',$name);
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
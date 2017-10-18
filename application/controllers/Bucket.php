<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bucket extends CI_Controller {
	
		
		public function __construct()
	{
		parent:: __construct();

		$this->load->model('list_model','list');
		$this->load->model('Profile_model','profile');
		$this->load->model('login_model','login');
		$this->load->model('user_model','user');
		$this->load->model('follow_model','follow');
	}
	public function index()
	{		
			
		if(isset($_SESSION['username'])||isset($_SESSION['Email']) && isset($_SESSION['passwword'])){
		$data['title']="Home";
		$user = $_SESSION['username'];
	    $userinfo = $this->user->getUser($user);
	    $profile=$this->profile->getProfile($userinfo->userid);
		$details=$this->login->read($userinfo->userid);
		$name['userid']=$details[0]['userid'];
		$name['username']=$details[0]['username'];
		$name['alias']=$details[0]['nickname'];
		
		$lists=$this->list->getlisttime($userinfo->userid);
		$followers=$this->follow->getfollow($userinfo->userid);
		$x=0;
		foreach ($followers as $key ) {
		$otherlists[$x]=$this->list->getotherlisttime($key->mateid);
		$x=$x+1;
		}
		foreach ($lists as $key) {
		$finally[]=$key->listdate;	
		}
		foreach ($otherlists as $other) {
			foreach ($other as $key) {	
			$finally[]=$key->listdate;
			}
		}

	$ord = array();
	$ford[100]=array();
	foreach ($finally as $key => $value){
        $ord[] = strtotime($key['listdate']);
	}
	array_multisort($ord, SORT_DESC, $finally,SORT_DESC);
	//print_r($finally);
	foreach ($finally as $grandlist ) {
		$masterlist[]=$this->list->getlist($grandlist);
	}

	foreach ($masterlist as $key){
		$details=$this->login->read($key[0]->userid);
		$name2[]=$details[0]['nickname'];
		
	}		

		$this->load->view('template/header',$data);
		$this->load->view('template/navigation', $name);
		$this->load->view('template/sidebar-home',$name);
		$this->load->view('bucket/bucketwall',['masterlist'=>$masterlist,'userinfo'=>$userinfo,'name2'=>$name2,'profile'=>$profile]);
		$this->load->view('template/right-panel');
		}
	else{
		redirect('Login','refresh');
		
		
	}
			
	}
	
	
	
	public function profile()
	{
		$data['title']="Profile";
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation');
		$this->load->view('template/sidebar-home');
		$this->load->view('bucket/profile-view');
		
	}

		public function settings()
	{
		$user = $_SESSION['username'];
	    $userinfo = $this->user->getUser($user);

		$details=$this->login->read($userinfo->userid);
		$name['username']=$details[0]['username'];
		$name['alias']=$details[0]['nickname'];

		$user = $_SESSION['username'];
	    $this->load->model('Profile_model','profile');
			 	
	 	$userinfo = $this->profile->getUser($user);
		$data['title']="Settings";
		if(isset($_SESSION['username'])||isset($_SESSION['Email']) && isset($_SESSION['passwword']))
		{
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation',$name);
		$this->load->view('bucket/settings',['userinfo'=>$userinfo]);
		$this->load->view('template/footer');
		
		}
		else
		redirect('Login','refresh');			
	
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

		$newnickname =$this->input->post('newuser');
		$_SESSION['username']=$newnickname;
		$this->profile->updateSettings($username, $field, $newnickname);
		redirect('bucket/settings');
		
		}
		else{
		$this->profile->updateSettings($username, $field, $newnickname);
		redirect('bucket/settings');}
	}

	public function search()
	{
		$user = $_SESSION['username'];
	    $userinfo = $this->user->getUser($user);

		$details=$this->login->read($userinfo->userid);
		$name['userid']=$details[0]['userid'];
		$name['username']=$details[0]['username'];
		$name['alias']=$details[0]['nickname'];
		$data['title']='search';

		$search =$this->input->get('search');
		$search=trim($search);
		$arr1 = str_split($search);
		if(isset($_SESSION['username'])||isset($_SESSION['Email']) && isset($_SESSION['passwword'])){
	
		if (!null==$search && $arr1[0]!=" ")
		{
		$profile = $this->profile->getProfile($search);
		$followers = $this->follow->getfollow($userinfo->userid);
		
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation',$name);
		$this->load->view('bucket/searchfiltered', ['profile'=>$profile, 'search'=>$search, 'followers'=>$followers]);
		$this->load->view('template/footer');
		}
		else{
			$this->load->view('template/header',$data);
			$this->load->view('template/navigation',$name);
			$this->load->view('bucket/searchfiltered',['profile'=>'', 'search'=>$search, 'followers'=>$followers]);
			$this->load->view('template/footer');
		}
		}else{
			redirect('login','refresh');
		}			
	}

	public function addlist(){
		$newdata=$_POST;
		$this->list->addlist($newdata);

		redirect('bucket/','refresh');
		
	}		

	public function addfollow(){
		$this->load->model('follow_model','follow');
		$this->load->model('user_model','user');
		$user = $_SESSION['username'];

	    $userinfo = $this->user->getUser($user);		
		
		$mateid=$this->input->post('follow');
		
		$search =$this->input->get('search');
		$this->follow->addfollow($userinfo->userid,$mateid);	
		redirect('bucket/search?search='.$search.'');
		
	}

	public function delfollow(){
		$this->load->model('follow_model','follow');
		$this->load->model('user_model','user');
		$user = $_SESSION['username'];

	    $userinfo = $this->user->getUser($user);		
		
		$mateid=$this->input->post('follow');
		
		$search =$this->input->get('search');
		$this->follow->delfollow($userinfo->userid,$mateid);	
		redirect('bucket/search?search='.$search.'');
		
	}
//Do not copy, trial function only
	public function countfollow(){
		$this->load->model('Profile_model','profile');
		$user = $_SESSION['username'];

	    $userinfo = $this->user->getUser($user);	
	     $profilerr=$this->profile->getProfile($userinfo->userid);	
		$lists=$this->list->getlisttime($userinfo->userid);
		$followers=$this->follow->getfollow($userinfo->userid);
		$x=0;
		foreach ($followers as $key ) {
		$otherlists[$x]=$this->list->getotherlisttime($key->mateid);
		$x=$x+1;
		}
		foreach ($lists as $key) {
		$finally[]=$key->listdate;	
		}
		foreach ($otherlists as $other) {
			foreach ($other as $key) {	
			$finally[]=$key->listdate;
			}
		}

	$ord = array();
	$ford[100]=array();
	foreach ($finally as $key => $value){
        $ord[] = strtotime($key['listdate']);
	}
	array_multisort($ord, SORT_DESC, $finally,SORT_DESC);
	//print_r($finally);
	foreach ($finally as $grandlist ) {
		$masterlist[]=$this->list->getlist($grandlist);
					
	}
	$a=0;
	foreach ($masterlist as $key) {
		$a=$a+1;
	}
		print_r($masterlist[0]);
		print_r('<br>');
		
		//$this->load->view('bucket/placeoftrial',['masterlist'=>$masterlist,'userinfo'=>$userinfo]);	

	}
}
?>
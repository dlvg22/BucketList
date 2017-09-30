<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bucket extends CI_Controller {

	public function index()
	{
		$data['title']="LOGIN";
		$this->load->view('template/header',$data);
		$this->load->view('bucket/login');
		$this->load->view('template/footer');
		
	}
	public function profile()
	{
		$data['title']="Profile";
		$this->load->view('template/header',$data);
		$this->load->view('template/navigation',$data);
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
}

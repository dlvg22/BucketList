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
		$this->load->view('bucket/profile');
		$this->load->view('template/footer');
		
	}
}
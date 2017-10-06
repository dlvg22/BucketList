<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
		public function __construct()
	{
		parent:: __construct();
		
		$this->load->model('bucket_model','dbBucket');
		
	}

	public function index()
	{
		$data['title']="LOGIN";
		$this->load->view('template/header',$data);
		$this->load->view('template/login-header');
		$this->load->view('template/footer');
		
	}	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook extends CI_Controller {
	
	private $fb;
	public function __construct()
	{
		parent:: __construct();
		$this->load->library("facebookSDK");
		$this->fb=$this->facebooksdk;
	}
	public function login()
	{
		$data = $this->input->post('valueurl');
		
		$cb = $data;
		$url = $this->fb->getLoginUrl($cb);
		echo "<a href='$url'>Login with Facebook</a>";
	}
	public function callback()
	{
		$act = $this->fb->getAccessToken();
		$data = $this->fb->getUserData($act);
		print_r($data);
		
	}
}
?>
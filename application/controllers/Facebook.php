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
		$cb = "http://localhost/BucketList/facebook/callback";
		$url = $this->fb->getLoginUrl($cb);
		$this->callback();
		
	}
	public function callback()
	{
		$act = $this->fb->getAccessToken();
		$data = $this->fb->getUserData($act);
		print_r($data);
		
	}
}
?>
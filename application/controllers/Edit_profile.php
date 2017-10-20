<?php

class Edit_profile extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
					$this->load->model('Profile_model','info');
            
        }

        public function addInfo()
        {

        	$id=$this->input->post('id');
        	$first=$this->input->post('name');
        	$middle=$this->input->post('middle');
        	$last=$this->input->post('last');
        	$nick=$this->input->post('nick');
        	$bday=$this->input->post('bday');
        	$gender=$this->input->post('gender');
            if(isset($first)){
        	echo $first;
        	$data=array(
        		'userID'=>$id,
        		'fname'=>$first);
        		$this->info->editF($data);
        	}

        	else if(isset($middle)){
        		echo $middle;
        		$data=array(
        		'userID'=>$id,
        		'mname'=>$middle);
        		$this->info->editF($data);
        	}
    
        	else if(isset($last)){
        		echo $last;
        		$data=array(
        		'userID'=>$id,
        		'lname'=>$last);
        		$this->info->editF($data);
        	}
        	 	else if(isset($nick)){
        		echo $nick;
        		$data=array(
        		'userID'=>$id,
        		'nick'=>$nick);
        		$this->info->editF($data);
        	}

          else if(isset($bday)){
        		echo $bday;
        		$data=array(
        		'userID'=>$id,
        		'bday'=>$bday);
        		$this->info->editF($data);
        	}

        	    else if(isset($gender)){
        		echo $gender;
        		$data=array(
        		'userID'=>$id,
        		'gender'=>$gender);
        		$this->info->editF($data);
        	}



	        }
}
?>
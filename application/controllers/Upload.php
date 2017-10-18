<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
					$this->load->model('Upload_model','updb');
            
        }

        public function displaypic()
        {
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
            

               $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('disp'))
                {
						
                        // $error = array('error' =>);
						$this->session->set_flashdata('error',  $this->upload->display_errors());
						redirect('Bucket');
					
                }
                else
                {	
			
						
                        $data = $this->upload->data();
						$file= array('photoname'=>$data['file_name'],
						'pathfile'=>$data['full_path'],
						'userID'=>$_SESSION['userID']);
						$this->updb->uploadDB($file);
                       redirect('Bucket');
					   
					 
                }
        }
}
?>
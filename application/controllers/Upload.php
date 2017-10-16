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
			// Array ( [upload_data] => Array ( [file_name] => box23.png [file_type] => image/png [file_path] => C:/wamp/www/BucketList/Upload/ 
			// [full_path] => C:/wamp/www/BucketList/Upload/box23.png [raw_name] => box23 [orig_name] => box2.png 
			// [client_name] => box2.png [file_ext] => .png [file_size] => 17.12 [is_image] => 1 [image_width] => 430 
			// [image_height] => 548 [image_type] => png [image_size_str] => width="430" height="548" ) )
						
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
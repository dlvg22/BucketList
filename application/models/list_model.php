<?php	

class list_model extends CI_Model{

	public function getlist($inputdata){

			$sql = "
            SELECT * FROM list
            WHERE listdate LIKE '%$inputdata%'
            ORDER By listdate DESC
        ";

        $query = $this->db->query($sql);
        return $query->result();
		
		}
	
	public function getlisttime($userid){

			$sql = "
            SELECT listdate FROM list
            WHERE userid LIKE '%$userid%'
            ORDER By listdate DESC
        ";

        $query = $this->db->query($sql);
        return $query->result();
		
		}
	
	public function addlist($newdata){

		$con=mysqli_connect("localhost","root","","bucketlist");
		
		$userid=$this->input->post('userid');
		$datetime=$this->input->post('datetime');
		$listtitle=$this->input->post('listtitle');
		$postbody=$this->input->post('postbody');

		$city = mysqli_real_escape_string($con, trim($postbody));

		$sql = "
		INSERT INTO list (listid, userid, listdate, title, body) VALUES ('NULL','".$userid."','".$datetime."','".$listtitle."','".$city."')
		";
		$query = $this->db->query($sql);
	}

	public function getotherlisttime($mateid){
		
		
		$sql = "
            SELECT listdate FROM list
            WHERE userid like '$mateid'
            ORDER by listdate DESC
            
        ";

        $query = $this->db->query($sql);
        return $query->result();
		}

	public function updateSettings($username, $field, $newdata){
		$sql = "
		
		UPDATE users SET $field='$newdata' 
		WHERE username LIKE '%$username%'
        
        ";

        $query = $this->db->query($sql);		
		}	

}
	
?>
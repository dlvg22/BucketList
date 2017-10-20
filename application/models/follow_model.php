<?php	

class follow_model extends CI_Model{
	
	public function getfollow($userid){

			$sql = "
            SELECT * FROM follow
            WHERE userid LIKE '%$userid%'
            
        ";

        $query = $this->db->query($sql);
        return $query->result();
		
		}
	
	public function addfollow($userid,$mateid){
		$sql = "
		INSERT INTO follow (id, userid, mateid) VALUES ('NULL','".$userid."','".$mateid."')
		";
		$query = $this->db->query($sql);
	}

	public function delfollow($userid,$mateid){
		$sql = "DELETE FROM follow WHERE mateid='$mateid' 
		";
		$query = $this->db->query($sql);
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
<?php	

class user_model extends CI_Model{
	
	public function getUser($username){

			$sql = "
            SELECT * FROM users
            WHERE username LIKE '%$username%'
            
        ";

        $query = $this->db->query($sql);
        return $query->row();
		
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
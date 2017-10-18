<?php	

class Profile_model extends CI_Model{
		
	private $table = "profile";
	
	public function getProfile($search){

			$sql = "
            SELECT * FROM profile
            WHERE CONCAT(`nickname`, `firstname`, `middlename`, `lastname`) LIKE '%$search%'
            ORDER BY firstname ASC
        ";

        $query = $this->db->query($sql);
        return $query->result();
		
		}
	
	public function getUser($username){

			$sql = "
            SELECT * FROM users
            WHERE username LIKE '%$username%'
            
        ";

        $query = $this->db->query($sql);
        return $query->result();
		
		}
	
	public function updateSettings($username, $field, $newnickname){
		$sql = "
		
		UPDATE users SET $field='$newnickname' 
		WHERE username LIKE '%$username%'
        
        ";

        $query = $this->db->query($sql);		
		}	


	public function read($condition = null) {
		$this->db->select('*');
		$this->db->from($this->table);
		
		if( isset($condition) ) 
		{
			$this->db->where($condition);
		}
		
		$query = $this->db->get($this->table);
		
		return $query->result_array();
	}

}
	
?>
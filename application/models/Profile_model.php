<?php	

class Profile_model extends CI_Model{
		
	private $table = "profile";
	
	public function getProfile($search){

			$sql = "
            SELECT * FROM profile
            WHERE CONCAT(`nickname`, `username`) LIKE '%$search%'
            ORDER BY nickname ASC
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
	public function nickname($data){
		
		$this->db->insert($this->table,$data);
	}
	public function editF($data){
		if(isset($data['fname'])){
			$this->db->set('firstname',$data['fname']);
			}
			else if(isset($data['mname'])){
			$this->db->set('middlename',$data['mname']);
			}
			else if(isset($data['lname'])){
			$this->db->set('lastname',$data['lname']);
			}
			else if(isset($data['nick'])){
			$this->db->set('nickname',$data['nick']);
			}
			else if(isset($data['bday'])){
			$this->db->set('birthdate',$data['bday']);
			}
			else if(isset($data['gender'])){
			$this->db->set('sex',$data['gender']);
			}
			else if(isset($data['motto'])){
			$this->db->set('motto',$data['motto']);
		
			}
		$this->db->where('userID',$data['userID']);
		$this->db->update($this->table);

	}

}
	
?>
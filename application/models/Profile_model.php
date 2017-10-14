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
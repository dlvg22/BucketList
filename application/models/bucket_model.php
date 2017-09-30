<?php	

class bucket_model extends CI_Model {
	private $table = "login";
	
	public function login(){
		$this->db->insert($this->table,$data);
		return TRUE;
	}
	
	
	public function read($condition = null) {
		
		if( isset($condition) ) 
		{
			$this->db->where($condition);
		}
		
		$query = $this->db->get($this->table);
		
		return $query->result_array();
		
	}
	
?>
<?php	

class Login_model extends CI_Model {
	

	private $table = "users";
	
	public function create($data){
		$this->db->insert($this->table,$data);
		return $insert_id = $this->db->insert_id();
	}
	
	
	public function read($condition = null) {
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('profile', 'profile.userID = users.userID');
	
		if( isset($condition) ) 
		{
			
			$this->db->where('users.userID',$condition);
			
		}
		
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	
	
	public function validate($data){

			  $this->db->select('*');
			  $this->db->from('users');
			  $this->db->where('username',$data['username']);
			  $this->db->where('password',$data['password']);
			  $this->db->or_where('Email',$data['username']);
			  $this->db->where('password',$data['password']);
			 $query=$this->db->get();
			return $query;

		  
	}
	
	public function check_user($usr)
{
		 $this->db->where("username",$usr['username']);
		 $this->db->or_where("Email",$usr['username']);
		 $query=$this->db->get($this->table);
		 if($query->num_rows()>0)
		 {
		  return true;
		 }
		 else
		 {
		  return false;
		 }
}
	public function check_pass($usr)
{

		 $this->db->where("password",$usr['userpass']);
		 $query=$this->db->get($this->table);
		 if($query->num_rows()>0)
		 {
		  return true;
		 }
		 else
		 {
		  return false;
		 }
}
	
	
}

	
?>
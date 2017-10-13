<?php	

class Login_model extends CI_Model {
	
		public function __construct()
	{
		parent:: __construct();
		
	}
	private $table = "users";
	
	public function create($data){
		$this->db->insert($this->table,$data);
		return TRUE;
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
	
	
	
	public function validate($data){

			  $this->db->select('*');
			  $this->db->from('users');
			  $this->db->where('username',$data['username']);
			  $this->db->where('password',$data['password']);
			  $this->db->or_where('Email',$data['username']);
			  $this->db->where('password',$data['password']);
			
		  return $query=$this->db->get();
	}
	
}

	
?>
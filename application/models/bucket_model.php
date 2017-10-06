<?php	

class bucket_model extends CI_Model {
	
		public function __construct()
	{
		parent:: __construct();
		
	}
	private $table = "login";
	
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
}

	
?>
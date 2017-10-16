<?php	

class Upload_model extends CI_Model {
	
		public function __construct()
	{
		parent:: __construct();
		
	}
	private $table = "photos";
	
	public function uploadDB($data){
		$this->db->insert($this->table,$data);
	    return $insert_id = $this->db->insert_id();
	}
	public function read($data){
		$this->db->where('userID',$data);
		$this->db->order_by('photoID','DESC');
		$this->db->limit(1);
		$query=$this->db->get($this->table);
	  return $query->result_array();
	
		
	 
	}
	

}

	
?>
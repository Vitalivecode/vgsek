<?php class Insert extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function table($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	function checkandinsert($table,$where = NULL,$data) {
        $this->db->from($table);
		if($where != NULL)
		    $this->db->where($where);
		$query = $this->db->get();
		if ($query->num_rows() == 0)
		{
			$query = $this->db->insert($table,$data);
			return true;
		}
		else
		{
			return false;
		}
	}
	function table_batch($table,$data) {
		$this->db->insert_batch($table, $data);
		return true;
	}
}

?>
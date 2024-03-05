<?php 
class Change_Pass extends CI_Model{
	function __construct() {
		parent::__construct();
	}
function changepass($data) {
	$id = $data['id'];
	$old_pass = $data['old_pass'];
	$new_pass = $data['new_pass'];
		$this->db->select('pass');
		$this->db->from('admin');
		$this->db->where('sno',$id);
		$this->db->where('status','active');
		$query = $this->db->get();
		$row = $query->row();
		$dbpass = $row->pass;
		$dbdecode = $this->encrypt->decode($dbpass);
		if ($query->num_rows() == 1 && $old_pass == $dbdecode)
		{
			$new_pass_key = $this->encrypt->encode($new_pass);
			$data = array(
               'pass' => $new_pass_key
            );
			$this->db->where('sno', $id);
			$this->db->update('admin', $data);
			return true;
		}
		else
		{
			return false;
		}
	}


}

?>
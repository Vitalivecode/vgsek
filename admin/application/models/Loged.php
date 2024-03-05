<?php 
class Loged extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function login($data) {
	    $email = $data['email'];
	    $pass = $data['pass'];
		$this->db->select('sno,fullname,email,role,pass');
		$this->db->from('admin');
		$this->db->where('email',$email);
		$this->db->where('status','active');
		$query = $this->db->get();
        if($query->num_rows() == 1)
    	{
			$row = $query->row();
		    $dbpass = $row->pass;
			$dbdecode = $this->encrypt->decode($dbpass);
		    if($pass == $dbdecode){
			    $token = urldecode($data['tokenid']);
		        $update = array('web_token' => $token);
				$this->db->where('email',$email);
		        $this->db->update('admin',$update);
				return $query->result();
			}
			else
			{
				return false;
			}
		}
    	else
    	{
    		return false;
    	}
	}
}

?>
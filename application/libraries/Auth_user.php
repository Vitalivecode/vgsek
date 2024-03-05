<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth_user {
	var $CI;
    public function __construct()
    {
        $this->CI =&get_instance();
    }
    public function checkLogin()
    {
		$session_value = $this->CI->session->userdata('logged_in');
		if((isset($session_value) && $session_value != false && !empty($session_value)))
		{
    		$phone = $session_value['phone'];
    		$this->CI->db->from('refferal_form');
    		$this->CI->db->where('phone',$phone);
    		$this->CI->db->where('reg_status','1');
    		$this->CI->db->where('status','1');
    		$query = $this->CI->db->get();
			if ($query->num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}			
		}
		else
		{
		    $this->CI->session->unset_userdata('logged_in');
	        $this->CI->session->sess_destroy();
			redirect(base_url('login'),'refresh');			
		}
    }
}
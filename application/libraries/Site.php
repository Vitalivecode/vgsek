<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Site {
		var $CI;
        public function __construct()
        {
            $this->CI =&get_instance();
            $settings = $this->settings();
            if($settings != false)
                ini_set('display_errors', $settings[0]->display_errors);
        }
        public function settings()
        {
			$this->CI->db->select('s.theme, s.button, s.title, s.logo, s.favicon, s.loginbg, s.menu, s.sentmail, s.footer_left, s.footer_right, s.display, s.maintenance, s.ipaddress, s.display_errors, c.c_links, c.css, j.j_links, j.js');
			$this->CI->db->from('settings as s, css as c, js as j');
			$query = $this->CI->db->get();
			if ($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
        }
        public function maintenance()
        {
			$site = $this->checkipaddress();
			if($site == true)
			{
			    return true;
			}
    		else
    		{
    		    redirect(base_url('maintenance'),'refresh');
    		}
        }
        public function checkipaddress()
        {
            $this->CI->db->select('maintenance, ipaddress');
			$this->CI->db->from('settings');
			$this->CI->db->where('maintenance','0');
			$query = $this->CI->db->get();
			if ($query->num_rows() == 1)
			{
			    return true;
			}
			else
			{
    			$ipaddress = $this->ipaddress();
    			$this->CI->db->select('maintenance, ipaddress');
    			$this->CI->db->from('settings');
    			$condition = "FIND_IN_SET('".$ipaddress."', ipaddress)";  
    			$this->CI->db->where($condition);
    			$this->CI->db->where('maintenance','1');
    			$query = $this->CI->db->get();
    			if ($query->num_rows() == 1)
    			{
    				return true;
    			}
    			else
    			{
    				return false;
    			}
			}
        }
    	function ipaddress()
    	{
    		if(!empty($_SERVER['HTTP_CLIENT_IP']))
    		{
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            }
            elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else
            {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
    	}
}
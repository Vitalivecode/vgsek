<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Push {
		var $CI;
        public function __construct()
        {
            $this->CI =&get_instance();
        }
        public function notifications($table = NULL,$tokenId = NULL,$data = NULL,$title = '',$message = '',$img = '')
        {
            if($tokenId == NULL)
                $tokenId = array('c66q6n7pndc:APA91bEQSRdS0nICghxX6BzW4axsLrMJ5zgAZnIzCYsMn1yA9roPE9dEd3tnhjLwknEc1h-tw9JKgMZUKxNVwJY1ljTmtYSeYKMNEyVj1aPeoJewU8MXvuDhHO0Kq_4Xnhv3xH_HkLBY');
            $registrationIds = $tokenId;
            $this->CI->db->where('userid',$data['userid']);
            $this->CI->db->where('status','1');
            $query = $this->CI->db->get('notifications');
            if ($query->num_rows() > 0)
				$badge = count($query->result());
			else
				$badge = 1;
    		$final_msg= array(
    		    'body'=> $message,
    			'title'=> $title,
                'badge' => $badge,
                'sound' => 'default',
    			'largeIcon'=> $img								 
    		);
    		$fields = array
    		(
    			'registration_ids' => $registrationIds,
    			'priority' => 'high',
    			'notification' => $final_msg
    		);
    		$headers = array
    		(
    			'Authorization: key=' . API_ACCESS_KEY,
    			'Content-Type: application/json'
    		); 
    		$ch = curl_init();
    		curl_setopt($ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    		curl_setopt($ch,CURLOPT_POST, true);
    		curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);
    		curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
    		curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));
    		$result = curl_exec($ch);
			if($result)
			{
			    if($table != NULL && $data != NULL)
			        $this->CI->db->insert($table,$data);
			}
    		curl_close($ch);
        }
    }
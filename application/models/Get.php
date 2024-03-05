<?php class Get extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function table($table,$where = NULL,$like = NULL,$orderby = NULL,$limit = 0,$start = NULL,$group = NULL) {
		$this->db->from($table);
		if($where != NULL)
		    $this->db->where($where);
		if($like != NULL)
		    $this->db->like($like);
		if($table == 'naac' && $orderby != NULL)
		{
		    //$this->db->order_by(length($orderby),'asc');
		    $this->db->order_by($orderby,'asc');
		}
		if($orderby != NULL)
		    $this->db->order_by($orderby,'desc');
		if($limit != NULL)
		     $this->db->limit($limit, $start);
		if($group != NULL)
		     $this->db->group_by($group);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
		    $result = $query->result();
			return $result;
        }
        else
		{
			return false;
		}
	}
	function joinTable($table,$select = NULL,$where = NULL,$join = NULL,$join2 = NULL,$like = NULL,$orderby = NULL,$limit = 0,$start = NULL) {
	    if($select != NULL)
	        $this->db->select($select);
		$this->db->from($table);
		if($where != NULL)
		    $this->db->where($where);
		if($join != NULL)
		    $this->db->join($join['table'],$join['condition']);
		if($join2 != NULL)
		    $this->db->join($join2['table'],$join2['condition']);
		if($like != NULL)
		    $this->db->like($like);
		if($orderby != NULL)
		    $this->db->order_by($orderby,'desc');
		if($limit != NULL)
		     $this->db->limit($limit, $start);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
		    $result = $query->result();
			return $result;
        }
        else
		{
			return false;
		}
	}
	function updateInsertTableDetails($table,$data,$where = NULL) {
		$id = $this->uri->segment(3);
        $this->db->from($table);
        if($where != NULL)
		    $this->db->where($where);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{
			$this->db->where($where);
			$query = $this->db->update($table,$data);
			return true;
		}
		else
		{
			$query = $this->db->insert($table,$data);
			return $this->db->insert_id();
		}
	}
    function insert($table,$data){
        $query = $this->db->insert($table,$data);
		return $this->db->insert_id();
    }
    function update($table,$data,$where = NULL){
        if($where != NULL)
            $this->db->where($where);
		$query = $this->db->update($table,$data);
		return true;
    }
    function like(){
        $this->db->like('title', $query);
        $res = $this->db->get('film');
    }
    function updateWhereIn($table,$data,$where = NULL,$field = NULL,$where_in = NULL){
        if($where != NULL)
            $this->db->where($where);
        if($where_in != NULL)
            $this->db->where_in($field,$where_in);
		$query = $this->db->update($table,$data);
		return true;
    }
    function visit($table,$where = NULL,$limit, $start, $orderby = NULL) {
		if($where != NULL)
		    $this->db->where($where);
		$this->db->order_by($orderby,'desc');
		$query = $this->db->get($table, $limit, $start);
		if($query->num_rows() > 0)
		{
			$results = $query->result();
			return $results;
		}
		else
		{
			return false;
		}
	}
	function checkandupdate($table,$where = NULL,$data) {
        $this->db->from($table);
		if($where != NULL)
		    $this->db->where($where);
		$query = $this->db->get();
		if ($query->num_rows() == 0)
		{
		    $this->db->where($where);
			$query = $this->db->update($table,$data);
			return true;
		}
		else
		{
			return false;
		}
	}
	function whereIn($table,$where = NULL,$column = NULL,$where_in = NULL,$like = NULL,$orderby = NULL,$limit = NULL) {
		$this->db->from($table);
		if($where != NULL)
		    $this->db->where($where);
		if($where_in != NULL)
		    $this->db->where_in($column,$where_in);
		if($like != NULL)
		    $this->db->like($like);
		if($orderby != NULL)
		    $this->db->order_by($orderby);
		if($limit != NULL)
		    $this->db->limit($limit);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
		    $result = $query->result();
			return $result;
        }
        else
		{
			return false;
		}
	}
	function whereNotIn($table,$where = NULL,$column = NULL,$where_in = NULL,$like = NULL,$orderby = NULL,$limit = NULL) {
		$this->db->from($table);
		if($where != NULL)
		    $this->db->where($where);
		if($where_in != NULL)
		    $this->db->where_not_in($column,$where_in);
		if($like != NULL)
		    $this->db->like($like);
		if($orderby != NULL)
		    $this->db->order_by($orderby);
		if($limit != NULL)
		    $this->db->limit($limit);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
		    $result = $query->result();
			return $result;
        }
        else
		{
			return false;
		}
	}
	function query($query) {
	    $query = $this->db->query($query);
		if($query->num_rows() > 0)
		{
		    $result = $query->result();
			return $result;
        }
        else
		{
			return false;
		}
	}
    public function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
        $string = array(
            'y' => $this->lang->line('y'),
            'm' => $this->lang->line('m'),
            'w' => $this->lang->line('w'),
            'd' => $this->lang->line('d'),
            'h' => $this->lang->line('h'),
            'i' => $this->lang->line('m'),
            's' => $this->lang->line('se'),
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? "'".$this->lang->line('s') : '');
            } else {
                unset($string[$k]);
            }
        }
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' '.$this->lang->line('ago') : $this->lang->line('just_now');
    }
}

?>
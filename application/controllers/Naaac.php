<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Naaac extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Site');
		$this->load->model('get');
	}
	public function index()
	{
		$this->load_header();
		$this->load_body();
		$this->load_footer();
	}
	public function load_header()
	{
	    $data['site']=$this->site->settings();
		$data['title'] = "NAAC | ".$data['site'][0]->title;
		$data['active'] = 'naaac';
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
	    $where = array('status' => 1);
	    $data['criterions'] = $this->get->table('naac',$where,'','','','','criterion');
	    $data['dis'] = $this;
		$this->load->view('naaac',$data);
	}
    public function build_parent($rows,$parent = 0)
    {  
        $result = '<ul class="topic">';
        foreach ($rows as $row)
        {
            if ($row->topic_parent == $parent){
                $file = ($row->topic_file != "")?'<a href="'.base_url('uploads/'.$row->topic_file).'" target="_blank">'.$row->topic.'</a>':$row->topic;
                $result.= '<li><h6>'.$file.'</h6>';
                if ($this->has_children($rows,$row->sno))
                    $result.= $this->build_parent($rows,$row->sno);
                $result.= "</li>";
            }
        }
        $result.= '</ul>';
        return $result;
    }
    public function has_children($rows,$id) {
        foreach ($rows as $row) {
            if ($row->topic_parent == $id)
                return true;
        }
        return false;
    }
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}

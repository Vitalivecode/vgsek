<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Committees extends CI_Controller {
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
		$data['title'] = "Committees | ".$data['site'][0]->title;
		$data['active'] = 'committees';
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
	    $date = date('Y-m-d');
	    $data['dis'] = $this;
	    $where = array('status' => 1);
	    $data['committees'] = $this->get->table('committees', $where, '', '', '', '','committee');
		$this->load->view('committees',$data);
	}
	public function committees($committy = NULL)
	{
	    $where = array('committee' => $committy,'status' => 1);
	    return $this->get->table('committees', $where);
	}
	public function role($id = NULL)
	{
	    $where = array('sno' => $id,'status' => 1);
	    return $this->get->table('committee_roles', $where);
	}
	public function frole($id = NULL)
	{
	    $where = array('sno' => $id,'status' => 1);
	    return $this->get->table('faculty_roles', $where);
	}
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}

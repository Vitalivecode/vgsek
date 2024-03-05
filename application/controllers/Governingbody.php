<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Governingbody extends CI_Controller {
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
		$data['title'] = "Governing Body | ".$data['site'][0]->title;
		$data['active'] = 'governing-body';
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
	    $date = date('Y-m-d');
	    $data['dis'] = $this;
        $where = array('status' => '1');
        $data['governing'] = $this->get->table('governing_body', $where);
		$this->load->view('governing-body',$data);
	}
	public function role($id = NULL)
	{
	    $role = $this->get->table('committee_roles', array('status' => 1));
	    return $role;
	}
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}

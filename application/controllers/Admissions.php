<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admissions extends CI_Controller {
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
		$data['title'] = "Admissions | ".$data['site'][0]->title;
		$data['active'] = 'admissions';
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
	    $date = date('Y-m-d');
	    $data['dis'] = $this;
	    $where = array('status' => 1);
	    $data['types'] = $this->get->table('academic_fee_structure', $where, '', '', '', '','type');
		$this->load->view('admissions',$data);
	}
	public function admissions($type = NULL)
	{
	    $where = array('type' => $type,'status' => 1);
	    return $this->get->table('academic_fee_structure', $where);
	}
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}

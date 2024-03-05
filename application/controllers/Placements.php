<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Placements extends CI_Controller {
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
		$data['title'] = "Placements | ".$data['site'][0]->title;
		$data['active'] = 'placements';
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
	    $date = date('Y-m-d');
	    $data['dis'] = $this;
	    $where = array('status' => 1);
	    //$data['placements'] = $this->get->table('placements', $where, '', '', '', '','year_of_pass');
	    $data['placements'] = $this->get->table('placements_yearwise', $where, '', '', '', '','year_of_pass');
		$this->load->view('placements',$data);
	}
	public function placements($year = NULL)
	{
	    $where = array('year_of_pass' => $year,'status' => 1);
	    //return $this->get->table('placements', $where, '', '', '', '','company');
	    return $this->get->table('placements_yearwise', $where);
	}
	public function countstudents($year = NULL, $company = NULL)
	{
	    $where = array('year_of_pass' => $year, 'company' => $company,'status' => 1);
	    return $this->get->table('placements', $where);
	}
	public function company($id = NULL)
	{
	    $where = array('sno' => $id,'status' => 1);
	    return $this->get->table('companies', $where);
	}
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}

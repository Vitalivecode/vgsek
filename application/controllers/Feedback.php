<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Feedback extends CI_Controller {
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
		$data['title'] = "Feedback | ".$data['site'][0]->title;
		$data['active'] = 'Feedback';
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
	    $date = date('Y-m-d');
	    $data['dis'] = $this;
		$this->load->view('feedback',$data);
	}
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}

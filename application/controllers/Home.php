<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
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
		$data['title'] = "Home | ".$data['site'][0]->title;
		$data['active'] = 'home';
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
	    $date = date('Y-m-d');
	    $data['dis'] = $this;
	    $where = array('status' => 1);
	    $data['notifications'] = $this->get->table('notifications', $where);
	    $data['testimonials'] = $this->get->table('testimonials', $where);
	    $data['companies'] = $this->get->table('companies', $where);
	    $data['events_articles'] = $this->get->table('events_articles', $where);
		$this->load->view('index',$data);
	}
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}

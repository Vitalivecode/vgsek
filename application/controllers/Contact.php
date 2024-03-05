<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {
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
		$data['title'] = "Contact | ".$data['site'][0]->title;
		$data['active'] = 'contact';
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
	    $date = date('Y-m-d');
	    $data['dis'] = $this;
        $where = array('status' => '1');
        $data['contact'] = $this->get->table('contact', $where);
        $data['mess'] = '';
        if(isset($_POST['email']))
		{
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<small class="text-danger"><i class="fa fa-arrow-up" aria-hidden="true"></i> ', '</small>');
			$this->form_validation->set_rules('fullname', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('message', ' ', 'trim|required');
			if ($this->form_validation->run() == FALSE)
			{	
				
			}
			else
			{
			    $insert = array(
			        'name' => $this->input->post('fullname'),
			        'email' => $this->input->post('email'),
			        'message' => $this->input->post('message'),
			        'created_date' => date('Y-m-d H:i:s')
			    );
			    $res = $this->get->insert('get_in_touch', $insert);
			    if($res)
			        $data['mess'] = '<div class="alert alert-success">Successfully Submitted</div>';
			    else
			       $data['mess'] = '<div class="alert alert-danger">Something went wrong!. Please try again</div>'; 
			}
		}
		$this->load->view('contact',$data);
	}
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}

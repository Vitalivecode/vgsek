<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Alumni extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Site');
		$this->load->model('get');
		$this->load->library('upload');
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
		$data['title'] = "Alumni | ".$data['site'][0]->title;
		$data['active'] = 'alumni';
		$this->load->view('include/header',$data);
	}
	public function load_body()
	{
	    $date = date('Y-m-d');
	    $data['dis'] = $this;
	    $data['error'] = '';
	    $data['mess'] = '';
        if(isset($_POST['email']))
		{
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<small class="text-danger"><i class="fa fa-arrow-up" aria-hidden="true"></i> ', '</small>');
			$this->form_validation->set_rules('fullname', 'Name', 'trim|required');
			$this->form_validation->set_rules('father', 'Father Name', 'trim|required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric|min_length[10]|max_length[10]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('education', 'Education', 'trim|required');
			$this->form_validation->set_rules('pass', 'Year of Pass', 'trim|required|numeric|min_length[4]|max_length[4]');
			$this->form_validation->set_rules('company', 'Company', 'trim|required');
			$this->form_validation->set_rules('designation', 'Designation', 'trim|required');
			if(empty($_FILES['photo']['name']))
			    $this->form_validation->set_rules('photo', 'Photo', 'trim|required');
			if ($this->form_validation->run() == FALSE)
			{	
				
			}
			else
			{
			    $config['upload_path'] = 'uploads/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|PNG';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('photo'))
				{
    			    $insert = array(
    			        'name' => $this->input->post('fullname'),
    			        'father_name' => $this->input->post('father'),
    			        'phone' => $this->input->post('phone'),
    			        'email' => $this->input->post('email'),
    			        'year_of_pass' => $this->input->post('pass'),
    			        'edu' => $this->input->post('education'),
    			        'company' => $this->input->post('company'),
    			        'disgnation' => $this->input->post('designation'),
    			        'photo' => $this->upload->data()['file_name'],
    			        'created_date' => date('Y-m-d H:i:s')
    			    );
    			    $res = $this->get->insert('alumni', $insert);
    			    if($res)
    			        $data['mess'] = '<div class="alert alert-success">Successfully Submitted</div>';
    			    else
    			       $data['mess'] = '<div class="alert alert-danger">Something went wrong!. Please try again</div>'; 
				}
				else
				    $data['error'] = '<div class="alert alert-danger">'.$this->upload->display_errors().'</div>';
			}
		}
		$where = array('active' => 1, 'status' => 1);
		$data['alumni'] = $this->get->table('alumni', $where);
		$this->load->view('alumni',$data);
	}
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}

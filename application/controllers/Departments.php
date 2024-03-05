<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Departments extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Site');
		$this->load->model('get');
	}
	public function index()
	{
		redirect(base_url());
	}
	public function load_header($title = NULL, $active = 'departments')
	{
	    $data['site']=$this->site->settings();
		$data['title'] = $title." | ".$data['site'][0]->title;
		$data['active'] = $active;
		$this->load->view('include/header',$data);
	}
	public function page($id = NULL)
	{
	    if($id != '')
	    {
	        $data['department'] = $this->get->table('departments', array('sno' => $id, 'status' => '1'));
	        if($data['department'] != false)
	        {
	            $active = 'departments';
	            if($data['department'][0]->d_name == 'Diploma Civil' || $data['department'][0]->d_name == 'Diploma ECE' || $data['department'][0]->d_name == 'Diploma EEE' || $data['department'][0]->d_name == 'Diploma Mechanical' || $data['department'][0]->d_name == 'Diploma H&S')
	                $active = 'diploma';
	            $this->load_header($data['department'][0]->d_name, $active);
    	        $date = date('Y-m-d');
        	    $data['dis'] = $this;
        	    $departmentid = $id;
        	    $where = array('department' => $departmentid, 'status' => '1');
        	    $data['about'] = $this->get->table('dep_about', $where);
        	    $data['hod_msg'] = $this->get->table('dep_hod_msg', $where);
        	    $data['mous'] = $this->get->table('dep_mous', $where);
        	    $data['faculties'] = $this->get->table('faculty', $where);
        	    $data['courses'] = $this->get->table('dep_courses', $where);
        	    $data['labs'] = $this->get->table('dep_labs', $where);
        	    $data['events_workshops'] = $this->get->table('dep_events_workshops', $where);
        	    $data['placements'] = $this->get->table('placements', $where);
        	    $data['syllabus'] = $this->get->table('dep_syllabus', $where);
        	    $data['eresource'] = $this->get->table('dep_eresource', $where);
        	    $data['images'] = $this->get->table('dep_images', $where);
        	    $data['faculty_achievements'] = $this->get->table('dep_achievements', array('user' => 'Faculty', 'department' => $departmentid, 'status' => '1'));
        	    $data['students_achievements'] = $this->get->table('dep_achievements', array('user' => 'Student', 'department' => $departmentid, 'status' => '1'));
        	    $data['obe'] = true;
        		$this->load->view('department-pages',$data);
		        $this->load_footer();
    	    }
    	    else
    	        redirect(base_url());
	    }
	    else
	        redirect(base_url());
	}
	public function faculty($id = NULL)
	{
	    $where = array('sno' => $id, 'status' => '1');
	    $faculty = $this->get->table('faculty', $where);
	    return $faculty;
	}
	public function role($id = NULL)
	{
	    $where = array('sno' => $id, 'status' => '1');
	    $role = $this->get->table('faculty_roles', $where);
	    return $role;
	}
	public function load_footer($title = NULL)
	{
		$this->load->view('include/footer');
	}
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Cms extends CI_Controller {
	public function __construct(){
		parent::__construct();
        $this->load->library('Site');
		$this->site->maintenance();
		$this->load->library('Auth_user');
		$this->auth_user->checkLogin();
		$this->load->model('adminpanel');
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
    	$data['userdata']=$this->auth_user->checkLogin();
        $table = str_replace('-','_',$this->uri->segment(2));
	    if($data['userdata'][0]->role != 'superadmin')
	    {
    	    $per = $this->auth_user->permissions($data['userdata'][0]->permissions,$table);
    	    if($per)
    	    {
                $data['site']=$this->site->settings();
        		$data['tables']=$this->adminpanel->tables();
                $data['ct']=$this->adminpanel->createtable();
        		if(!empty($table))
        		{
        			$getdata = $this->adminpanel->gettable($table);
        			if($getdata[0]->cttitle != 'empty')
        				$data['title'] = ucfirst($getdata[0]->cttitle);
        			else
        				$data['title']="Page Not Found";
        		}
        		else
        			$data['title']="Page Not Found";
        		$this->load->view('include/header',$data);
    	    }
    	    else
    	    {
    	        redirect(base_url('home'));
    	    }
	    }
	    else
	    {
	        $data['site']=$this->site->settings();
        	$data['tables']=$this->adminpanel->tables();
            $data['ct']=$this->adminpanel->createtable();
        	if(!empty($table))
        	{
        		$getdata = $this->adminpanel->gettable($table);
        		    if($getdata[0]->cttitle != 'empty')
        		$data['title'] = ucfirst($getdata[0]->cttitle);
        		else
        			$data['title']="Page Not Found";
        	}
        	else
        		$data['title']="Page Not Found";
        	$this->load->view('include/header',$data);
	    }
	}
	public function load_body()
	{
        $data['title']="Page Not Found";
        $this->load->view('error404',$data);
	}
	public function page($param)
	{
		$table = strtolower(str_replace('-','_',$param));
        $this->load_header();
        $data['ct'] = $this->adminpanel->perm($table);
        $cid = $data['ct'][0]['cid'];
        $data['manage'] = $this->adminpanel->mnge($cid);
        $requ_fields = json_decode($data['ct'][0]['required_fields']);
        $data['permissions'] = json_decode($data['ct'][0]['permissions']);
        $data['userdata']=$this->auth_user->checkLogin();
		$tablename = lcfirst($table);
        if($data['ct'] == true)
        { 
            $gps = gps_get_instance(); 
            $gps->table($tablename);
            if($data['permissions']->title == 'inactive')
                $gps->unset_title();
            $editPer = $this->permissions($data['userdata'][0]->permissions,$table);
            //print_r($editPer);
            if(!in_array('add',$editPer))
            {
                if($data['permissions']->add == 'inactive' && $data['userdata'][0]->role == 'superadmin')
                {
                    $gps->unset_add();
                }
                elseif($data['userdata'][0]->role != 'superadmin')
                {
                    $gps->unset_add();
                }
            }
            if(!in_array('edit',$editPer))
            {
                if($data['permissions']->edit == 'inactive' && $data['userdata'][0]->role == 'superadmin')
                {
                    $gps->unset_edit();
                }
                elseif($data['userdata'][0]->role != 'superadmin')
                {
                    $gps->unset_edit();
                }
                //if($data['permissions']->edit == 'inactive')
                //    $gps->unset_edit();
            }
            if(!in_array('delete',$editPer))
            {
                if($data['permissions']->remove == 'inactive' && $data['userdata'][0]->role == 'superadmin')
                {
                    $gps->unset_remove();
                }
                elseif($data['userdata'][0]->role != 'superadmin')
                {
                    $gps->unset_remove();
                }
                //if($data['permissions']->remove == 'inactive')
                //    $gps->unset_remove();
            }
            if(!in_array('view',$editPer))
            {
                if($data['permissions']->view == 'inactive' && $data['userdata'][0]->role == 'superadmin')
                {
                    $gps->unset_view();
                }
                elseif($data['userdata'][0]->role != 'superadmin')
                {
                    $gps->unset_view();
                }
                //if($data['permissions']->view == 'inactive')
                //    $gps->unset_view();
            }
            if($data['permissions']->csv == 'inactive')
                $gps->unset_csv();
            if($data['permissions']->print == 'inactive')
                $gps->unset_print();
            if($data['permissions']->search == 'inactive')
                $gps->unset_search();
            if($data['permissions']->numbers == 'inactive')
                $gps->unset_numbers();
            if($data['permissions']->pagination == 'inactive')
                $gps->unset_pagination();
            if($data['permissions']->limitlist == 'inactive')
                $gps->unset_limitlist();
            if($data['permissions']->sortable == 'inactive')
                $gps->unset_sortable();
            if(!empty($data['ct'][0]['rename_column']))
            { 
                $j = json_decode($data['ct'][0]['rename_column']);
                foreach($j  as $key => $p)
                {
                    $gps->label(array($key => $p,));
                }
            }
            if(!empty($data['manage'][0]['changetype']))
            { 
                foreach($data['manage'] as $ctype)
                {
                    $ct = json_decode($ctype['changetype']);
                    if($ct->type == 'image' && $ct->crop != 'ratio_crop')
                        $gps->change_type($ct->col_name,$ct->type,$ct->any,array('width' => $ct->width, 'height' => $ct->height, $ct->crop => true));
					else if($ct->type == 'image' && $ct->crop == 'ratio_crop') {
						$gps->change_type($ct->col_name,$ct->type, $ct->any, array('ratio' => $ct->width/$ct->height, 'manual_crop' => true)); }
					else if($ct->type == 'thumbs')
						$gps->change_type($ct->col_name,'image','',array('thumbs'=>array(1 => array('width'=> $ct->small, 'folder' => 'small')),'grid_thumb' => 1));
					else if($ct->type == 'remote_image')
                        $gps->change_type($ct->col_name,$ct->type,$ct->any,array('link' => $ct->links));
                    else if($ct->type == 'file')
                        $gps->change_type($ct->col_name,$ct->type,$ct->any,array($ct->frename => true));
                    else if($ct->type == 'password')
                        $gps->change_type($ct->col_name,$ct->type,$ct->pencrypt);
                    else if($ct->type == 'select')
                        $gps->change_type($ct->col_name,$ct->stype,$ct->s_selected,array('values' => $ct->s_options));
                    else if($ct->type == 'datetime')
                        $gps->change_type($ct->col_name,$ct->dtype,$ct->d_any);
                    else if($ct->type == 'textarea')
                        $gps->change_type($ct->col_name,$ct->type);
                    else if($ct->type == 'int')
                        $gps->change_type($ct->col_name,$ct->type);
                    else if($ct->type == 'text')
                        $gps->change_type($ct->col_name,$ct->type);
                    else if($ct->type == 'timestamp')
                        $gps->change_type($ct->col_name,$ct->type);
					else if($ct->type == 'relation')
					{
						if(!empty($ct->typevalue)){
							$type = array($ct->typename => $ct->typevalue);
							$gps->relation($ct->col_name,$ct->tablename,$ct->valuename,$ct->displayname,$type);}
						else
							$gps->relation($ct->col_name,$ct->tablename,$ct->valuename,$ct->displayname);
					}
					else if($ct->type == 'relation_depend')
					{
						if(!empty($ct->typevalue)){
							$type = array($ct->typename => $ct->typevalue);
							$gps->relation($ct->col_name,$ct->tablename,$ct->valuename,$ct->displayname,$type,'','','','',$ct->dependvaluename,$ct->dependcolname);
						}
						else
							$gps->relation($ct->col_name,$ct->tablename,$ct->valuename,$ct->displayname,'','','','',$ct->dependvaluename,$ct->dependcolname);
						//$gps->relation('region','meta_location','id','local_name','type = \'RE\'','','','','','in_location','country');
					}
					else if($ct->type == 'join')
					{
						$gps->join($ct->col_name,$ct->tablename,$ct->valuename);
					}
					else if($ct->type == 'highlight')
					{
						$gps->highlight($ct->col_name,$ct->condition,$ct->valuename,$ct->color);
					}
					else if($ct->type == 'highlight_row')
					{
						$gps->highlight_row($ct->col_name,$ct->condition,$ct->valuename,$ct->color);
					}
					else if($ct->type == 'map')
					{
						$pin = $ct->latitude.','.$ct->longitude;
						$gps->change_type($ct->col_name,$ct->point,$pin,array('text'=>'Your are here'));
					}
                }
            }
            if(!empty($data['ct'][0]['required_fields']))
            {
                $requ_fields = json_decode($data['ct'][0]['required_fields']);
                foreach($requ_fields as $key => $requ_field)
                {
                    if($requ_field == 'required')
                        $gps->validation_required($key);
                    else if($requ_field == 'readonly')
                        $gps->readonly($key);
                    else if($requ_field == 'disabled')
                        $gps->disabled($key);

                }
            }
            if(!empty($data['ct'][0]['hidden']))
            {
                $hidden_fields = json_decode($data['ct'][0]['hidden']);
                foreach($hidden_fields as $key => $hidden_field)
                {
                    if($hidden_field == 'hidden')
                    {
                        if($tablename != 'orders')
                        {
                            if($tablename != 'customers' && $tablename != 'drivers')
                            {
                                $gps->columns($key,true);
                                $gps->fields($key,true);
                            }
                        }
                    }
                }
            }
            if(!empty($data['ct'][0]['pattern']))
            {
                $pttrn_fields = json_decode($data['ct'][0]['pattern']);
                foreach($pttrn_fields as $key => $pttrn_field)
                {
                    if($pttrn_field != '')
                    {
                        $gps->validation_pattern($key,$pttrn_field);
                    }
                }
            } 
            if(!empty($data['ct'][0]['order_by']))
            {
                $order_by = json_decode($data['ct'][0]['order_by']);
                foreach($order_by as $key => $orderby)
                {
                    if($orderby != '')
                    {
                        $gps->order_by($key,$orderby);
                    }
                }
            } 
			$login_id = $this->session->userdata('logged_in')['id'];
			$login_name = $this->session->userdata('logged_in')['name'];
			$login_role = $this->session->userdata('logged_in')['role'];
			/*
            if($tablename == 'projects' || $tablename == 'slider' || $tablename == 'contact_us' || $tablename == 'testimonials')
			{
                if($tablename == 'contact_us')
            	{
            	    $gps->columns(array('name','email','mesaage','createdDate'),false);
                    $gps->fields(array('isActive'),true);
            	}
                else
                {
                    $gps->columns(array('createdDate','modifiedDate','create_userID','create_username','create_usertype','isActive'),true);
                    $gps->fields(array('createdDate','modifiedDate','create_userID','create_username','create_usertype','isActive'),true);
                }
                $gps->pass_var('create_userID', $login_id);
                $gps->pass_var('create_username', $login_name);
                $gps->pass_var('create_usertype', $login_role);
                $gps->before_insert('created_date');
        		$gps->before_update('modify_date');
            } */
            $data['output'] = $gps->render();
            $this->load->view('edit',$data);
        }
        else
        {
			$data['title']="Page Not Found";
            $this->load->view('error404',$data);
		}
        
        $this->load_footer();
	}
    public function permissions($userper,$tablename){
        $permissions = json_decode($userper);
    	$table = $tablename;
        $perm = '';
        $p = array();
        $view = '';
        $add = '';
        $edit = '';
        $delete = '';
        foreach($permissions as $permsn ) {  
            $perm = isset($permsn->$table)?$permsn->$table:'';
            if(!empty($perm))
            {
            	$p[$table][] = $perm;
            }
        }
        if(!empty($p))
        {
            $view = in_array('view', $p[$table])?'view':'';
            $add = in_array('add', $p[$table])?'add':'';
            $edit = in_array('edit', $p[$table])?'edit':'';
            $delete = in_array('delete', $p[$table])?'delete':'';
        }
        $mergeArray = array($view,$add,$edit,$delete);
        return $mergeArray;
    }
	public function load_footer()
	{
		$this->load->view('include/footer');
	}
}

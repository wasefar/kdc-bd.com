<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

	public function index(){

		if($_POST){

            $id = $this->input->post('id');

            $d_cblock = array(
                    'title' => $this->input->post('title'),
            		'details' => $this->input->post('details')
            	);

            $this->admin_m->update($d_cblock,$id,'id','pages');


            redirect(base_url('dashboard/pages'));

		}

		$data = array();
		$data['page'] = 'Pages';
        $data['title'] = "Dashboard";
        $data['pages'] = $this->admin_m->pages();
		$data['main_content'] = $this->load->view('admin/pages', $data, TRUE);
		$this->load->view('admin/index', $data);
	}


	public function edit($id){

		$data = array();
        $data['page'] = 'Pages';
        $data['title'] = "Dashboard";
        $data['pages'] = $this->admin_m->page_single($id);
        $data['main_content'] = $this->load->view('admin/pages_operation', $data, TRUE);
        $this->load->view('admin/index', $data);

	}




}

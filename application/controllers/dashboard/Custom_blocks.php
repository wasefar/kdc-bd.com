<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom_blocks extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

	public function index(){

		if($_POST){

            $d_cblock = array(
                    'title' => $this->input->post('title'),
            		'content' => $this->input->post('content')
            	);

            $this->admin_m->update_custom_block($d_cblock,$this->input->post('id'));

            redirect(base_url('dashboard/custom_blocks'));

		}

		$data = array();
		$data['page'] = 'Custom Blocks';
        $data['title'] = "Dashboard";
        $data['custom_blocks'] = $this->admin_m->custom_blocks();
		$data['main_content'] = $this->load->view('admin/custom_blocks', $data, TRUE);
		$this->load->view('admin/index', $data);
	}


	public function edit($id){

		$data = array();
        $data['page'] = 'Custom Blocks';
        $data['title'] = "Dashboard";
        $data['custom_blocks'] = $this->admin_m->custom_blocks_signal($id);
        $data['main_content'] = $this->load->view('admin/custom_blocks_edit', $data, TRUE);
        $this->load->view('admin/index', $data);

	}




}

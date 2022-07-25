<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Career extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin_m');
		check_admin_login();
	}

	public function index() {
		$data = array();
		$data['page'] = 'Career';
		$data['title'] = "Dashboard";
		$data['career'] = $this->admin_m->career();
		$data['main_content'] = $this->load->view('admin/career', $data, TRUE);
		$this->load->view('admin/index', $data);
	}

	public function add() {
		$data = array();
		$data['page'] = 'Career';
		$data['title'] = "Dashboard";
		$data['career'] = false;
		$data['main_content'] = $this->load->view('admin/career_operation', $data, TRUE);
		$this->load->view('admin/index', $data);
	}

	public function edit($id) {
		$data = array();
		$data['page'] = 'Career';
		$data['title'] = "Dashboard";
		$data['career'] = $this->admin_m->career_single($id);
		$data['main_content'] = $this->load->view('admin/career_operation', $data, TRUE);
		$this->load->view('admin/index', $data);
	}



	public function operation() {
		if ($_POST) {


			$d_data = array(
				'title' => $this->input->post('title') ,
				'url' => url_title($_POST['title'], 'underscore', TRUE) ,
				'vacancy' => $this->input->post('vacancy') ,
				'job_context' => $this->input->post('job_context') ,
				'job_responsibilities' => $this->input->post('job_responsibilities') ,
				'employment_status' => $this->input->post('employment_status') ,
				'educational_requirements' => $this->input->post('educational_requirements') ,
				'experience_requirements' => $this->input->post('experience_requirements') ,
				'additional_requirements' => $this->input->post('additional_requirements') ,
				'job_location' => $this->input->post('job_location') ,
				'salary' => $this->input->post('salary') ,
				'compensation' => $this->input->post('compensation') ,
				'deadline' => $this->input->post('deadline') ,
				'status' => $this->input->post('status') 
			);
			if (isset($_POST['id']) && $_POST['id'] != '') {
				$id = $this->input->post('id');
				$this->admin_m->update($d_data, $id, 'id', 'career');
			}
			else {
				$id = $this->admin_m->insert($d_data, 'career');
			}

			redirect(base_url('dashboard/career'));
		}
	}

	

	public function delete($id){
		$this->admin_m->delete($id, 'id', 'career');
		redirect(base_url('dashboard/career'));
	}

}
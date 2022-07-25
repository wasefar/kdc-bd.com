<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Training extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin_m');
		check_admin_login();
	}

	public function index() {
		$data = array();
		$data['page'] = 'Training';
		$data['title'] = "Dashboard";
		$data['training'] = $this->admin_m->training();
		$data['main_content'] = $this->load->view('admin/training', $data, TRUE);
		$this->load->view('admin/index', $data);
	}

	public function add() {
		$data = array();
		$data['page'] = 'Training';
		$data['title'] = "Dashboard";
		$data['training'] = false;
		$data['main_content'] = $this->load->view('admin/training_operation', $data, TRUE);
		$this->load->view('admin/index', $data);
	}

	public function edit($id) {
		$data = array();
		$data['page'] = 'Training';
		$data['title'] = "Dashboard";
		$data['training'] = $this->admin_m->training_single($id);
		$data['main_content'] = $this->load->view('admin/training_operation', $data, TRUE);
		$this->load->view('admin/index', $data);
	}



	public function operation() {
		if ($_POST) {


			$d_data = array(
				'title' => $this->input->post('title') ,
				'url' => url_title($_POST['title'], 'underscore', TRUE) ,
				'date_time' => $this->input->post('date_time'),
				'price' => $this->input->post('price'),
				'duration' => $this->input->post('duration'),
				'class_schedule' => $this->input->post('class_schedule'),
				'no_class' => $this->input->post('no_class'),
				'total_hour' => $this->input->post('total_hour'),
				'last_date' => $this->input->post('last_date'),
				'venue' => $this->input->post('venue'),
				'introduction' => $this->input->post('introduction'),
				'methodology' => $this->input->post('methodology'),
				'contents_of_training' => $this->input->post('contents_of_training'),
				'contact' => $this->input->post('contact'),
				// 'status' => $this->input->post('status')
			);
			if (isset($_POST['id']) && $_POST['id'] != '') {
				$id = $this->input->post('id');
				$this->admin_m->update($d_data, $id, 'id', 'training');
			}
			else {
				$id = $this->admin_m->insert($d_data, 'training');
			}

			redirect(base_url('dashboard/training'));
		}
	}

	

	public function delete($id){
		$this->admin_m->delete($id, 'id', 'training');
		redirect(base_url('dashboard/training'));
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

	public function index(){
        $data = array();
        $data['page'] = "Training";
        $data['title'] = "Training"; 
        $data['page_title'] = "Training"; 
        $data['trainings'] = $this->common_m->training();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('training', $data, TRUE);
        $this->load->view('index', $data);
    }

    public function d($id) {

        $training = $this->common_m->training_by_url($id);
        $data = array();
        $data['page'] = "Training";
        $data['title'] = $training->title;
        $data['page_title'] = $training->title;
        $data['training'] = $training;
        $data['current_training'] = $id;
        $data['trainings'] = $this->common_m->training();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('training_single', $data, TRUE);
        $this->load->view('index', $data);
    }

}


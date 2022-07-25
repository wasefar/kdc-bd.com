<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

	public function index(){
        $data = array();
        $data['page'] = "Career";
        $data['title'] = "Career"; 
        $data['page_title'] = "Career"; 
        $data['careers'] = $this->common_m->career();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('career', $data, TRUE);
        $this->load->view('index', $data);
    }

    public function d($id) {

        $career = $this->common_m->career_by_url($id);
        $data = array();
        $data['page'] = "Career";
        $data['title'] = $career->title;
        $data['page_title'] = $career->title;
        $data['career'] = $career;
        $data['current_career'] = $id;
        $data['careers'] = $this->common_m->career();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('career_single', $data, TRUE);
        $this->load->view('index', $data);
    }

}


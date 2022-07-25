<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

	public function index(){
        $data = array();
        $data['page'] = "Projects";
        $data['title'] = "Projects"; 
        $data['page_title'] = "Projects"; 
        $data['projects'] = $this->common_m->projects(false);
        $data['main_content'] = $this->load->view('projects', $data, TRUE);
        $this->load->view('index', $data);
    }

    public function d($url) {

        $project = $this->common_m->project_by_url($url);
        $data = array();
        $data['page'] = "Projects";
        $data['title'] = $project->title;
        $data['page_title'] = $project->title;
        $data['project'] = $project;
        $data['current_project'] = $url;
        $data['projects'] = $this->common_m->projects(false);
        $data['gallery'] = $this->common_m->gallery_by_project($project->id);
        $data['main_content'] = $this->load->view('project_single', $data, TRUE);
        $this->load->view('index', $data);
    }

}


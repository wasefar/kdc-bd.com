<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

	public function index(){
        $data = array();
        $data['page'] = "Team";
        $data['title'] = "Team"; 
        $data['page_title'] = "Team"; 
        $data['team'] = $this->common_m->team();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['team_mod'] = $this->load->view('inc/team', $data, TRUE);
        $data['main_content'] = $this->load->view('team', $data, TRUE);
        $this->load->view('index', $data);
    }

    public function details($id) {

        $team = $this->common_m->team_by_id($id);
        
        $data = array();
        $data['page'] = "Team";
        $data['title'] = $team->name;
        $data['page_title'] = $team->name;
        $data['team'] = $team;
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('team_details', $data, TRUE);
        $this->load->view('index', $data);
    }

}


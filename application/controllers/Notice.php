<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

	public function index(){
        $data = array();
        $data['page'] = "Notice";
        $data['title'] = "Notice"; 
        $data['page_title'] = "Notice"; 
        $data['notices'] = $this->common_m->notice();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('notice', $data, TRUE);
        $this->load->view('index', $data);
    }

    public function d($url) {

        $notice = $this->common_m->notice_by_url($url);
        $data = array();
        $data['page'] = "Notice";
        $data['title'] = $notice->title;
        $data['page_title'] = $notice->title;
        $data['notice'] = $notice;
        $data['current_notice'] = $url;
        $data['notices'] = $this->common_m->notice();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('notice_single', $data, TRUE);
        $this->load->view('index', $data);
    }

}


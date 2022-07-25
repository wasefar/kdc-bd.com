<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

    public function index() {
        
        $page = $this->common_m->page_single('about_us');

        $data = array();
        $data['page'] = $page->title;
        $data['page_title'] = $page->title;
        $data['page_details'] = $page->details;
        $data['blogs'] = $this->common_m->blog();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('page', $data, TRUE);
        $this->load->view('index', $data);
    }

	public function d($slug) {
        
        $page = $this->common_m->page_single($slug);

        $data = array();
        $data['page'] = $page->title;
        $data['page_title'] = $page->title;
        $data['page_details'] = $page->details;
        $data['blogs'] = $this->common_m->blog();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('page', $data, TRUE);
        $this->load->view('index', $data);
    }
}

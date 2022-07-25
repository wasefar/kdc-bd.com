<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

    public function index() {
        $data = array();
        $data['page'] = "Gallery";
        $data['title'] = "Gallery";
        $data['page_title'] = "Gallery";
        $data['gallery'] = $this->common_m->gallery_all();
        $data['main_content'] = $this->load->view('gallery', $data, TRUE);
        $this->load->view('index', $data);
    }

    public function d($url) {
        
        $service = $this->common_m->service_by_url($url);

        $data = array();
        $data['page'] = "Gallery";
        $data['title'] = $service->title;
        $data['gallery'] = $this->common_m->gallery_by_service($service->id);
        $data['main_content'] = $this->load->view('gallery', $data, TRUE);
        $this->load->view('index', $data);
    }
}

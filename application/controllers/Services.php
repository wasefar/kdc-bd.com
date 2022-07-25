<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

	public function index(){
        $data = array();
        $data['page'] = "Services";
        $data['title'] = "Services";
        $data['page_title'] = "Services";
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('services', $data, TRUE);
        $this->load->view('index', $data);
    }

    public function d($url) {
        
        $service = $this->common_m->service_by_url($url);

        $data = array();
        $data['page'] = "Services";
        $data['title'] = $service->title;
        $data['page_title'] = $service->title;
        $data['service'] = $service;
        $data['current_service'] = $url;
        $data['services'] = $this->common_m->services();
        $data['gallery'] = $this->common_m->gallery_by_service($service->id);
        $data['main_content'] = $this->load->view('service_single', $data, TRUE);
        $this->load->view('index', $data);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

    public function index(){
        $data = array();
        $data['page'] = "KDC products";
        $data['title'] = "KDC products"; 
        $data['page_title'] = "KDC products"; 
        $data['products'] = $this->common_m->all_products();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('products', $data, TRUE);
        $this->load->view('index', $data);
    }

   

}


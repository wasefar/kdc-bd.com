<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_catagroy extends CI_Controller {

    function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

    public function index(){
        $data = array();
        $data['page'] = "product catagroy";
        $data['title'] = "product catagroy"; 
        $data['page_title'] = "product_catagroy"; 
        $data['product_catagroy'] = $this->common_m->product_catagroy();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['product_catagroy_mod'] = $this->load->view('inc/product_catagroy', $data, TRUE);
        $data['main_content'] = $this->load->view('product_catagroy', $data, TRUE);
        $this->load->view('index', $data);
    }

    public function details($id) {

        $product_catagroy = $this->common_m->product_catagroy_by_id($id);
        
        $data = array();
        $data['page'] = "product catagroy";
        $data['title'] = $product_catagroy->title;
        $data['page_title'] = $product_catagroy->title;
        $data['product_catagroy'] = $product_catagroy;
        $data['products'] = $this->common_m->products($id);

        $data['main_content'] = $this->load->view('product_catagroy_details', $data, TRUE);
        $this->load->view('index', $data);
    }

}


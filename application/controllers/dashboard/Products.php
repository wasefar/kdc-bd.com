<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

    public function index(){
        $data = array();
        $data['page'] = 'Our product';
        $data['title'] = "Dashboard";
        $data['products'] = $this->admin_m->products();
        $data['product_catagroy'] = $this->admin_m->product_catagroy();
        $data['main_content'] = $this->load->view('admin/products', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function add(){
        $data = array();
        $data['page'] = 'Our product';
        $data['title'] = "Dashboard";
        $data['products'] = false;
        $data['product_catagroy'] = $this->admin_m->product_catagroy();
        $data['main_content'] = $this->load->view('admin/products_operation', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function edit($id){
        $data = array();
        $data['page'] = 'Our product';
        $data['title'] = "Dashboard";
        $data['products'] = $this->admin_m->products_single($id);
        $data['product_catagroy'] = $this->admin_m->product_catagroy();
        $data['main_content'] = $this->load->view('admin/products_operation', $data, TRUE);
        $this->load->view('admin/index', $data);
    }


    public function operation(){
        if($_POST){

            $d_data = array(
                    'catagroy_id'=> $this->input->post('catagroy_id'),
                    'title'=> $this->input->post('title'),
                    'sort_details'=> $this->input->post('sort_details'),
                    // 'catagroy'=> $this->input->post('catagroy'),
                    'url' => url_title($this->input->post('title'), 'underscore', TRUE), 
                    
                );
            
            if(isset($_POST['id']) && $_POST['id'] != ''){
                $id = $this->input->post('id');
                $this->admin_m->update($d_data,$id,'id','product');
            }else{
                $id = $this->admin_m->insert($d_data, 'product');            
            }
            
                
            if ($_FILES['photo']['name'] != '') {

                $up_load = $this->admin_m->up_image($_FILES['photo'],'300','270','360','crop');

                $action = array(

                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],

                );

                $this->admin_m->update($action,$id,'id','product');
            }


            redirect(base_url('dashboard/products'));

        }
    }



    public function delete($id){

        $this->admin_m->delete($id,'id','product');        
        redirect(base_url('dashboard/products'));

    }



}

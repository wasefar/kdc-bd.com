<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

    public function index(){
        $data = array();
        $data['page'] = 'Testimonial';
        $data['title'] = "Dashboard";
        $data['testimonial'] = $this->admin_m->testimonial();
        $data['main_content'] = $this->load->view('admin/testimonial', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function add(){
        $data = array();
        $data['page'] = 'Testimonial';
        $data['title'] = "Dashboard";
        $data['testimonial'] = false;
        $data['main_content'] = $this->load->view('admin/testimonial_operation', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function edit($id){
        $data = array();
        $data['page'] = 'Testimonial';
        $data['title'] = "Dashboard";
        $data['testimonial'] = $this->admin_m->testimonial_single($id);
        $data['main_content'] = $this->load->view('admin/testimonial_operation', $data, TRUE);
        $this->load->view('admin/index', $data);
    }


    public function operation(){
        if($_POST){

           


            $d_data = array(
                    'name'=> $this->input->post('name'),
                    'designation'=> $this->input->post('designation'),
                    'details'=> $this->input->post('details'),
                );
            
            if(isset($_POST['id']) && $_POST['id'] != ''){
                $id = $this->input->post('id');
                $this->admin_m->update($d_data,$id,'id','testimonial');
            }else{
                $id = $this->admin_m->insert($d_data, 'testimonial');            
            }

            
            
            
            
                
            if ($_FILES['photo']['name'] != '') {

                $up_load = $this->admin_m->up_image($_FILES['photo'],'300','100','100','crop');

                $action = array(

                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],

                );

                $this->admin_m->update($action,$id,'id','testimonial');
            }


            redirect(base_url('dashboard/testimonial'));

        }
    }



    public function delete($id){

        $this->admin_m->delete($id,'id','testimonial');        
        redirect(base_url('dashboard/testimonial'));

    }



}

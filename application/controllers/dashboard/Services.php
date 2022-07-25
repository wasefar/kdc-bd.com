<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

    public function index(){
        $data = array();
        $data['page'] = 'Services';
        $data['title'] = "Dashboard";
        $data['services'] = $this->admin_m->services();
        $data['main_content'] = $this->load->view('admin/services', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function add(){
        $data = array();
        $data['page'] = 'Services';
        $data['title'] = "Dashboard";
        $data['service'] = false;
        $data['main_content'] = $this->load->view('admin/services_operation', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function edit($id){
        $data = array();
        $data['page'] = 'Services';
        $data['title'] = "Dashboard";
        $data['service'] = $this->admin_m->service_single($id);
        $data['main_content'] = $this->load->view('admin/services_operation', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function gallery($id){
        $data = array();
        $data['page'] = 'Gallery';
        $data['title'] = "Dashboard Gallery";
        $data['service'] = $this->admin_m->service_by_id($id);
        $data['gallery'] = $this->admin_m->gallery($id);
        $data['main_content'] = $this->load->view('admin/gallery', $data, TRUE);
        $this->load->view('admin/index', $data);
    }


    public function operation(){
        if($_POST){

           


            $d_data = array(
                    'title'=> $this->input->post('title'),
                    'url'=> url_title($_POST['title'], 'underscore', TRUE),
                    'details'=> $this->input->post('details'),
                );
            
            if(isset($_POST['id']) && $_POST['id'] != ''){
                $id = $this->input->post('id');
                $this->admin_m->update($d_data,$id,'id','services');
            }else{
                $id = $this->admin_m->insert($d_data, 'services');            
            }

            
            
            
            
                
            if ($_FILES['photo']['name'] != '') {

                $up_load = $this->admin_m->up_image($_FILES['photo'],'900','500','300','crop');

                $action = array(

                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],

                );

                $this->admin_m->update($action,$id,'id','services');
            }


            redirect(base_url('dashboard/services'));

        }
    }


    public function gallery_operation(){
        if($_POST){

                       
            $service_id = $this->input->post('service_id');
                
            if ($_FILES['photo']['name'] != '') {

                $up_load = $this->admin_m->up_image($_FILES['photo'],'1000','300','300','crop');

                $action = array(

                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],
                    'service_id' => $this->input->post('service_id'),

                );

                $this->admin_m->insert($action,'gallery');
            }


            redirect(base_url('dashboard/services/gallery/'.$service_id));

        }
    }

    public function delete($id){

        $this->admin_m->delete($id,'id','services');        
        redirect(base_url('dashboard/services'));

    }

    public function delete_gallery($id,$service_id){

        $this->admin_m->delete($id,'id','gallery');        
        redirect(base_url('dashboard/services/gallery/'.$service_id));

    }



}

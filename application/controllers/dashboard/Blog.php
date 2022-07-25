<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

    public function index(){
        $data = array();
        $data['page'] = 'Blog';
        $data['title'] = "Dashboard";
        $data['blog'] = $this->admin_m->blog();
        $data['main_content'] = $this->load->view('admin/blog', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function add(){
        $data = array();
        $data['page'] = 'Blog';
        $data['title'] = "Dashboard";
        $data['blog'] = false;
        $data['main_content'] = $this->load->view('admin/blog_operation', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function edit($id){
        $data = array();
        $data['page'] = 'Blog';
        $data['title'] = "Dashboard";
        $data['blog'] = $this->admin_m->blog_single($id);
        $data['main_content'] = $this->load->view('admin/blog_operation', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function operation(){
        if($_POST){

            
            $d_data = array(
                    'title'=> $this->input->post('title'),
                    'url'=> url_title($_POST['title'], 'underscore', TRUE),
                    'date_time'=> date_now(),
                    'details'=> $this->input->post('details'),
                );

            if(isset($_POST['id']) && $_POST['id'] != ''){
                $id = $this->input->post('id');
                $this->admin_m->update($d_data,$id,'id','blog');
            }else{
                $id = $this->admin_m->insert($d_data, 'blog');            
            }
            

            if ($_FILES['photo']['name'] != '') {
                
                $up_load = $this->admin_m->up_image($_FILES['photo'],'900','350','250','crop');
                
                $action = array(
                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],
                );

                $this->admin_m->update($action,$id,'id','blog');

            }
            
            redirect(base_url('dashboard/blog'));

        }

    }
    
    public function delete($id){

        $this->admin_m->delete($id,'id','blog');        
        redirect(base_url('dashboard/blog'));

    }




}


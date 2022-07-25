<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

    public function index(){
        $data = array();
        $data['page'] = 'Our Team';
        $data['title'] = "Dashboard";
        $data['team'] = $this->admin_m->team();
        $data['main_content'] = $this->load->view('admin/team', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function add(){
        $data = array();
        $data['page'] = 'Our Team';
        $data['title'] = "Dashboard";
        $data['team'] = false;
        $data['main_content'] = $this->load->view('admin/team_operation', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function edit($id){
        $data = array();
        $data['page'] = 'Our Team';
        $data['title'] = "Dashboard";
        $data['team'] = $this->admin_m->team_single($id);
        $data['main_content'] = $this->load->view('admin/team_operation', $data, TRUE);
        $this->load->view('admin/index', $data);
    }


    public function operation(){
        if($_POST){

            $d_data = array(
                    'name'=> $this->input->post('name'),
                    'details'=> $this->input->post('details'),
                    'designation'=> $this->input->post('designation'),
                    'facebook'=> $this->input->post('facebook'),
                    'twitter'=> $this->input->post('twitter'),
                    'linkedin'=> $this->input->post('linkedin'),
                );
            
            if(isset($_POST['id']) && $_POST['id'] != ''){
                $id = $this->input->post('id');
                $this->admin_m->update($d_data,$id,'id','team');
            }else{
                $id = $this->admin_m->insert($d_data, 'team');            
            }
            
                
            if ($_FILES['photo']['name'] != '') {

                $up_load = $this->admin_m->up_image($_FILES['photo'],'300','270','360','crop');

                $action = array(

                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],

                );

                $this->admin_m->update($action,$id,'id','team');
            }


            redirect(base_url('dashboard/team'));

        }
    }



    public function delete($id){

        $this->admin_m->delete($id,'id','team');        
        redirect(base_url('dashboard/team'));

    }



}

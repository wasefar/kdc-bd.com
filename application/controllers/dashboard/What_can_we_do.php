<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class What_can_we_do extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

    public function index(){
        $data = array();
        $data['page'] = 'What Can We Do';
        $data['title'] = "Dashboard";
        $data['what_can_we_do'] = $this->admin_m->what_can_we_do();
        $data['main_content'] = $this->load->view('admin/what_can_we_do', $data, TRUE);
        $this->load->view('admin/index', $data);
    }


    public function edit(){
        if($_POST){

           


            $d_data = array(
                    'title'=> $this->input->post('title'),
                    'details'=> $this->input->post('details'),
                );
            
            if(isset($_POST['id']) && $_POST['id'] != ''){
                $id = $this->input->post('id');
                $this->admin_m->update($d_data,$id,'id','what_can_we_do');
            }else{
                $id = $this->admin_m->insert($d_data, 'what_can_we_do');            
            }

            
            
            


            redirect(base_url('dashboard/what_can_we_do'));

        }
    }



    public function delete($id){

        $this->admin_m->delete($id,'id','what_can_we_do');        
        redirect(base_url('dashboard/what_can_we_do'));

    }




}

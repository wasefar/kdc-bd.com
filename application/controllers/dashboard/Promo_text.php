<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo_text extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

    public function index(){
        $data = array();
        $data['page'] = 'Why Choose us';
        $data['title'] = "Dashboard";
        $data['promo_text'] = $this->admin_m->promo_text();
        $data['main_content'] = $this->load->view('admin/promo_text', $data, TRUE);
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
                $this->admin_m->update($d_data,$id,'id','promo_text');
            }else{
                $id = $this->admin_m->insert($d_data, 'promo_text');            
            }

            if ($_FILES['photo']['name'] != '') {

                $up_load = $this->admin_m->up_image($_FILES['photo'],'175','175','175');

                $action = array(
                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],
                );

                $this->admin_m->update($action,$id,'id','promo_text');
            }
            
            


            redirect(base_url('dashboard/promo_text'));

        }
    }



    public function delete($id){

        $this->admin_m->delete($id,'id','promo_text');        
        redirect(base_url('dashboard/promo_text'));

    }




}

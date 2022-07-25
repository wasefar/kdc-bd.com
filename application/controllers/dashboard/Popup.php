<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Popup extends CI_Controller {



    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }


    public function index(){
		
		$id = 1;
        $data = array();
        $data['page'] = 'Popup';
        $data['title'] = "Dashboard";
        $data['popup'] = $this->admin_m->popup_single($id);
        $data['main_content'] = $this->load->view('admin/popup_operation', $data, TRUE);
        $this->load->view('admin/index', $data);

    }


    public function operation(){

        if($_POST){

            if(isset($_POST['status']) && $_POST['status'] == 1){
                $status = 1;
            }else{
                $status = 0;
            }
			
            $d_data = array('status'=> $this->input->post('status'),);

            $id = 1;

            $this->admin_m->update($d_data,$id,'id','popup');
			

            if ($_FILES['photo']['name'] != '') {

                $up_load = $this->admin_m->up_image($_FILES['photo'],'900','500','400','crop');

                $action = array(
                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],
                );

                $this->admin_m->update($action,$id,'id','popup');

            }

            redirect(base_url('dashboard/popup'));

        }

    }





}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

    public function index(){

        $data = array();
        $data['mgs'] = $this->session->flashdata('save_settings');;
        $data['page'] = 'Settings';
        $data['title'] = "Dashboard - ". $this->config->item('site_name');
        $data['settings'] = $this->admin_m->settings();


        //$sett = $this->admin_m->getSettings();
        //echo "<pre>";print_r($sett);exit();

        $data['main_content'] = $this->load->view('admin/settings', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    
    

	public function save(){

        $this->admin_m->save_settings();
        $this->session->set_flashdata("save_settings", " <div class=\"alert fade alert-success in\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button><strong>Changes have been saved...</strong></div>");
        redirect(base_url('dashboard/settings'));
	}




    public function up_banner(){
        if($_POST){

            $width = $this->input->post('width');
            $height = $this->input->post('height');
            $settings_id = $this->input->post('settings_id');
            
            $up_load = $this->admin_m->up_settings_image($_FILES['photo'],$width,$height,'crop');


            $d_page = array(
                    'content' => $up_load['thumb']
                );

            $this->admin_m->update($d_page,$settings_id,'id','settings');

            $thumb =  base_url($up_load['thumb']);

            echo "<img style='width:150px;' class='img-thumbnail' src='".$thumb."'>";

        }
    }



}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_settings extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

	public function index(){

        $mgs = '';

		if($_POST){

            $d_set = array(
                    'email' => $this->input->post('email'),
                    'address' => $this->input->post('address'),
                    'contact_message' => $this->input->post('contact_message'),
                    'opening_time' => $this->input->post('opening_time'),
                    'phone' => $this->input->post('phone'),
                    's_fb' => $this->input->post('s_fb'),
                    's_twitter' => $this->input->post('s_twitter'),
                    's_g_plus' => $this->input->post('s_g_plus'),
                    's_instagram' => $this->input->post('s_instagram'),
                    'lat_lang1' => $this->input->post('lat_lang1'),
                    'lang' => $this->input->post('lang'),
                    'contact_mail' => $this->input->post('contact_mail'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_tag_description' => $this->input->post('meta_tag_description'),
                    'meta_tag_keywords' => $this->input->post('meta_tag_keywords'),
                    'success_message' => $this->input->post('success_message')
            	);

            $this->admin_m->update($d_set,1,'id','contact_settings');

            $mgs =" <div class=\"alert fade alert-success in\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button><strong>Changes have been saved...</strong></div>";

		}

		$data = array();
        $data['mgs'] = $mgs;
		$data['page'] = 'Contact Settings';
        $data['title'] = "Dashboard";
        $data['contact'] = $this->admin_m->contact_info();
		$data['main_content'] = $this->load->view('admin/contact_settings', $data, TRUE);
		$this->load->view('admin/index', $data);
	}
    
    


    public function upload_banner(){
        if($_POST){
            
            
            if ($_FILES['photo']['name'] != '') {

                $up_load = $this->admin_m->up_image($_FILES['photo'],'150','150','85');

                $action = array(

                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],

                );

                $this->admin_m->update($action,1,'id','contact_settings');
                
                $thumb =  base_url($up_load['thumb']);

                echo "<img src='".$thumb."'>";
            }
            
            
            

        }
    }





}

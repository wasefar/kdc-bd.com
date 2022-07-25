<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

	public function index(){

		if($_POST){

            $up_load = $this->admin_m->up_image($_FILES['photo'],'1920',350,250,TRUE);
            
            $d_gallery = array(
                    'caption'=> $this->input->post('caption'),
            		'image'   => $up_load['image'],
            		'thumb'   => $up_load['thumb'],
            	);

            $this->admin_m->insert($d_gallery, 'gallery');

            redirect(base_url('dashboard/gallery'));

		}

		$data = array();
        $data['page'] = 'Gallery';
        $data['title'] = "Dashboard - ".$this->config->item('site_name');
        $data['gallery'] = $this->admin_m->gallery_n();
		$data['main_content'] = $this->load->view('admin/gallery_n', $data, TRUE);
		$this->load->view('admin/index', $data);
	}


    public function edit(){
        if($_POST){


            $id = $this->input->post('id');
                
            if ($_FILES['photo']['name'] != '') {

                $up_load = $this->admin_m->up_image($_FILES['photo'],'1920',350,250,TRUE);

                $action = array(

                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],

                );

                $this->admin_m->update($action,$id,'id','gallery');
            }

            $d_gallery = array(
                    'caption'=> $this->input->post('caption')
                );

            $this->admin_m->update($d_gallery,$id,'id','gallery');


            redirect(base_url('dashboard/gallery'));

        }
    }

	public function delete($id){

		$this->admin_m->delete($id,'id','gallery');		
		redirect(base_url('dashboard/gallery'));

	}



}

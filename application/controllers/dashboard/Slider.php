<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

	public function index(){

		if($_POST){

            $up_load = $this->admin_m->up_image($_FILES['photo'],'1920');
            
            $d_slider = array(
                    'caption1'=> $this->input->post('caption1'),
                    'caption2'=> $this->input->post('caption2'),
                    'caption3'=> $this->input->post('caption3'),
            		'image'   => $up_load['image'],
            		'thumb'   => $up_load['thumb'],
            	);

            $this->admin_m->insert($d_slider, 'home_page_slider');

            redirect(base_url('dashboard/slider'));

		}

		$data = array();
        $data['page'] = 'Dashboard Slider';
        $data['title'] = "Dashboard - ".$this->config->item('site_name');
        $data['slider'] = $this->admin_m->home_page_slider();
		$data['main_content'] = $this->load->view('admin/slider', $data, TRUE);
		$this->load->view('admin/index', $data);
	}


    public function edit(){
        if($_POST){


            $slider_id = $this->input->post('slider_id');
                
            if ($_FILES['photo']['name'] != '') {

                $up_load = $this->admin_m->up_image($_FILES['photo'],'1920');

                $action = array(

                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],

                );

                $this->admin_m->update($action,$slider_id,'slider_id','home_page_slider');
            }

            $d_slider = array(
                    'caption1'=> $this->input->post('caption1'),
                    'caption2'=> $this->input->post('caption2'),
                    'caption3'=> $this->input->post('caption3')
                );

            $this->admin_m->update($d_slider,$slider_id,'slider_id','home_page_slider');


            redirect(base_url('dashboard/slider'));

        }
    }

	public function delete($id){

		$this->admin_m->delete($id,'slider_id','home_page_slider');		
		redirect(base_url('dashboard/slider'));

	}



}

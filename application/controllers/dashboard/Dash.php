<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

	public function index(){
		$data = array();
		$data['page'] = 'Dashboard';
        $data['title'] = "Dashboard - ".$this->config->item('site_name');
        $data['dash'] = $this->admin_m->dash();
		$data['main_content'] = $this->load->view('admin/home', $data, TRUE);
		$this->load->view('admin/index', $data);
	}




    public function change_order($link_id,$order,$table){

        $data = array(
                'row_order' => $order
            );
        if($table == 'home_page_slider'){
            $this->admin_m->update($data, $link_id,'slider_id',$table);
        }else{
            $this->admin_m->edit_option($data,$link_id,$table);
        }
        

    }
}

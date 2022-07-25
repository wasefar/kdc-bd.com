<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

	public function index(){
        $data = array();
        $data['page'] = "Home";
        $data['page_title'] = "Home";
        $data['team'] = $this->common_m->team(4);
        $data['services'] = $this->common_m->services(6);
        $data['promo_text'] = $this->common_m->promo_text();
        $data['our_clients'] = $this->common_m->our_clients();
        $data['testimonial'] = $this->common_m->testimonial();
        $data['sliders'] = $this->common_m->home_page_slider();
        $data['recent_projects'] = $this->common_m->recent_projects();
        $data['recent_blog'] = $this->common_m->recent_blog();
        $data['notice'] = $this->common_m->home_notice();
		
        $data['popup'] = $this->common_m->home_popup();
		
        $data['featured_projects'] = $this->common_m->featured_projects();
        $data['team_mod'] = $this->load->view('inc/team', $data, TRUE);
        $data['main_content'] = $this->load->view('home', $data, TRUE);
        $this->load->view('index', $data);
    }
}

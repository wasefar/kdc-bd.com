<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

	public function index(){
        $data = array();
        $data['page'] = "Blog";
        $data['title'] = "Blog"; 
        $data['page_title'] = "Blog"; 
        $data['blogs'] = $this->common_m->blog();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('blog', $data, TRUE);
        $this->load->view('index', $data);
    }

    public function d($id) {

        $blog = $this->common_m->blog_by_id($id);
        $data = array();
        $data['page'] = "Blog";
        $data['title'] = $blog->title;
        $data['page_title'] = $blog->title;
        $data['blog'] = $blog;
        $data['current_blog'] = $blog->url;
        $data['blogs'] = $this->common_m->blog();
        $data['projects'] = $this->common_m->projects(false);
        $data['services'] = $this->common_m->services();
        $data['main_content'] = $this->load->view('blog_single', $data, TRUE);
        $this->load->view('index', $data);
    }

}


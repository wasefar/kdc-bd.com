<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Projects extends CI_Controller {



    function __construct() {

        parent::__construct();

        $this->load->model('admin_m');

        check_admin_login();

    }



    public function index(){

        $data = array();

        $data['page'] = 'Projects';

        $data['title'] = "Dashboard";

        $data['projects'] = $this->admin_m->projects();

        $data['main_content'] = $this->load->view('admin/projects', $data, TRUE);

        $this->load->view('admin/index', $data);

    }



    public function add(){

        $data = array();

        $data['page'] = 'Projects';

        $data['title'] = "Dashboard";

        $data['project'] = false;

        $data['main_content'] = $this->load->view('admin/projects_operation', $data, TRUE);

        $this->load->view('admin/index', $data);

    }



    public function edit($id){

        $data = array();

        $data['page'] = 'Projects';

        $data['title'] = "Dashboard";

        $data['project'] = $this->admin_m->project_single($id);

        $data['main_content'] = $this->load->view('admin/projects_operation', $data, TRUE);

        $this->load->view('admin/index', $data);

    }



    public function gallery($id){

        $data = array();

        $data['page'] = 'Gallery';

        $data['title'] = "Dashboard Gallery";

        $data['project'] = $this->admin_m->project_by_id($id);

        $data['gallery'] = $this->admin_m->project_gallery($id);

        $data['main_content'] = $this->load->view('admin/project_gallery', $data, TRUE);

        $this->load->view('admin/index', $data);

    }





    public function operation(){

        if($_POST){



            if(isset($_POST['featured']) && $_POST['featured'] == 1){

                $featured = 1;

            }else{

                $featured = 0;

            }




            $d_data = array(

                    'title'=> $this->input->post('title'),

                    'url'=> url_title($_POST['title'], 'underscore', TRUE),

                    'date'=> $this->input->post('date'),

                    'value'=> $this->input->post('value'),

                    'client'=> $this->input->post('client'),

                    'location'=> $this->input->post('location'),

                    'details'=> $this->input->post('details'),
                    'status'=> $this->input->post('status'),

                    'featured'=> $featured,

                );

            

            if(isset($_POST['id']) && $_POST['id'] != ''){

                $id = $this->input->post('id');

                $this->admin_m->update($d_data,$id,'id','projects');

            }else{

                $id = $this->admin_m->insert($d_data, 'projects');            

            }



            

            

            

            

                

            if ($_FILES['photo']['name'] != '') {



                $up_load = $this->admin_m->up_image($_FILES['photo'],'900','500','400','crop');



                $action = array(



                    'image'   => $up_load['image'],

                    'thumb'   => $up_load['thumb'],



                );



                $this->admin_m->update($action,$id,'id','projects');

            }





            redirect(base_url('dashboard/projects'));



        }

    }





    public function gallery_operation($project_id){

        //if($_POST){



                       

            //$project_id = $this->input->post('project_id');

                

            if ($_FILES['file']['name'] != '') {



                $up_load = $this->admin_m->up_image($_FILES['file'],'1000','300','300','crop');



                $action = array(



                    'image'   => $up_load['image'],

                    'thumb'   => $up_load['thumb'],

                    'project_id' => $project_id,



                );



                $this->admin_m->insert($action,'project_gallery');

                echo "ok";

            }





            //redirect(base_url('dashboard/projects/gallery/'.$project_id));



        //}

    }

    public function get_page_img($page_id){

        //$imgs = $this->admin_m->page_image($page_id);
        $imgs = $this->admin_m->project_gallery($page_id);
       

        foreach($imgs as $img){
            $file[] = array(
                'name' => $img['id'],
                'path' => $img['thumb'],
                'size' => filesize('./'.$img['image'])
            );
        }

        header("Content-type: text/json");
        header("Content-type: application/json");
        echo json_encode($file);

    }


    public function del_img(){
        if ($_POST) {

            $id = $_POST['file'];

            $img = $this->admin_m->single_project_img($id);

            $this->admin_m->delete($id,'id','project_gallery');

            $thumb    = './'.$img->thumb;
            $image    = './'.$img->image;

            if(file_exists($thumb)){
                unlink($thumb);
            }
            if(file_exists($image)){
                unlink($image);
            }

        }
    }



    public function delete($id){



        $this->admin_m->delete($id,'id','projects');        

        redirect(base_url('dashboard/projects'));



    }



    public function delete_gallery($id,$project_id){



        $this->admin_m->delete($id,'id','project_gallery');        

        redirect(base_url('dashboard/projects/gallery/'.$project_id));



    }







}


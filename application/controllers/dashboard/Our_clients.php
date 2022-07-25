<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_clients extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        check_admin_login();
    }

	public function index(){


		$data = array();
        $data['page'] = 'Our Clients';
        $data['title'] = "Dashboard";
        $data['our_clients'] = $this->admin_m->our_clients();
		$data['main_content'] = $this->load->view('admin/our_clients', $data, TRUE);
		$this->load->view('admin/index', $data);
	}


    public function edit(){
        if($_POST){

            if(isset($_POST['type']) && $_POST['type'] == 1){
                $type = 1;
            }else{
                $type = 0;
            }

            $d_clients = array(
                            'title'   => $this->input->post('title'),
                            'type'   => $type
                            );

            if(isset($_POST['id']) && $_POST['id'] != 0){
                $id = $this->input->post('id');
                $this->admin_m->update($d_clients,$id,'id','our_clients');
            }else{               

                $id = $this->admin_m->insert($d_clients, 'our_clients');
            }

            

            if ($_FILES['photo']['name'] != '') {

                $up_load = $this->admin_m->up_image($_FILES['photo'],'250','150','100');

                $action = array(
                    'image'   => $up_load['image'],
                    'thumb'   => $up_load['thumb'],
                );

                $this->admin_m->update($action,$id,'id','our_clients');
            }


            redirect(base_url('dashboard/our_clients'));

        }
    }

	public function delete($id){

		$this->admin_m->delete($id,'id','our_clients');		
		redirect(base_url('dashboard/our_clients'));

	}



}

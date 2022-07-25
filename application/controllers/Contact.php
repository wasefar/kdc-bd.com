<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

	public function index() {
        $data = array();


        $contact = contact_info();

        $this->load->library('googlemaps');

        $config['center'] = $contact->map_center;
        $config['zoom'] = '15';
        $config['height'] = '200px';
        $config['apiKey'] = 'AIzaSyBk7Ku6P71MVROfpkePHQww0DJABj20m5A';

        $config['styles'] = array(
          array("name"=>"Red Parks", "definition"=>array(
            array("featureType"=>"all", "stylers"=>array(array("saturation"=>"-30"))),
            array("featureType"=>"poi.park", "stylers"=>array(array("saturation"=>"10"), array("hue"=>"#990000")))
          )),
          array("name"=>"Black Roads", "definition"=>array(
            array("featureType"=>"all", "stylers"=>array(array("saturation"=>"-70"))),
            array("featureType"=>"road.arterial", "elementType"=>"geometry", "stylers"=>array(array("hue"=>"#000000")))
          )),
          array("name"=>"No Businesses", "definition"=>array(
            array("featureType"=>"poi.business", "elementType"=>"labels", "stylers"=>array(array("visibility"=>"off")))
          ))
        );
        $config['stylesAsMapTypes'] = true;
        $config['stylesAsMapTypesDefault'] = "Black Roads";


        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = $contact->map_lat_lang;
        $this->googlemaps->add_marker($marker);
		
		/**
		$marker = array();
		$marker['position'] = '25.742905, 89.271988';
		$marker['draggable'] = TRUE;
		$marker['animation'] = 'DROP';
		$this->googlemaps->add_marker($marker);
		**/
		
		
        $data['map'] = $this->googlemaps->create_map();





        $data['page'] = "Contact";
        $data['title'] = "Contact Us";
        $data['page_title'] = "Contact Us";
        $data['contact'] = $contact;
        $data['main_content'] = $this->load->view('contact', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function n(){
        
        
        $contact_info = contact_info();
        
        echo "<pre>";
        print_r($contact_info);
        
        echo $contact_info->contact_mail;
    }
    
    public function m(){
        
        
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['message'] = $this->input->post('message');

        $message = $this->load->view('mail/contact_mail',$data,true);
        
        
        $contact_info = contact_info();
        
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->from('info@kdc-bd.com', $data['name']);
        //$this->email->to('rubyat.ais@gmail.com, rubyat000@gmail.com');
        //$this->email->to('me@rubyat.info');
        $this->email->to($contact_info->contact_email);
        $this->email->subject('KDC-BD  :: Contact Form');
        $this->email->message($message);
        $this->email->send();
        
        echo json_encode(array('success' => 'Mail sent','message' => $contact_info->success_message));
        
        //echo 'sent';
    }
    



    public function sendm(){

        if($_POST){
            
            $data = array();
            $contact_info = $this->common_m->contact_info();

            $data['name'] = $this->input->post('name');
            $data['subject'] = $this->input->post('subject');
            $data['email'] = $this->input->post('email');
            $data['message'] = $this->input->post('message');

            $message = $this->load->view('mail/contact_mail',$data,true);

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->from($data['email'], $data['name']);
            $this->email->to($contact_info->contact_mail);
            //$this->email->to('rubyat.ais@gmail.com');
            $this->email->subject('Winforce BD  :: '. $data['subject']);
            $this->email->message($message);
            $this->email->send();
            

            //echo $message;

            echo 'Success';
            
            
        
        }

    }
}

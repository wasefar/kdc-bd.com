<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header( 'Access-Control-Allow-Headers: Authorization, Content-Type' );
header("Access-Control-Allow-Origin: *");


// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */

class Api extends CI_Controller {

	function __construct(){
        parent::__construct(); 
        $this->load->model('common_m');
    }

	public function index(){
        $data = array();
        
		
		$sliders_s = $this->common_m->home_page_slider();
		foreach($sliders_s as $key => $sc){
			$sliders_s[$key]['image'] = base_url($sc['image']);
			$sliders_s[$key]['thumb'] = base_url($sc['thumb']);
		}
		$json['slider'] = $sliders_s;

		
		$recent_projects = $this->common_m->recent_projects();
		foreach($recent_projects as $key => $fp){
			$recent_projects[$key]['image'] = base_url($fp['image']);
			$recent_projects[$key]['thumb'] = base_url($fp['thumb']);
		}
		$json['projects'] = $recent_projects;

		
		$promo_text = $this->common_m->promo_text();
		foreach($promo_text as $key => $fp){
			$promo_text[$key]['image'] = base_url($fp['image']);
			$promo_text[$key]['thumb'] = base_url($fp['thumb']);
		}
		$json['promo_text'] = $promo_text;

		
		$team = $this->common_m->team();
		foreach($team as $key => $fp){
			$team[$key]['image'] = base_url($fp['image']);
			$team[$key]['thumb'] = base_url($fp['thumb']);
		}
		$json['team'] = $team;
		
		$recent_blog = $this->common_m->recent_blog();
		foreach($recent_blog as $key => $fp){
			$recent_blog[$key]['image'] = base_url($fp['image']);
			$recent_blog[$key]['thumb'] = base_url($fp['thumb']);
		}
		$json['blog'] = $recent_blog;
		
		
		
        $testimonials = $this->common_m->testimonial();
		foreach($testimonials as $key => $fp){
			$testimonials[$key]['image'] = base_url($fp['image']);
			$testimonials[$key]['thumb'] = base_url($fp['thumb']);
		}
		$json['testimonials'] = $testimonials;
		
		
        $our_clients = $this->common_m->our_clients();
		foreach($our_clients as $key => $fp){
			$our_clients[$key]['image'] = base_url($fp['image']);
			$our_clients[$key]['thumb'] = base_url($fp['thumb']);
		}
		$json['our_clients'] = $our_clients;
		
		
		$settings = contact_info();
		$json['logo'] = base_url($settings->logo);
		$json['mobile_menu_banner'] = base_url($settings->mobile_menu_banner);
		$json['about_us_img'] = base_url($settings->about_us_img);
		$json['testimonial_bg'] = 'http://www.kdc-bd.com/assets/images/background/bg2.jpg';
		
		
		$json['about_title'] = get_custom_block('home_about','title');
		$json['about_content'] = get_custom_block('home_about','content');
		
		
		header('Content-Type: application/json');
		echo json_encode($json);
	}

	public function services(){

        $services = $this->common_m->services();
		foreach($services as $key => $fp){
			$services[$key]['image'] = base_url($fp['image']);
			$services[$key]['thumb'] = base_url($fp['thumb']);
		}
		$json['services'] = $services;
		
		header('Content-Type: application/json');
		echo json_encode($json);
	}

	public function projects(){

        $projects = $this->common_m->projects(false);
		foreach($projects as $key => $fp){
			$projects[$key]['image'] = base_url($fp['image']);
			$projects[$key]['thumb'] = base_url($fp['thumb']);
		}
		$json['projects'] = $projects;
		
		header('Content-Type: application/json');
		echo json_encode($json);
	}

	public function blog(){

        $blog = $this->common_m->blog();
		foreach($blog as $key => $fp){
			$blog[$key]['image'] = base_url($fp['image']);
			$blog[$key]['thumb'] = base_url($fp['thumb']);
		}
		$json['blog'] = $blog;
		
		header('Content-Type: application/json');
		echo json_encode($json);
	}

	public function team(){

        $team = $this->common_m->team();
		foreach($team as $key => $fp){
			$team[$key]['image'] = base_url($fp['image']);
			$team[$key]['thumb'] = base_url($fp['thumb']);
		}
		$json['team'] = $team;
		
		header('Content-Type: application/json');
		echo json_encode($json);
	}

	public function about_us(){

        $page = $this->common_m->page_single('about_us');
		
		$json['title'] = $page->title;
		$json['details'] = $page->details;
		$json['image'] = base_url('assets/images/banner/all.jpg');
		
		header('Content-Type: application/json');
		echo json_encode($json);
	}

	
    


    

}

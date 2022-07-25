<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if(!function_exists('check_admin_login')){
    function check_admin_login(){        
        $ci = get_instance();        
        $ci->load->library('ion_auth');
        $ci->lang->load('auth');
        if(!$ci->ion_auth->logged_in()) {
            $ci->ion_auth->logout();
            //redirect them to the login page
            redirect(base_url('auth/login'), 'refresh');
            die();
        } 

    }
}

if(!function_exists('check_user_login')){
    function check_user_login(){        
        $ci = get_instance();
        if($ci->session->userdata('user_login') != true){
            redirect(base_url('login/logout'));
        }
        
    }
}


if(!function_exists('get_custom_block')){
    function get_custom_block($slug,$field){        
        $ci = get_instance();        
        $ci->load->model('common_m');
        $option_r = $ci->common_m->get_custom_block($slug);

        if(count($option_r) == 1){
            return $option_r['0'][$field]; 
        }
               
    }
}


if(!function_exists('contact_info')){
    function contact_info(){        
        $ci = get_instance();        
        $ci->load->model('common_m');
        $option_r = $ci->common_m->getSettings();

        return $option_r;
               
    }
}

if(!function_exists('notice')){
    function notice(){        
        $ci = get_instance();        
        $ci->load->model('common_m');
        $option_r = $ci->common_m->notice();

        return $option_r;
               
    }
}

if(!function_exists('services')){
    function services(){        
        $ci = get_instance();        
        $ci->load->model('common_m');
        $option_r = $ci->common_m->services();

        return $option_r;
               
    }
}

if(!function_exists('projects')){
    function projects(){        
        $ci = get_instance();        
        $ci->load->model('common_m');
        $option_r = $ci->common_m->projects(false);

        return $option_r;
               
    }
}

if(!function_exists('career')){
    function career(){        
        $ci = get_instance();        
        $ci->load->model('common_m');
        $option_r = $ci->common_m->career();

        return $option_r;
               
    }
}

if(!function_exists('training')){
    function training(){        
        $ci = get_instance();        
        $ci->load->model('common_m');
        $option_r = $ci->common_m->training();

        return $option_r;
               
    }
}

if(!function_exists('parent_page')){
    function parent_page(){        
        $ci = get_instance();        
        $ci->load->model('common_m');
        $option_r = $ci->common_m->parent_page();

        return $option_r;
               
    }
}

if(!function_exists('date_now')){
    function date_now(){        

        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $date_time = $dt->format('Y-m-d H:i:s');      
        
        return $date_time;
    }
}


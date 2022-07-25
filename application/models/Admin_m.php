<?php
class Admin_m extends CI_Model{ 

    function validate_admin(){            
            
        $this->db->select('*');
        $this->db->from('administrator');
        $this->db->where('admin_username', $this->input->post('email')); 
        $this->db->where('admin_password', md5($this->input->post('password')));
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1){                 
            return $query->result();
        }
        else{
            return false;
        }
    }


    function dash(){

        $this->db->select();
        $this->db->select('(SELECT count(home_page_slider.slider_id) 
                            FROM home_page_slider) 
                            AS total_slider' , TRUE);
        $this->db->select('(SELECT count(services.id) 
                            FROM services) 
                            AS total_services' , TRUE);
        $this->db->select('(SELECT count(projects.id) 
                            FROM projects) 
                            AS total_projects' , TRUE);
        $this->db->select('(SELECT count(custom_blocks.id) 
                            FROM custom_blocks) 
                            AS total_custom_blocks' , TRUE);
        $this->db->select('(SELECT count(pages.id) 
                            FROM pages) 
                            AS total_pages' , TRUE);
        $this->db->select('(SELECT count(our_clients.id) 
                            FROM our_clients) 
                            AS total_our_clients' , TRUE);
        $this->db->select('(SELECT count(projects.id) 
                            FROM projects) 
                            AS total_projects' , TRUE);
        $this->db->select('(SELECT count(settings.id) 
                            FROM settings) 
                            AS total_settings' , TRUE);
        $this->db->select('(SELECT count(blog.id) 
                            FROM blog) 
                            AS total_blog' , TRUE);
        $this->db->select('(SELECT count(notice.id) 
                            FROM notice) 
                            AS total_notice' , TRUE);
        $this->db->select('(SELECT count(promo_text.id) 
                            FROM promo_text) 
                            AS total_promo_text' , TRUE);
        $this->db->select('(SELECT count(testimonial.id) 
                            FROM testimonial) 
                            AS total_testimonial' , TRUE);
        $this->db->select('(SELECT count(team.id) 
                            FROM team) 
                            AS total_team' , TRUE);
        $this->db->select('(SELECT count(gallery.id) 
                            FROM gallery) 
                            AS total_gallery' , TRUE);
        $this->db->select('(SELECT count(career.id) 
                            FROM career) 
                            AS total_career' , TRUE);
        $this->db->select('(SELECT count(training.id) 
                            FROM training) 
                            AS total_training' , TRUE);

        $this->db->from('settings');
        $this->db->limit(1);
        //$this->db->order_by('occupations_list_id','DESC');
        //$this->db->where('occupations_list_status',1);
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

    public function admin_order(){
        $this->db->select('co.*');
        $this->db->select('pr.title');
        $this->db->select('cu.first_name');
        $this->db->select('cu.last_name');
        $this->db->select('(SELECT message.message 
                            FROM message 
                            WHERE message.order_id = co.id 
                            ORDER BY message.id DESC
                            LIMIT 1
                            ) 
                            AS last_message' , TRUE);
        $this->db->from('customer_order co');
        $this->db->join('pricing pr','pr.id = co.package_id','LEFT');
        $this->db->join('customers cu','cu.id = co.user_id','LEFT');
        //$this->db->where('md5(co.user_id)', $user_id); 
        $this->db->order_by('co.id','DESC');
        //$this->db->limit(1);
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

    public function admin_order_single($order_id){
        $this->db->select('co.*');
        $this->db->select('pr.title');
        $this->db->select('cu.first_name');
        $this->db->select('cu.last_name');
        $this->db->select('(SELECT message.message 
                            FROM message 
                            WHERE message.order_id = co.id 
                            ORDER BY message.id DESC
                            LIMIT 1
                            ) 
                            AS last_message' , TRUE);
        $this->db->from('customer_order co');
        $this->db->join('pricing pr','pr.id = co.package_id','LEFT');
        $this->db->join('customers cu','cu.id = co.user_id','LEFT');
        $this->db->where('md5(co.id)', $order_id); 
        $this->db->order_by('co.id','DESC');
        $this->db->limit(1);
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }



	function select($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('id','DESC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 


    function home_page_slider(){
        $this->db->select();
        $this->db->from('home_page_slider');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    function home_page_slider_single($id){
        $this->db->select();
        $this->db->from('home_page_slider');
        $this->db->where('slider_id',$id);
        $this->db->order_by('slider_id','DESC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    
    function blog(){
        $this->db->select();
        $this->db->from('blog');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function blog_single($id){
        $this->db->select();
        $this->db->from('blog');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    
    function notice(){
        $this->db->select();
        $this->db->from('notice');
        $this->db->order_by('row_order','ASC'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function notice_single($id){
        $this->db->select();
        $this->db->from('notice');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    
    function services(){
        $this->db->select();
        $this->db->from('services');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function service_single($id){
        $this->db->select();
        $this->db->from('services');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    
    function testimonial(){
        $this->db->select();
        $this->db->from('testimonial');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function testimonial_single($id){
        $this->db->select();
        $this->db->from('testimonial');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    
    function team(){
        $this->db->select();
        $this->db->from('team');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function team_single($id){
        $this->db->select();
        $this->db->from('team');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function what_can_we_do(){
        $this->db->select();
        $this->db->from('what_can_we_do');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function single_project_img($id){
        $this->db->select();
        $this->db->from('project_gallery');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }
    
    function service_by_id($id){
        $this->db->select();
        $this->db->from('services');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }   
    
    function projects(){
        $this->db->select();
        $this->db->from('projects');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function product_catagroy(){
        $this->db->select();
        $this->db->from('product_catagroy');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function products(){
        $this->db->select();
        $this->db->from('product');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function project_single($id){
        $this->db->select();
        $this->db->from('projects');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

     function product_catagroy_single($id){
        $this->db->select();
        $this->db->from('product_catagroy');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

     function products_single($id){
        $this->db->select();
        $this->db->from('product');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function project_by_id($id){
        $this->db->select();
        $this->db->from('projects');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }
    
    function project_gallery($id){
        $this->db->select();
        $this->db->from('project_gallery');
        $this->db->where('project_id',$id);
        $this->db->order_by('id','DESC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	
    
    function popup_single($id){
        $this->db->select();
        $this->db->from('popup');
        $this->db->where('id',$id); 
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }
    
    function gallery($id){
        $this->db->select();
        $this->db->from('gallery');
        $this->db->where('service_id',$id);
        $this->db->order_by('id','DESC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function gallery_n(){
        $this->db->select();
        $this->db->from('gallery');
        $this->db->order_by('row_order','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function product_by_id($id){
        $this->db->select();
        $this->db->from('products');
        $this->db->where('id',$id);
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }
    
    function product_gallery($id){
        $this->db->select();
        $this->db->from('product_gallery');
        $this->db->where('product_id',$id);
        $this->db->order_by('id','DESC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function career(){
        $this->db->select();
        $this->db->from('career');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function career_single($id){
        $this->db->select();
        $this->db->from('career');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function training(){
        $this->db->select();
        $this->db->from('training');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function training_single($id){
        $this->db->select();
        $this->db->from('training');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    
    function promo_text(){
        $this->db->select();
        $this->db->from('promo_text');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function our_clients(){
        $this->db->select();
        $this->db->from('our_clients');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function our_mechine(){
        $this->db->select();
        $this->db->from('our_mechine');
        $this->db->order_by('row_order','ASC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    

    


    
    function custom_blocks(){
        $this->db->select();
        $this->db->from('custom_blocks');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function custom_blocks_signal($id){
        $this->db->select();
        $this->db->from('custom_blocks');
        $this->db->where('id',$id);
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function pages(){
        $this->db->select();
        $this->db->from('pages');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function page_single($id){
        $this->db->select();
        $this->db->from('pages');
        $this->db->where('id',$id);
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function update_custom_block($action,$id){
        $this->db->where('id',$id);
        $this->db->update('custom_blocks',$action);
    }
    

    
    function contact_info(){
        $this->db->select();
        $this->db->from('contact_settings');
        $this->db->limit(1);
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    
    
    
    function settings(){
        $this->db->select();
        $this->db->from('settings');
        $this->db->order_by('row_order','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    
    function getSettings(){
        $seo = array();
        $result=$this->settings();
        foreach($result as $item){
            $seo[$item['node']]=$item['content'];
        }
        return $seo;
        
    }


    
    function save_settings(){
        $content=$this->input->post('content');
        foreach($content as $key=>$value){
            $data['content'] =stripslashes($value);
            $this->db->where('id', $key);
            $this->db->update('settings', $data); 
        }
        
    }

    function insert($data,$table){
        $this->db->insert($table,$data);        
        return $this->db->insert_id();
    }

    function update($action,$id,$field,$table){
        $this->db->where($field,$id);
        $this->db->update($table,$action);
    }
    
    function update_page($action,$id){
        $this->db->where('page_id',$id);
        $this->db->update('pages',$action);
    }

    function edit_option($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 
    
    function delete($id,$field,$table){
        $this->db->delete($table, array($field => $id));
        return;
    }




    


    public function up_image($files,$max_size = 1440,$thumb_size_x = 150,$thumb_size_y = 150,$crop = NULL){


        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        set_time_limit ( -1);
        ini_set('memory_limit', -1);
        ini_set('upload_max_filesize', '10M');

        $image = array();

        include_once(APPPATH . 'third_party/class.upload.php');
        //$foo = new Upload($files); 
        $foo = new \Verot\Upload\Upload($files);
        if ($foo->uploaded) {
           // save uploaded image with no changes
           
           $path_real  = realpath(APPPATH . '../uploads/real');
           $path_img   = realpath(APPPATH . '../uploads/medium');
           $path_thumb = realpath(APPPATH . '../uploads/thumbnail');

           $foo->file_new_name_body = uniqid('kdc_');
           $foo->Process($path_real);
           if ($foo->processed) {
             $filename = $foo->file_dst_name;
             //echo 'original image copied'.$filename;
           } else {
             echo 'error : ' . $foo->error;
           }


           // save uploaded image with a new name
           $foo->file_new_name_body = uniqid('kdc_');
           $foo->image_resize = true;
           $foo->image_x = $max_size;
           $foo->image_ratio_y = true;
           $foo->Process($path_img);
           if ($foo->processed) {
             $filename = $foo->file_dst_name;
             //echo 'image renamed "foo" copied'.$filename;

             $image['image'] = 'uploads/medium/'.$filename;

           } else {
             echo 'error : ' . $foo->error;
           }   


           // save uploaded image with a new name,
           // resized to 100px wide
           $foo->file_new_name_body = uniqid('kdc_');


           $foo->image_resize           = true;            
           if($crop == 'crop'){
                $foo->image_ratio_crop       = true;
           }else{
                $foo->image_ratio_fill       = true;
           }
           

           $foo->image_x                = $thumb_size_x;
           $foo->image_y                = $thumb_size_y;



           $foo->Process($path_thumb);


           if ($foo->processed) {
             $filename = $foo->file_dst_name;
             //echo 'image renamed, resized x=100 and converted to GIF'.$filename;

             $image['thumb'] = 'uploads/thumbnail/'.$filename;

             $foo->Clean();
           } else {
             echo 'error : ' . $foo->error;
           } 

           return $image;
        }
    }
    
    public function up_settings_image($files,$thumb_size_x = 150,$thumb_size_y = 150,$crop = NULL){

        $image = array();

        include_once(APPPATH . 'third_party/class.upload.php');
        //$foo = new Upload($files); 
        $foo = new \Verot\Upload\Upload($files);
        if ($foo->uploaded) {
           // save uploaded image with no changes
           
           $path_real  = realpath(APPPATH . '../uploads/real');
           $path_img   = realpath(APPPATH . '../uploads/medium');
           $path_thumb = realpath(APPPATH . '../uploads/thumbnail');

           $foo->file_new_name_body = uniqid('kdc_');
           $foo->Process($path_real);
           if ($foo->processed) {
             $filename = $foo->file_dst_name;
             //echo 'original image copied'.$filename;
           } else {
             echo 'error : ' . $foo->error;
           } 


           // save uploaded image with a new name,
           // resized to 100px wide
           $foo->file_new_name_body = uniqid('kdc_');

           $foo->image_resize           = true;            
           if($crop == 'crop'){
                $foo->image_ratio_crop       = true;
           }else{
                $foo->image_ratio_fill       = true;
           }
           

           $foo->image_x                = $thumb_size_x;
           $foo->image_y                = $thumb_size_y;



           $foo->Process($path_thumb);


           if ($foo->processed) {
             $filename = $foo->file_dst_name;
             //echo 'image renamed, resized x=100 and converted to GIF'.$filename;

             $image['thumb'] = 'uploads/thumbnail/'.$filename;

             $foo->Clean();
           } else {
             echo 'error : ' . $foo->error;
           } 


           return $image;
        }
    }

    public function up_file($files){

        set_time_limit ( -1);
        ini_set('memory_limit', '2048M');

        $image = array();

        include_once(APPPATH . 'third_party/class.upload.php');
        //$foo = new Upload($files); 
        $foo = new \Verot\Upload\Upload($files);
        if ($foo->uploaded) {
           // save uploaded image with no changes
           
           $path_real  = realpath(APPPATH . '../uploads');

           $foo->file_new_name_body = uniqid(url_title($this->input->post('title')));
           $foo->Process($path_real);
           if ($foo->processed) {
             $filename = $foo->file_dst_name;
             //echo 'original image copied'.$filename;
           } else {
             echo 'error : ' . $foo->error;
           }

           return $filename;
        }
    }






}
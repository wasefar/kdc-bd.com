<?php
class Common_m extends CI_Model{
    
  function select($table){
    $this->db->select();
    $this->db->from($table);
    $this->db->order_by('id', 'DESC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
  function home_page_slider(){
    $this->db->select();
    $this->db->from('home_page_slider');
    $this->db->limit(6);
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
  function testimonial(){
    $this->db->select();
    $this->db->from('testimonial');
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
  function team($limit = null){
    $this->db->select();
    $this->db->from('team');
      
    if ($limit){
      $this->db->limit($limit);
    }
      
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
    

  function product_catagroy($limit = null){
    $this->db->select();
    $this->db->from('product_catagroy');
      
    if ($limit){
      $this->db->limit($limit);
    }
      
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }

  function products($catagroy_id){
    $this->db->select();
    $this->db->from('product');
    $this->db->where('catagroy_id', $catagroy_id);
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }

   function all_products(){
    $this->db->select();
    $this->db->from('product');
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
    
    
  function team_by_id($id){
    $this->db->select();
    $this->db->from('team');
    $this->db->where('id', $id);
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }

    function product_catagroy_by_id($id){
    $this->db->select();
    $this->db->from('product_catagroy');
    $this->db->where('id', $id);
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }
    
  function services($limit = null){
    $this->db->select();
    $this->db->from('services');
    if ($limit){
      $this->db->limit($limit);
    }
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
  function blog(){
    $this->db->select();
    $this->db->from('blog');
    $this->db->order_by('id', 'DESC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
    
  function blog_by_id($id){
    $this->db->select();
    $this->db->from('blog');
    $this->db->where('id', $id);
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }
    
    
  function blog_by_url($url){
    $this->db->select();
    $this->db->from('blog');
    $this->db->where('url', $url);
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }
    
  function career(){
    $this->db->select();
    $this->db->from('career');
    $this->db->where('status', 1);
    $this->db->order_by('id', 'DESC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
    
  function career_by_url($id){
    $this->db->select();
    $this->db->from('career');
    $this->db->where('id', $id);
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }
    
  function training(){
    $this->db->select();
    $this->db->from('training');
    $this->db->where('status', 1);
    $this->db->order_by('id', 'DESC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
    
  function training_by_url($id){
    $this->db->select();
    $this->db->from('training');
    $this->db->where('id', $id);
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }
    
  function notice(){
    $this->db->select();
    $this->db->from('notice');
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
  function projects($status){
    $this->db->select();
    $this->db->from('projects');
    if (!empty($status)){
      $this->db->where('status', $status);
    }
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
    
  function project_by_url($url){
    $this->db->select();
    $this->db->from('projects');
    $this->db->where('url', $url);
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }
    
  function featured_projects(){
    $this->db->select();
    $this->db->from('projects');
    $this->db->where('status', 1);
    $this->db->limit(8);
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    $this->db->select();
    $this->db->from('projects');
    $this->db->where('status', 2);
    $this->db->limit(8);
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query2   = $this->db->get();
    $query2   = $query2->result_array();
    $projects = array_merge($query, $query2);
    //$projects = array_multisort(array_column($projects, 'row_order'), SORT_DESC, $projects);
    return $projects;
  }
    
  function recent_projects(){
    $this->db->select();
    $this->db->from('projects');
    $this->db->limit(5);
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
  function recent_blog(){
    $this->db->select();
    $this->db->from('blog');
    $this->db->limit(3);
    $this->db->order_by('id', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
  function home_notice(){
    $this->db->select();
    $this->db->from('notice');
    $this->db->limit(1);
    $this->db->order_by('id', 'ASC');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
  function home_popup(){
    $this->db->select();
    $this->db->from('popup');
    $this->db->limit(1);
    $this->db->where('id', 1);
    $this->db->where('status', 1);
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }

    
  function what_can_we_do(){
    $this->db->select();
    $this->db->from('what_can_we_do');
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
    
  function promo_text(){
    $this->db->select();
    $this->db->from('promo_text');
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
  function gallery_all(){
    $this->db->select();
    $this->db->from('gallery');
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  function product_all()
  {
    $this->db->select();
    $this->db->from('product_gallery');
    $this->db->order_by('id', 'DESC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
    
  function service_by_url($url){
    $this->db->select();
    $this->db->from('services');
    $this->db->where('url', $url);
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }
    
  function gallery_by_service($id){
    $this->db->select();
    $this->db->from('gallery');
    $this->db->where('service_id', $id);
    $this->db->order_by('id', 'DESC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  function gallery_by_project($id)
  {
    $this->db->select();
    $this->db->from('project_gallery');
    $this->db->where('project_id', $id);
    $this->db->order_by('id', 'DESC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  function faq()
  {
    $this->db->select();
    $this->db->from('faq');
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  function our_skills()
  {
    $this->db->select();
    $this->db->from('our_skills');
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  function pricing()
  {
    $this->db->select();
    $this->db->from('pricing');
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  function single_price($id)
  {
    $this->db->select();
    $this->db->from('pricing');
    $this->db->where('id', $id);
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }
  function our_clients()
  {
    $this->db->select();
    $this->db->from('our_clients');
    $this->db->order_by('row_order', 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  function option_select($table, $field)
  {
    $this->db->select();
    $this->db->from($table);
    $this->db->order_by($field, 'ASC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  function contact_info(){
    $this->db->select();
    $this->db->from('contact_settings');
    $this->db->limit(1);
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }

    
    
    function getSettings(){
        $seo = new stdClass();
        $result = $this->db->order_by('type')->get('settings')->result_array();;
        foreach($result as $item){
            $node = $item['node'];
            $seo->$node = $item['content'];
        }
        return $seo;
        
    }
    
  function get_custom_block($slug)
  {
    $this->db->select();
    $this->db->from('custom_blocks');
    $this->db->where('slug', $slug);
    $this->db->limit(1);
    //$this->db->order_by('occupations_list_id','DESC');
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  function page_single($slug)
  {
    $this->db->select();
    $this->db->from('pages');
    $this->db->where('slug', $slug);
    $this->db->limit(1);
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->row();
    return $query;
  }
  function parent_page()
  {
    $this->db->select();
    $this->db->from('pages');
    $this->db->where('sub_page', 1);
    $this->db->query('SET SQL_BIG_SELECTS=1');
    $query = $this->db->get();
    $query = $query->result_array();
    return $query;
  }
  function insert($data, $table)
  {
    $this->db->insert($table, $data);
    return $this->db->insert_id();
  }
  function update($action, $id, $field, $table)
  {
    $this->db->where($field, $id);
    $this->db->update($table, $action);
  }
  function update_tranaction($action, $id, $table)
  {
    $this->db->where('md5(id)', $id);
    $this->db->update($table, $action);
  }
}
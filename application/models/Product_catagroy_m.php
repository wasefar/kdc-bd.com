<?php
class Product_catagroy_m extends CI_Model{ 
    
    public function select(){

        $this->db->select('*');
        $this->db->from('product_catagroy');
        $this->db->order_by('row_order','ASC'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    public function single($id){
       
        $this->db->select('*');
        $this->db->from('product_catagroy');
        $this->db->where('id',$id);
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query_result = $this->db->get();
        $result = $query_result->row();
        // $query = $query->result_array();
        return $result;
    }

      public function get_slug($slug){

        $this->db->select('*');
        $this->db->from('product_catagroy');
        $this->db->where('url',urldecode($slug));
        $query2 = $this->db->get();
        $query2 = $query2->row();  
        return $query2;

    }
    
    
}
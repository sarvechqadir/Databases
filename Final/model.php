<?php 

class model extends extends CI_modelS
public function get_prod(){
    $this->db->select('*')
    $this->db->from('products')
    $this->db->get();

   return $query_result();
}
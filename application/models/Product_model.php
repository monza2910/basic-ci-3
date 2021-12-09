<?php
class Product_model extends CI_model{

    public function getAll(){
        return $this->db->get('product')->result_array();
    }
}
<?php

class Product extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Product_model');

    }
    public function index(){
        $data['title']      = 'Product';
        $data['products']    = $this->Product_model->getAll();
        $this->load->view('partials/header',$data);
        $this->load->view('partials/sidebar');
        $this->load->view('admin/product/index',$data);
        $this->load->view('partials/footer');
    }
} 
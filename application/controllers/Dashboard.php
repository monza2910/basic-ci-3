<?php

class Dashboard extends CI_Controller{
    
    public function index(){
        $this->load->view('partials/header');
        $this->load->view('admin/dashboard/index');
        $this->load->view('partials/footer');
    }
}
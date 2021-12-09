<?php

class Dashboard extends CI_Controller{
    
    public function index(){
        $data['title'] = "Dashboard";
        $this->load->view('partials/header',$data);
        $this->load->view('partials/sidebar');
        $this->load->view('admin/dashboard/index');
        $this->load->view('partials/footer');
    }
}
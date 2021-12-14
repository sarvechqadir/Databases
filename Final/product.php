<?php

class product extends CI_Controller{
    public function index(){
    }
    $data['products'] = $this->model->get_prod();
    }
    $data['main_content'] = 'products';
    $this->load->view('layouts/main', $data);

}
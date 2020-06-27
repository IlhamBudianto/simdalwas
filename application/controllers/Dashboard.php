<?php
class Dashboard extends CI_Controller{

 
  public function __construct() {
    parent::__construct();
      if(!$this->session->has_userdata('id')) {
          redirect('login');
      }
  }
  
  function index(){
    $this->load->view('includes/header');
    $this->load->view('includes/menu');
    $this->load->view('dashboard');
    $this->load->view('includes/footer');

  }

}
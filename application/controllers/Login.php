<?php
class Login extends CI_Controller{

 
function __construct(){
  parent::__construct();
  $this->load->model('mlogin');

    }
  function index(){
    if($this->input->post('id')){
      $id = $this->input->post('id');
      $password = $this->input->post('password');
      $berhasil = $this->mlogin->login($id,md5($password));
      if($berhasil == 1){
          $this->session->set_userdata('id', $id);
          redirect('dashboard');
      } else {
        $this->load->view('login');
      }
      
    }else{
        $this->load->view('login');
    }
  }

  public function logout() {
    if($this->session->has_userdata('id')) {
      $this->session->unset_userdata('id');
    }
    redirect('login');
  }

}
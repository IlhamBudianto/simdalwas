<?php
class Logout extends CI_Controller{




function logout() {
    if($this->session->has_userdata('id')) {
      $this->session->unset_userdata('id');
    }
    redirect('login');
 }
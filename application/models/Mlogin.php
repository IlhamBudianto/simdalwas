<?php
class Mlogin extends CI_Model{

function login($id,$password){
  $periksa = $this->db->get_where('login',array('username'=>$id,'password'=> $password));
  if($periksa->num_rows()>0){
    return 1;
  }else{
    return 0;
  }
}
}
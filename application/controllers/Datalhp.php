<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datalhp extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	    if(!$this->session->has_userdata('id')) {
      		redirect('login');
    	}
		$this->load->model('mlhp');
	}

	public function index(){
		
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('datalhp/index');
		$this->load->view('includes/footer');
	}

	public function tambah(){
		
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('datalhp/input');
		$this->load->view('includes/footer');
	}

}
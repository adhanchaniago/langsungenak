<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	
	public function authentication(){
		if ($this->session->userdata('login')!='admin') {
			redirect('admin/login');
		}
	}

	public function page($page){
		$this->authentication();
		switch($page){
			case 'dashboard': $this->load->view('admin/dashboard');break;
		}
		
	}




}
<?php

class C_admin extends CI_Controller {
    public function __construct()
    {
		 parent::__construct();
		 $this->load->library('session');
		 if($this->session->userdata('masuk') != "login"){
			$this->session->set_flashdata('data','Anda Harus Login Terlebih Dahulu'); 
			redirect('login');
		}
	}

	public function Index()
	{

	$data = [
		"active_controller" => "Dashboard",
		"active_function" => "Home"
	];
		$this->load->helper('url'); 
        $this->load->view("admin/overview", $data);
	}
}
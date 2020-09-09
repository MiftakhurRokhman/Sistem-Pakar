<?php

class C_probabilitas extends CI_Controller {
    public function __construct()
    {
		 parent::__construct();
		 $this->load->library('session');
		 $this->load->model('M_probabilitas');
		if($this->session->userdata('masuk') != "login"){
			$this->session->set_flashdata('data','Anda Harus Login Terlebih Dahulu'); 
			redirect('login');
		}
	}

	public function Index()
	{

	$data = [
		"active_controller" => "DataTraning",
		"active_function" => "V_probabilitas"
	];
		$data['namaatribut'] = $this->M_probabilitas->tampil_data_nama();
		$data['nilaiatribut'] = $this->M_probabilitas->tampil_data_nilai();
		$data['atributjoin2'] = $this->M_probabilitas->tampil_data_join2();	
		$data['konsentrasi'] = $this->M_probabilitas->konsentrasi();
		$data['datatraning'] = $this->M_probabilitas->data_traning();
		$data['probabilitas'] = $this->M_probabilitas->itung_probabilitas();
		$data['konsentrasi2'] = $this->M_probabilitas->probabilitas_konsentstrasi();
        $this->load->view("admin/overview", $data);
	}


}
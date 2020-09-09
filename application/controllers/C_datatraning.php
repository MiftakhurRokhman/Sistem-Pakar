<?php

class C_datatraning extends CI_Controller {
    public function __construct()
    {
		 parent::__construct();
		 $this->load->model('M_datatraning');
		 $this->load->model('M_inputdatatraning');
		 $this->load->model('M_probabilitas');
		 $this->load->model('M_nilaiatribut');
		 $this->load->library('session');
		 
		if($this->session->userdata('masuk') != "login"){
			$this->session->set_flashdata('data','Anda Harus Login Terlebih Dahulu'); 
			redirect('login');
		}
	}

	public function Index()
	{

	$data = [
		"active_controller" => "DataTraning",
		"active_function" => "V_Datatraning"
		];

		$data['datatraning'] = $this->M_datatraning->tampil_nilai()->result();
		$data['atribut'] = $this->M_datatraning->tampil_kriteria()->result();
		$this->load->helper('url'); 
        $this->load->view("admin/overview", $data);
	}
	

	function hapus($id_datatraning){
		$where = array('id_datatraning' => $id_datatraning);
		$this->M_datatraning->hapus_data($where,'tbl_datatraning');
		$this->session->set_flashdata('data','Data Traning Berhasil Dihapus'); 
		redirect('datatraning');
	}

	

}
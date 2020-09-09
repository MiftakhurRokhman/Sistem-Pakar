<?php

class C_atribut extends CI_Controller {
    public function __construct()
    {
		 parent::__construct();
			$this->load->library('session');
			if($this->session->userdata('masuk') != "login"){
			$this->session->set_flashdata('data','Anda Harus Login Terlebih Dahulu'); 
			redirect('login');
		}
			$this->load->model('M_atribut');
			$this->load->library('form_validation');
	
	}

	public function Index()
	{
		
	$data = [
		"active_controller" => "DataMaster",
		"active_function" => "V_Atribut"
	];
		$data['atribut'] = $this->M_atribut->tampil_data()->result();
		$data['kode'] = $this->M_atribut->kode();
		$this->load->view("admin/overview", $data);
	}


	function tambah_aksi(){
		$this->form_validation->set_rules('nama_atribut','Nama Atribut','required');
		if($this->form_validation->run() != false){
			echo "Form validation oke";

			$kode = $this->input->post('kode_atribut');
			$nama = $this->input->post('nama_atribut');
			$status = $this->input->post('status_atribut');
	
			$data = array(
				'id_atribut' => $kode,
				'nama_atribut' => $nama,
				'status_atribut' => $status
				);
			$this->M_atribut->input_data($data,'tbl_atribut');
			$this->session->set_flashdata('data','Data Berhasil Ditambah'); 
			redirect('atribut');
		}else{	
		$this->Index();
		$this->session->set_flashdata('error','Kolom Nama Atribut tidak boleh kosong'); 
		}	
		
	}

	function hapus($id_atribut){
		$where = array('id_atribut' => $id_atribut);
		$this->M_atribut->hapus_data($where,'tbl_atribut');
		$this->session->set_flashdata('data','Data Berhasil Dihapus'); 
		redirect('atribut');
	}

	function edit($id_atribut){
	$where = array('id_atribut' => $id_atribut);

	$data = [
		"active_controller" => "DataMaster",
		"active_function" => "V_Editatribut"
	];

		$data['atribut'] = $this->M_atribut->edit_data($where,'tbl_atribut')->result();
		
		$this->load->view("admin/overview", $data);
	}

	function update(){
		$kode = $this->input->post('kode_atribut');
		$nama = $this->input->post('nama_atribut');
		$status = $this->input->post('status_atribut');
 
	$data = array(
			'nama_atribut' => $nama,
			'status_atribut' => $status
	);
 
	$where = array(
		'id_atribut' => $kode
	);
 
	$this->M_atribut->update_data($where,$data,'tbl_atribut');
	$this->session->set_flashdata('data','Data Berhasil Dirubah'); 
	redirect('atribut');
	}
}
<?php

class C_nilaiatribut extends CI_Controller {
    public function __construct()
    {
		 parent::__construct();
		 $this->load->library('session');
		 $this->load->model('M_nilaiatribut');
		 $this->load->model('M_atribut');
		 	$this->load->library('form_validation');
	if($this->session->userdata('masuk') != "login"){
			$this->session->set_flashdata('data','Anda Harus Login Terlebih Dahulu'); 
			redirect('login');
		}
	}

	public function Index()
	{

	$data = [
		"active_controller" => "DataMaster",
		"active_function" => "V_Nilaiatribut"
	];
		$data['nilaiatribut'] = $this->M_nilaiatribut->tampil_data_join();
		$data['atribut'] = $this->M_atribut->tampil_data()->result();
		$data['kode'] = $this->M_nilaiatribut->kode();

        $this->load->view("admin/overview", $data);
	}

	function tambah_aksi(){
		$this->form_validation->set_rules('namanilai_atribut','Nama Nilai Atribut','required');
 
		if($this->form_validation->run() != false){
			echo "Form validation oke";

			$kode = $this->input->post('kode_nilaiatribut');
			$id = $this->input->post('id_atribut');
			$namanilai = $this->input->post('namanilai_atribut');
	
			$data = array(
				'id_nilaiatribut' => $kode,
				'id_atribut' => $id,
				'namanilai_atribut' => $namanilai
				);
			
			$this->M_nilaiatribut->input_data($data,'tbl_nilaiatribut');
			$this->session->set_flashdata('data','Nilai Atribut Berhasil Ditambahkan'); 
			redirect('nilaiatribut');

		
		}else{
			
		$data = [
		"active_controller" => "DataMaster",
		"active_function" => "V_Nilaiatribut"
			];
		$data['nilaiatribut'] = $this->M_nilaiatribut->tampil_data_join();
		$data['atribut'] = $this->M_atribut->tampil_data()->result();
		$data['kode'] = $this->M_nilaiatribut->kode();
		$this->session->set_flashdata('data','Nilai Atribut tidak Berhasil Ditambahkan'); 
        $this->load->view("admin/overview", $data);
		}

		
	}

	function hapus($id_nilaiatribut){
		$where = array('id_nilaiatribut' => $id_nilaiatribut);
		$this->M_atribut->hapus_data($where,'tbl_nilaiatribut');
		$this->session->set_flashdata('data','Nilai Atribut Berhasil Dihapus'); 
		redirect('nilaiatribut');
	}

	function edit($id_nilaiatribut){
	$where = array('id_nilaiatribut' => $id_nilaiatribut);

	$data = [
		"active_controller" => "DataMaster",
		"active_function" => "V_Editnilaiatribut"
	];
		$data['nilaiatribut'] = $this->M_nilaiatribut->edit_data($where,'tbl_nilaiatribut')->result();
		$data['atribut'] = $this->M_atribut->tampil_data()->result();
		$data['detail_atribut']   =  $this->M_atribut->tampil_data()->result();
		
		$this->load->view("admin/overview", $data);
	}

	function update(){
		
			$kode = $this->input->post('kode_nilaiatribut');
			$id = $this->input->post('id_atribut');
			$namanilai = $this->input->post('namanilai_atribut');
 
	$data = array(
				
				'id_atribut' => $id,
				'namanilai_atribut' => $namanilai
	);
 
	$where = array(
		'id_nilaiatribut' => $kode
	);
 
	$this->M_nilaiatribut->update_data($where,$data,'tbl_nilaiatribut');
	$this->session->set_flashdata('data','Nilai Atribut Berhasil Dirubah'); 
	redirect('nilaiatribut');
}
}
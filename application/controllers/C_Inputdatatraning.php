<?php

class C_Inputdatatraning extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('M_nilaiatribut');
		$this->load->model('M_inputdatatraning');
		$this->load->model('M_probabilitas');
		$this->load->library('form_validation');
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
		"active_function" => "V_Inputdatatraning"
	];		
		$data['atributjoin'] = $this->M_inputdatatraning->tampil_data_join();
		$data['atributjoin2'] = $this->M_inputdatatraning->tampil_data_join2();	
		$data['kode'] = $this->M_inputdatatraning->kode();
        $this->load->view("admin/overview", $data);
	}

	function tambah_aksi(){	
		$this->form_validation->set_rules('kode_datatraning','Kode Data Traning','required');
		$this->form_validation->set_rules('nim_responden','Nim Responden','required');
		

		$cek = $this->db->query("select nim_responden from tbl_datatraning where nim_responden='".$this->input->post('nim_responden')."'")->num_rows();
		if ($cek<=0) {          
	
		if($this->form_validation->run() != false){
			echo "Form validation oke";

			$kode = $this->input->post('kode_datatraning');
			$nim = $this->input->post('nim_responden');
			$ak = $this->input->post('akuntansi');
			$pwl = $this->input->post('pemrograman_web_lanjut');
			$akl = $this->input->post('akuntansi_lanjut');
			$mul = $this->input->post('multimedia');
			$bp1 = $this->input->post('bahasa_pemrograman_1');
			$ppw = $this->input->post('pengenalan_perancangan_web');
			$foto = $this->input->post('fotografi');
			$kg = $this->input->post('komputer_grafis');
			$minat = $this->input->post('minat');
			$bakat = $this->input->post('bakat');
			$konsentrasi = $this->input->post('konsentrasi');
	
			$data = array(
				'id_datatraning' => $kode,
				'nim_responden' => $nim,
				'akuntansi' => $ak,
				'akuntansi_lanjut' => $akl,
				'pemrograman_web_lanjut' => $pwl,
				'pengenalan_perancangan_web' => $ppw,
				'bahasa_pemrograman_1' => $bp1,
				'multimedia' => $mul,
				'fotografi' => $foto,
				'komputer_grafis' => $kg,
				'minat' => $minat,
				'bakat' => $bakat,
				'konsentrasi' => $konsentrasi
				
				);

			$this->M_inputdatatraning->input_data($data,'tbl_datatraning');
			$this->session->set_flashdata('data','Data Traning Berhasil Ditambah'); 
			redirect('inputdatatraning');

		}elseif($this->form_validation->run() == false){
		$this->session->set_flashdata('error','nim harus diisi'); 
		$this->index();
		}	
	} else{
		$this->session->set_flashdata('error','nim sudah terdaftar'); 
		$this->index();
	}	

}

	
	

}
<?php

class C_Inputdatatesting extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('M_datatesting');
		$this->load->model('M_inputdatatraning');
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
		"active_controller" => "DataTesting",
		"active_function" => "V_inputdatatesting"
	];		
			

		$data['atributjoin'] = $this->M_inputdatatraning->tampil_data_join();
		$data['atributjoin2'] = $this->M_inputdatatraning->tampil_data_join2();		
		$data['datatesting'] = $this->M_datatesting->datatesting();	
        $this->load->view("admin/overview", $data);
	}
	
	function data_testing(){	
		$this->form_validation->set_rules('nim_responden','Nim Responden','required');
		$this->form_validation->set_rules('nama_responden','Nama Responden','required');
		if($this->form_validation->run() != false){
			
			$kode = $this->input->post('kode_datatraning');
			$nim = $this->input->post('nim_responden');
			$nama = $this->input->post('nama_responden');
			$ak = $this->input->post('akuntansi',TRUE);
			$bp1 = $this->input->post('bahasa_pemrograman_1',TRUE);
			$pwl = $this->input->post('pemrograman_web_lanjut',TRUE);
			$akl = $this->input->post('akuntansi_lanjut',TRUE);
			$mul = $this->input->post('multimedia',TRUE);
			$ppw = $this->input->post('pengenalan_perancangan_web',TRUE);
			$foto = $this->input->post('fotografi',TRUE);
			$kg = $this->input->post('komputer_grafis',TRUE);
			$minat = $this->input->post('minat',TRUE);
			$bakat = $this->input->post('bakat',TRUE);
		
			$data = array(
				'id_datatraning' => $kode,
				'nim_responden' => $nim,
				'akuntansi' => $ak, 
				'bahasa_pemrograman_1' => $bp1,
				'akuntansi_lanjut' => $akl,
				'pemrograman_web_lanjut' => $pwl,
				'pengenalan_perancangan_web' => $ppw,
				'multimedia' => $mul,
				'fotografi' => $foto,
				'minat' => $minat,
				'bakat' => $bakat,
				'komputer_grafis' => $kg
				);

			$akun_c = $this->M_datatesting->convert($data["akuntansi"])->hasil_bagi;
			$bp1_c = $this->M_datatesting->convert($data["bahasa_pemrograman_1"])->hasil_bagi;
			$al_c = $this->M_datatesting->convert($data["akuntansi_lanjut"])->hasil_bagi;
			$pwl_c = $this->M_datatesting->convert($data["pemrograman_web_lanjut"])->hasil_bagi;
			$ppw_c = $this->M_datatesting->convert($data["pengenalan_perancangan_web"])->hasil_bagi;
			$mul_c = $this->M_datatesting->convert($data["multimedia"])->hasil_bagi;
			$foto_c = $this->M_datatesting->convert($data["fotografi"])->hasil_bagi;
			$m_c = $this->M_datatesting->convert($data["minat"])->hasil_bagi;
			$b_c = $this->M_datatesting->convert($data["bakat"])->hasil_bagi;
			$kg_c = $this->M_datatesting->convert($data["komputer_grafis"])->hasil_bagi;

			$ecommerce  = $this->M_datatesting->prob_konsentrasi('NA046')->hasil_bagi;  
			$financial  = $this->M_datatesting->prob_konsentrasi('NA048')->hasil_bagi;  
			$multimedia  = $this->M_datatesting->prob_konsentrasi('NA047')->hasil_bagi;

			$akun_ecommerce  = $this->M_datatesting->input_data_testing('akuntansi',$data["akuntansi"],'NA046')->hasil_bagi;  
			$akun_financial  = $this->M_datatesting->input_data_testing('akuntansi',$data["akuntansi"],'NA048')->hasil_bagi;  
			$akun_multimedia  = $this->M_datatesting->input_data_testing('akuntansi',$data["akuntansi"],'NA047')->hasil_bagi;

			$al_ecommerce  = $this->M_datatesting->input_data_testing('akuntansi_lanjut',$data["akuntansi_lanjut"],'NA046')->hasil_bagi;  
			$al_financial  = $this->M_datatesting->input_data_testing('akuntansi_lanjut',$data["akuntansi_lanjut"],'NA048')->hasil_bagi;  
			$al_multimedia  = $this->M_datatesting->input_data_testing('akuntansi_lanjut',$data["akuntansi_lanjut"],'NA047')->hasil_bagi;

			$bp1_ecommerce  = $this->M_datatesting->input_data_testing('bahasa_pemrograman_1',$data["bahasa_pemrograman_1"],'NA046')->hasil_bagi;  
			$bp1_financial  = $this->M_datatesting->input_data_testing('bahasa_pemrograman_1',$data["bahasa_pemrograman_1"],'NA048')->hasil_bagi;  
			$bp1_multimedia  = $this->M_datatesting->input_data_testing('bahasa_pemrograman_1',$data["bahasa_pemrograman_1"],'NA047')->hasil_bagi;

			$pwl_ecommerce  = $this->M_datatesting->input_data_testing('pemrograman_web_lanjut',$data["pemrograman_web_lanjut"],'NA046')->hasil_bagi;  
			$pwl_financial  = $this->M_datatesting->input_data_testing('pemrograman_web_lanjut',$data["pemrograman_web_lanjut"],'NA048')->hasil_bagi;  
			$pwl_multimedia  = $this->M_datatesting->input_data_testing('pemrograman_web_lanjut',$data["pemrograman_web_lanjut"],'NA047')->hasil_bagi;

			$ppw_ecommerce  = $this->M_datatesting->input_data_testing('pengenalan_perancangan_web',$data["pengenalan_perancangan_web"],'NA046')->hasil_bagi;  
			$ppw_financial  = $this->M_datatesting->input_data_testing('pengenalan_perancangan_web',$data["pengenalan_perancangan_web"],'NA048')->hasil_bagi;  
			$ppw_multimedia  = $this->M_datatesting->input_data_testing('pengenalan_perancangan_web',$data["pengenalan_perancangan_web"],'NA047')->hasil_bagi;

			$m_ecommerce  = $this->M_datatesting->input_data_testing('multimedia',$data["multimedia"],'NA046')->hasil_bagi;  
			$m_financial  = $this->M_datatesting->input_data_testing('multimedia',$data["multimedia"],'NA048')->hasil_bagi;  
			$m_multimedia  = $this->M_datatesting->input_data_testing('multimedia',$data["multimedia"],'NA047')->hasil_bagi;

			$f_ecommerce  = $this->M_datatesting->input_data_testing('fotografi',$data["fotografi"],'NA046')->hasil_bagi;  
			$f_financial  = $this->M_datatesting->input_data_testing('fotografi',$data["fotografi"],'NA048')->hasil_bagi;  
			$f_multimedia  = $this->M_datatesting->input_data_testing('fotografi',$data["fotografi"],'NA047')->hasil_bagi;

			$mi_ecommerce  = $this->M_datatesting->input_data_testing('minat',$data["minat"],'NA046')->hasil_bagi;  
			$mi_financial  = $this->M_datatesting->input_data_testing('minat',$data["minat"],'NA048')->hasil_bagi;  
			$mi_multimedia  = $this->M_datatesting->input_data_testing('minat',$data["minat"],'NA047')->hasil_bagi;
			
			$b_ecommerce  = $this->M_datatesting->input_data_testing('bakat',$data["bakat"],'NA046')->hasil_bagi;  
			$b_financial  = $this->M_datatesting->input_data_testing('bakat',$data["bakat"],'NA048')->hasil_bagi;  
			$b_multimedia  = $this->M_datatesting->input_data_testing('bakat',$data["bakat"],'NA047')->hasil_bagi;

			$kg_ecommerce  = $this->M_datatesting->input_data_testing('komputer_grafis',$data["komputer_grafis"],'NA046')->hasil_bagi;  
			$kg_financial  = $this->M_datatesting->input_data_testing('komputer_grafis',$data["komputer_grafis"],'NA048')->hasil_bagi;  
			$kg_multimedia  = $this->M_datatesting->input_data_testing('komputer_grafis',$data["komputer_grafis"],'NA047')->hasil_bagi;

			

			$prob_ecom = ( $bp1_ecommerce * $akun_ecommerce * $al_ecommerce * $pwl_ecommerce * $ppw_ecommerce * $m_ecommerce * $f_ecommerce * $mi_ecommerce * $b_ecommerce * $kg_ecommerce);
			$prob_multimedia =  ($bp1_multimedia * $akun_multimedia * $al_multimedia * $pwl_multimedia * $ppw_multimedia * $m_multimedia * $f_multimedia * $mi_multimedia * $b_multimedia * $kg_multimedia);
			$prob_financial =  ($bp1_financial * $akun_financial * $al_financial * $pwl_financial * $ppw_financial * $m_financial * $f_financial * $mi_financial * $b_financial * $kg_financial);
			
			$jumlah_ecom = $prob_ecom * $ecommerce;
			$jumlah_mul = $prob_multimedia * $multimedia;
			$jumlah_ft = $prob_financial * $financial;

				if ($jumlah_ecom > $jumlah_mul and $jumlah_ecom > $jumlah_ft) {
					$prediksi = $this->M_datatesting->convert('NA046')->hasil_bagi;
					$nilai_prediksi = $jumlah_ecom;
					$warna = "info";
				}elseif ($jumlah_mul > $jumlah_ecom and $jumlah_mul > $jumlah_ft) {
					$prediksi = $this->M_datatesting->convert('NA047')->hasil_bagi;
					$nilai_prediksi  = $jumlah_mul;
					$warna = "secondary";
				} elseif ($jumlah_ft > $jumlah_ecom and $jumlah_ft > $jumlah_mul) {
					$prediksi = $this->M_datatesting->convert('NA048')->hasil_bagi;
					$nilai_prediksi  = $jumlah_ft;
					$warna = "success";
				} else {
					$prediksi = "Tidak Ada yang cocok dengan Anda";
					$warna = "danger";
				}

				$ecom = $this->M_datatesting->convert('NA046')->hasil_bagi;
				$multi = $this->M_datatesting->convert('NA047')->hasil_bagi;
				$financ = $this->M_datatesting->convert('NA048')->hasil_bagi;
				

			$data = [
				"active_controller" => "DataTesting",
				"active_function" => "V_hasil",
				"prob_ecom" => $prob_ecom,
				"prob_mul" => $prob_multimedia,
				"prob_ft" => $prob_financial,

				"ecom1" => $ecom,
				"multi" => $multi,
				"financ" => $financ,

				"warna" => $warna,
 
				"nilai_prediksi" => $nilai_prediksi,

				"jumlah_ecom" => $jumlah_ecom,
				"jumlah_mul" => $jumlah_mul,
				"jumlah_ft" => $jumlah_ft,

				"jum_ecom" => $jumlah_ecom,
				"jum_mul" => $jumlah_mul,
				"jum_ft" => $jumlah_ft,

				"nim_responden" => $nim,
				"nama" => $nama,

				"akuntansi" => $akun_c, 
				"akuntansi_lanjut" => $al_c,
				"pemrograman_web_lanjut" => $pwl_c,
				"pengenalan_perancangan_web" => $ppw_c,
				'bahasa_pemrograman_1' => $bp1_c,
				"multimedia" => $mul_c,
				"fotografi" => $foto_c,
				"minat" => $m_c,
				"bakat" => $b_c,
				"komputer_grafis" => $kg_c,
				
				"akun_e" => $akun_ecommerce,
				"al_e" => $al_ecommerce, 
				"bp1_e" => $bp1_ecommerce, 
				"pwl_e" => $pwl_ecommerce,
				"ppw_e" => $ppw_ecommerce,
				"m_e" => $m_ecommerce,
				"f_e" => $f_ecommerce,
				"mi_e" => $mi_ecommerce,
				"b_e" => $b_ecommerce,
				"kg_e" => $kg_ecommerce,
				"ecom" => $ecommerce,

				"akun_m" => $akun_multimedia,
				"al_m" => $al_multimedia, 
				"pwl_m" => $pwl_multimedia,
				"bp1_m" => $bp1_multimedia, 
				"ppw_m" => $ppw_multimedia,
				"m_m" => $m_multimedia,
				"f_m" => $f_multimedia,
				"mi_m" => $mi_multimedia,
				"b_m" => $b_multimedia,
				"kg_m" => $kg_multimedia,
				"mul" => $multimedia,

				"akun_ft" => $akun_financial,
				"al_ft" => $al_financial, 
				"pwl_ft" => $pwl_financial,
				"bp1_ft" => $bp1_financial, 
				"ppw_ft" => $ppw_financial,
				"m_ft" => $m_financial,
				"f_ft" => $f_financial,
				"mi_ft" => $mi_financial,
				"b_ft" => $b_financial,
				"kg_ft" => $kg_financial,
				"ft" => $financial,

				"prediksi" => $prediksi,

				
			];			
			$this->session->set_flashdata('data','Berhasil ini adalah Hasil konsentrasi untuk Saudara '.$nama); 
			$data['atributjoin'] = $this->M_inputdatatraning->tampil_data_join();
			$data['atribut'] = $this->M_datatesting->datatesting();
			$data['atributjoin2'] = $this->M_inputdatatraning->tampil_data_join2();	
			
			$this->load->view("admin/overview", $data);
		}else{
		$this->session->set_flashdata('error','Nama dan Nim Harus Di isi'); 
		$this->index();
		}
	}

}
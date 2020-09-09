<?php

class C_user extends CI_Controller {
    public function __construct()
    {
         parent::__construct();
         $this->load->library('session');
         $this->load->model('M_user');
	if($this->session->userdata('masuk') != "login"){
			$this->session->set_flashdata('data','Anda Harus Login Terlebih Dahulu'); 
			redirect('login');
		}
	}

	public function mahasiswa()
	{

	$data = [
		"active_controller" => "DataUser",
		"active_function" => "V_mahasiswa"
    ];
        $data['mhs'] = $this->M_user->tampil_data()->result();
		$this->load->helper('url'); 
        $this->load->view("admin/overview", $data);
    }
    
    
	function tambah_aksi(){
        $username = $this->input->post('username');
        $config['upload_path']          = './upload/mhs/';
        $config['allowed_types']        = 'png';
        $config['max_size']             = 1024;
        $config['file_name']            = $username;
        $config['overwrite']			= true;
        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload('foto'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error','Foto gagal di upload');
                redirect('datamahasiswa'); 
                
        }
        else
        {
		$cek = $this->db->query("select username from tbl_mhs where username='".$this->input->post('username')."'")->num_rows();
		if ($cek<=0) { 
            $nim = $this->input->post('nim_mhs');
            $nama = $this->input->post('nama_mhs');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $foto = $this->input->post('foto');
           
            
            $data2 = array(
                'nim_mhs' => $nim,
                'nama_mhs' => $nama,
                'foto_mhs' => $username,
                'username' => $username,
                'password' => md5($password),
                
                );  

                $upload_data = $this->upload->data();
                $data['foto']='upload/mhs/'.$file_name;
                $file_name = $upload_data['file_name'];
                $this->M_user->input_data($data2,'tbl_mhs');
                    $this->session->set_flashdata('data','Data Mahasiswa Berhasil Di tambah');
                    redirect('datamahasiswa'); 
                
        }else{
		$this->session->set_flashdata('error','Username sudah terdaftar'); 
		$this->mahasiswa();
	    }	
        redirect('datamahasiswa');
     }}


function hapus($username, $id_mhs){
    $where = array('id_mhs' => $id_mhs);   
    $this->M_user->hapus_data($where,'tbl_mhs');
    unlink("./upload/mhs/".$username.".png");
    $this->session->set_flashdata('data','Data Mahasiswa Berhasil Dihapus');
    redirect('datamahasiswa'); 
}   
}
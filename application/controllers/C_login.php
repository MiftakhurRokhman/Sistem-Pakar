<?php

class C_login extends CI_Controller {
    public function __construct()
    {
		 parent::__construct();
         $this->load->model('M_login');
          $this->load->model('M_user');
			$this->load->library('session');
	}

	public function Index()
	{
		$this->load->helper('url'); 
        $this->load->view("admin/Login/login");
	}

	public function daftar()
	{
		$this->load->helper('url'); 
        $this->load->view("admin/Login/daftar");
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
                $this->session->set_flashdata('data','Foto gagal di upload atau tidak tersedia');
                redirect('daftar'); 
                
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
                    redirect('login'); 
                
        }else{
		$this->session->set_flashdata('data','Username sudah terdaftar'); 
		$this->daftar();
	    }	
        redirect('daftar');
     }
     }

	function auth(){
        $username=$this->input->post('username',TRUE);
        $password=md5($this->input->post('password',TRUE));
 
        $cek_mhs=$this->M_login->auth_mhs($username,$password);
 
        if($cek_mhs->num_rows() > 0){ //jika login sebagai mahasiswa
            $data=$cek_mhs->row_array();
            $this->session->set_userdata('masuk',TRUE);
					$this->session->set_userdata('akses','2');
					$this->session->set_userdata('status','Mahasiswa');
                    $this->session->set_userdata('ses_id',$data['nim_mhs']);
                    $this->session->set_userdata('username',$data['username']);
                    $this->session->set_flashdata('login','Selamat Datang '.$data['username']);
                    redirect('dashboard');
 
        }   else   { //jika login sebagai admin
                    $cek_admin=$this->M_login->auth_admin($username,$password);
                    if($cek_admin->num_rows() > 0){
                            $data=$cek_admin->row_array();
                    $this->session->set_userdata('masuk',TRUE);  
							$this->session->set_userdata('akses','1');
							$this->session->set_userdata('status','Administrator');
                            $this->session->set_userdata('ses_id',$data['nama_admin']);
                            $this->session->set_userdata('username',$data['username']);
                            $this->session->set_flashdata('login','Selamat Datang '.$data['username']);
                            redirect('dashboard');
                    }else{ 
                        redirect('login');
                    }
        }
 
    }

 
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}


}
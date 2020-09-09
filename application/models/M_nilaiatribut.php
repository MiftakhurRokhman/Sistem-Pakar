<?php 
 
class M_nilaiatribut extends CI_Model{
	function tampil_data(){
		return $this->db->get('tbl_nilaiatribut');
	}

	function tampil_data_join(){
		$query = $this->db->query("SELECT tbl_atribut.id_atribut, tbl_atribut.nama_atribut, 
		tbl_atribut.status_atribut, tbl_nilaiatribut.id_nilaiatribut, tbl_nilaiatribut.namanilai_atribut
		 FROM tbl_atribut JOIN tbl_nilaiatribut 
		 WHERE tbl_atribut.id_atribut = tbl_nilaiatribut.id_atribut")->result();
	return $query;
   }
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    
    function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

    function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

 	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	public function kode(){
		$this->db->select('RIGHT(tbl_nilaiatribut.id_nilaiatribut,2) as id_nilaiatribut', FALSE);
		$this->db->order_by('id_nilaiatribut','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('tbl_nilaiatribut');  //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
			 //cek kode jika telah tersedia    
			 $data = $query->row();      
			 $kode = intval($data->id_nilaiatribut) + 1; 
		}
		else{      
			 $kode = 1;  //cek jika kode belum terdapat pada table
		}
			 
			$batas = str_pad($kode, 1, "0", STR_PAD_LEFT);    
			if($batas<10){
				$kodetampil = "NA"."00".$batas;  //format kode
			}else{
				$kodetampil = "NA"."0".$batas;  //format kode
			}
			return $kodetampil;  
	   }
}
<?php 
 
class M_inputdatatraning extends CI_Model{
	function tampil_data_join2(){
		 $query = $this->db->query("SELECT DISTINCT tbl_atribut.id_atribut, tbl_atribut.nama_atribut, tbl_atribut.status_atribut FROM tbl_atribut INNER JOIN tbl_nilaiatribut 
		 WHERE tbl_atribut.id_atribut = tbl_nilaiatribut.id_atribut ORDER BY tbl_atribut.id_atribut ")->result();
 	return $query;
	}

	function tampil_data_join(){
		$query = $this->db->query(" SELECT DISTINCT tbl_nilaiatribut.id_nilaiatribut, tbl_nilaiatribut.namanilai_atribut, tbl_atribut.nama_atribut
		FROM tbl_atribut INNER JOIN tbl_nilaiatribut 
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
		$this->db->select('RIGHT(tbl_datatraning.id_datatraning,2) as id_datatraning', FALSE);
		$this->db->order_by('id_datatraning','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('tbl_datatraning');  //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
			 //cek kode jika telah tersedia    
			 $data = $query->row();      
			 $kode = intval($data->id_datatraning) + 1; 
		}
		else{      
			 $kode = 1;  //cek jika kode belum terdapat pada table
		}
			 
			$batas = str_pad($kode, 1, "0", STR_PAD_LEFT);    
			if($batas<10){
				$kodetampil = "TR"."00".$batas;  //format kode
			}else{
				$kodetampil = "TR"."0".$batas;  //format kode
			}
			return $kodetampil;  
	   }

}
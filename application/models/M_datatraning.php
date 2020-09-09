<?php 
 
class M_datatraning extends CI_Model{
	function tampil_data(){
		return $this->db->get('tbl_datatraning');
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		}

		function tampil_kriteria(){
		$query = $this->db->query("SELECT nama_atribut FROM tbl_atribut");
				return $query;
	   }
		
		function tampil_nilai(){
			$query = $this->db->query("	SELECT 
			d.id_datatraning, 
			n.namanilai_atribut AS 'akuntansi',
			n1.namanilai_atribut AS 'akuntansi_lanjut',
			n2.namanilai_atribut AS 'bahasa_pemrograman_1',
			n3.namanilai_atribut AS 'pemrograman_web_lanjut',
			n4.namanilai_atribut AS 'pengenalan_perancangan_web',
			n5.namanilai_atribut AS 'multimedia',
			n6.namanilai_atribut AS 'fotografi',
			n7.namanilai_atribut AS 'komputer_grafis',
			n8.namanilai_atribut AS 'minat',
			n9.namanilai_atribut AS 'bakat',
			n10.namanilai_atribut AS 'konsentrasi',
			n11.nim_responden AS 'nim_responden'
	   FROM tbl_datatraning d
	   JOIN tbl_nilaiatribut n ON n.id_nilaiatribut = d.akuntansi
	   JOIN tbl_nilaiatribut n1 ON n1.id_nilaiatribut = d.akuntansi_lanjut
	   JOIN tbl_nilaiatribut n2 ON n2.id_nilaiatribut = d.bahasa_pemrograman_1
	   JOIN tbl_nilaiatribut n3 ON n3.id_nilaiatribut = d.pemrograman_web_lanjut
	   JOIN tbl_nilaiatribut n4 ON n4.id_nilaiatribut = d.pengenalan_perancangan_web
	   JOIN tbl_nilaiatribut n5 ON n5.id_nilaiatribut = d.multimedia
	   JOIN tbl_nilaiatribut n6 ON n6.id_nilaiatribut = d.fotografi
	   JOIN tbl_nilaiatribut n7 ON n7.id_nilaiatribut = d.komputer_grafis
	   JOIN tbl_nilaiatribut n8 ON n8.id_nilaiatribut = d.minat
	   JOIN tbl_nilaiatribut n9 ON n9.id_nilaiatribut = d.bakat
	   JOIN tbl_nilaiatribut n10 ON n10.id_nilaiatribut = d.konsentrasi
	   JOIN tbl_datatraning n11 ON n11.nim_responden = d.nim_responden");
			return $query;
	   }
	
	
	
}
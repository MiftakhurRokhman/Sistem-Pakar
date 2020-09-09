<?php 
 
class M_datatesting extends CI_Model{
	function datatesting(){
		 $query = $this->db->query("SELECT DISTINCT  tbl_atribut.id_atribut, tbl_atribut.nama_atribut FROM tbl_atribut INNER JOIN tbl_nilaiatribut 
		 WHERE tbl_atribut.id_atribut = tbl_nilaiatribut.id_atribut AND tbl_atribut.status_atribut ='Diketahui' ORDER BY tbl_atribut.status_atribut")->result();
 	return $query;
    }
    
    function input_data($data){
      $prob_ecom =$data['prob_ecom'];
      $query = $this->db->query("INSERT INTO tbl_hasil (konsentrasi, nilai) VALUES ('E-Commerce','.$prob_ecom)")->result();
   return $query;
   }
    function input_data_testing($kriteria,$nilai,$konsentrasi){
    $query = $this->db->query("SELECT ROUND((SUM($kriteria='$nilai' AND konsentrasi='$konsentrasi'))/(SUM(konsentrasi='$konsentrasi')),2) as hasil_bagi
    FROM tbl_datatraning");
 	 return $query->row();
                }

    function prob_konsentrasi($konsentrasi){
    $query = $this->db->query("SELECT ROUND((SUM(konsentrasi='$konsentrasi'))/(COUNT(konsentrasi)),2) hasil_bagi
	FROM tbl_datatraning");
   return $query->row();
    }

    function convert($nilai){  
      $query = $this->db->query ("SELECT(SELECT namanilai_atribut FROM tbl_nilaiatribut 
      WHERE id_nilaiatribut = '$nilai') as hasil_bagi");
      return $query->row();
      }

}
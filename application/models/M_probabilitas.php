<?php 
 
class M_probabilitas extends CI_Model{
	function tampil_data_nama(){
		 $query = $this->db->query("SELECT nama_atribut FROM tbl_atribut where status_atribut = 'Diketahui'")->result();
 	return $query;
	}
	
	function data_traning(){
		 $query = $this->db->query("SELECT * FROM tbl_datatraning")->result();
 	return $query;
	}

		function tampil_data_join2(){
		 $query = $this->db->query("SELECT tbl_atribut.id_atribut, tbl_atribut.nama_atribut, tbl_nilaiatribut.namanilai_atribut, tbl_nilaiatribut.id_nilaiatribut FROM tbl_atribut INNER JOIN tbl_nilaiatribut 
		 WHERE tbl_atribut.id_atribut = tbl_nilaiatribut.id_atribut ORDER BY tbl_nilaiatribut.namanilai_atribut")->result();
 	return $query;
	}

    function konsentrasi(){
		 $query = $this->db->query("SELECT DISTINCT tbl_nilaiatribut.namanilai_atribut, tbl_atribut.status_atribut FROM tbl_nilaiatribut JOIN tbl_atribut 
		ON tbl_atribut.id_atribut = tbl_nilaiatribut.id_atribut 
		WHERE tbl_atribut.status_atribut = 'Dicari'")->result();
			return $query;
			}
    
    function tampil_data_nilai(){
		$query = $this->db->query("SELECT DISTINCT tbl_nilaiatribut.namanilai_atribut, tbl_atribut.status_atribut FROM tbl_nilaiatribut JOIN tbl_atribut 
        ON tbl_atribut.id_atribut = tbl_nilaiatribut.id_atribut 
        WHERE tbl_atribut.status_atribut = 'Diketahui' ORDER BY tbl_nilaiatribut.namanilai_atribut ")->result();
 	return $query;
	}

	function hapus_probabilitas(){
		$query = $this->db->query("DELETE FROM tbl_probabilitas");
		return $query;
   }

   function probabilitas_konsentstrasi(){
	$query = $this->db->query("SELECT ROUND(SUM(konsentrasi='NA046')/COUNT(konsentrasi),2) ecom,
	ROUND(SUM(konsentrasi='NA047')/COUNT(konsentrasi),2) mul,
	ROUND(SUM(konsentrasi='NA048')/COUNT(konsentrasi),2) ft
	From tbl_datatraning")->result();
	return $query;
	}

   function itung_probabilitas(){
	$query = $this->db->query("SELECT 
	ROUND(SUM(akuntansi='NA001' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA001ecom, 
	ROUND(SUM(akuntansi='NA002' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA002ecom, 
	ROUND(SUM(akuntansi='NA003' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA003ecom, 
	ROUND(SUM(akuntansi='NA004' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA004ecom, 
	ROUND(SUM(akuntansi='NA005' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA005ecom, 
	
	ROUND(SUM(akuntansi_lanjut='NA006' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA006ecom, 
	ROUND(SUM(akuntansi_lanjut='NA007' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA007ecom, 
	ROUND(SUM(akuntansi_lanjut='NA008' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA008ecom, 
	ROUND(SUM(akuntansi_lanjut='NA009' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA009ecom, 
	ROUND(SUM(akuntansi_lanjut='NA010' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA010ecom, 

	
	ROUND(SUM(bahasa_pemrograman_1='NA011' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA011ecom, 
	ROUND(SUM(bahasa_pemrograman_1='NA012' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA012ecom, 
	ROUND(SUM(bahasa_pemrograman_1='NA013' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA013ecom, 
	ROUND(SUM(bahasa_pemrograman_1='NA014' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA014ecom, 
	ROUND(SUM(bahasa_pemrograman_1='NA015' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA015ecom, 
	
	ROUND(SUM(pemrograman_web_lanjut='NA016' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA016ecom,
	ROUND(SUM(pemrograman_web_lanjut='NA017' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA017ecom,
	ROUND(SUM(pemrograman_web_lanjut='NA018' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA018ecom,
	ROUND(SUM(pemrograman_web_lanjut='NA019' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA019ecom,
	ROUND(SUM(pemrograman_web_lanjut='NA020' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA020ecom,
	
	ROUND(SUM(pengenalan_perancangan_web='NA021' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA021ecom,
	ROUND(SUM(pengenalan_perancangan_web='NA022' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA022ecom,
	ROUND(SUM(pengenalan_perancangan_web='NA023' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA023ecom,
	ROUND(SUM(pengenalan_perancangan_web='NA024' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA024ecom,
	ROUND(SUM(pengenalan_perancangan_web='NA025' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA025ecom,

	ROUND(SUM(fotografi='NA026' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA026ecom,
	ROUND(SUM(fotografi='NA027' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA027ecom,
	ROUND(SUM(fotografi='NA028' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA028ecom,
	ROUND(SUM(fotografi='NA029' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA029ecom,
	ROUND(SUM(fotografi='NA030' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA030ecom,
	
	
	ROUND(SUM(multimedia='NA031' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA031ecom,
	ROUND(SUM(multimedia='NA032' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA032ecom,
	ROUND(SUM(multimedia='NA033' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA033ecom,
	ROUND(SUM(multimedia='NA034' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA034ecom,
	ROUND(SUM(multimedia='NA035' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA035ecom,
	

	ROUND(SUM(komputer_grafis='NA036' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA036ecom,
	ROUND(SUM(komputer_grafis='NA037' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA037ecom,
	ROUND(SUM(komputer_grafis='NA038' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA038ecom,
	ROUND(SUM(komputer_grafis='NA039' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA039ecom,
	ROUND(SUM(komputer_grafis='NA040' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA040ecom,

	ROUND(SUM(bakat='NA041' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA041ecom,
	ROUND(SUM(bakat='NA042' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA042ecom,
	
	ROUND(SUM(minat='NA043' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA043ecom,
	ROUND(SUM(minat='NA044' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA044ecom,
	ROUND(SUM(minat='NA045' AND konsentrasi='NA046')/SUM(konsentrasi='NA046'),2) NA045ecom,
	

	
	ROUND(SUM(akuntansi='NA001' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA001mul, 
	ROUND(SUM(akuntansi='NA002' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA002mul, 
	ROUND(SUM(akuntansi='NA003' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA003mul, 
	ROUND(SUM(akuntansi='NA004' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA004mul, 
	ROUND(SUM(akuntansi='NA005' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA005mul, 
	
	ROUND(SUM(akuntansi_lanjut='NA006' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA006mul, 
	ROUND(SUM(akuntansi_lanjut='NA007' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA007mul, 
	ROUND(SUM(akuntansi_lanjut='NA008' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA008mul, 
	ROUND(SUM(akuntansi_lanjut='NA009' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA009mul, 
	ROUND(SUM(akuntansi_lanjut='NA010' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA010mul, 
	
	
	ROUND(SUM(bahasa_pemrograman_1='NA011' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA011mul, 
	ROUND(SUM(bahasa_pemrograman_1='NA012' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA012mul, 
	ROUND(SUM(bahasa_pemrograman_1='NA013' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA013mul, 
	ROUND(SUM(bahasa_pemrograman_1='NA014' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA014mul, 
	ROUND(SUM(bahasa_pemrograman_1='NA015' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA015mul, 

	ROUND(SUM(pemrograman_web_lanjut='NA016' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA016mul,
	ROUND(SUM(pemrograman_web_lanjut='NA017' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA017mul,
	ROUND(SUM(pemrograman_web_lanjut='NA018' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA018mul,
	ROUND(SUM(pemrograman_web_lanjut='NA019' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA019mul,
	ROUND(SUM(pemrograman_web_lanjut='NA020' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA020mul,
	
	
	ROUND(SUM(pengenalan_perancangan_web='NA021' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA021mul,
	ROUND(SUM(pengenalan_perancangan_web='NA022' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA022mul,
	ROUND(SUM(pengenalan_perancangan_web='NA023' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA023mul,
	ROUND(SUM(pengenalan_perancangan_web='NA024' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA024mul,
	ROUND(SUM(pengenalan_perancangan_web='NA025' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA025mul,
		
	ROUND(SUM(fotografi='NA026' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA026mul,
	ROUND(SUM(fotografi='NA027' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA027mul,
	ROUND(SUM(fotografi='NA028' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA028mul,
	ROUND(SUM(fotografi='NA029' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA029mul,
	ROUND(SUM(fotografi='NA030' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA030mul,
	
	ROUND(SUM(multimedia='NA031' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA031mul,
	ROUND(SUM(multimedia='NA032' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA032mul,
	ROUND(SUM(multimedia='NA033' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA033mul,
	ROUND(SUM(multimedia='NA034' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA034mul,
	ROUND(SUM(multimedia='NA035' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA035mul,

	ROUND(SUM(komputer_grafis='NA036' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA036mul,
	ROUND(SUM(komputer_grafis='NA037' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA037mul,
	ROUND(SUM(komputer_grafis='NA038' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA038mul,
	ROUND(SUM(komputer_grafis='NA039' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA039mul,
	ROUND(SUM(komputer_grafis='NA040' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA040mul,

		
	ROUND(SUM(bakat='NA041' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA041mul,
	ROUND(SUM(bakat='NA042' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA042mul,
	
	ROUND(SUM(minat='NA043' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA043mul,
	ROUND(SUM(minat='NA044' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA044mul,
	ROUND(SUM(minat='NA045' AND konsentrasi='NA047')/SUM(konsentrasi='NA047'),2) NA045mul,

	
	
	ROUND(SUM(akuntansi='NA001' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA001ft, 
	ROUND(SUM(akuntansi='NA002' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA002ft, 
	ROUND(SUM(akuntansi='NA003' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA003ft, 
	ROUND(SUM(akuntansi='NA004' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA004ft, 
	ROUND(SUM(akuntansi='NA005' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA005ft, 
	
	ROUND(SUM(akuntansi_lanjut='NA006' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA006ft, 
	ROUND(SUM(akuntansi_lanjut='NA007' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA007ft, 
	ROUND(SUM(akuntansi_lanjut='NA008' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA008ft, 
	ROUND(SUM(akuntansi_lanjut='NA009' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA009ft, 
	ROUND(SUM(akuntansi_lanjut='NA010' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA010ft, 
	
	ROUND(SUM(bahasa_pemrograman_1='NA011' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA011ft, 
	ROUND(SUM(bahasa_pemrograman_1='NA012' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA012ft, 
	ROUND(SUM(bahasa_pemrograman_1='NA013' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA013ft, 
	ROUND(SUM(bahasa_pemrograman_1='NA014' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA014ft, 
	ROUND(SUM(bahasa_pemrograman_1='NA015' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA015ft, 
	
	ROUND(SUM(pemrograman_web_lanjut='NA016' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA016ft,
	ROUND(SUM(pemrograman_web_lanjut='NA017' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA017ft,
	ROUND(SUM(pemrograman_web_lanjut='NA018' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA018ft,
	ROUND(SUM(pemrograman_web_lanjut='NA019' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA019ft,
	ROUND(SUM(pemrograman_web_lanjut='NA020' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA020ft,
	
	ROUND(SUM(pengenalan_perancangan_web='NA021' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA021ft,
	ROUND(SUM(pengenalan_perancangan_web='NA022' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA022ft,
	ROUND(SUM(pengenalan_perancangan_web='NA023' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA023ft,
	ROUND(SUM(pengenalan_perancangan_web='NA024' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA024ft,
	ROUND(SUM(pengenalan_perancangan_web='NA025' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA025ft,

		
	ROUND(SUM(fotografi='NA026' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA026ft,
	ROUND(SUM(fotografi='NA027' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA027ft,
	ROUND(SUM(fotografi='NA028' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA028ft,
	ROUND(SUM(fotografi='NA029' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA029ft,
	ROUND(SUM(fotografi='NA030' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA030ft,
	
	ROUND(SUM(multimedia='NA031' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA031ft,
	ROUND(SUM(multimedia='NA032' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA032ft,
	ROUND(SUM(multimedia='NA033' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA033ft,
	ROUND(SUM(multimedia='NA034' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA034ft,
	ROUND(SUM(multimedia='NA035' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA035ft,
	

	
	ROUND(SUM(komputer_grafis='NA036' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA036ft,
	ROUND(SUM(komputer_grafis='NA037' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA037ft,
	ROUND(SUM(komputer_grafis='NA038' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA038ft,
	ROUND(SUM(komputer_grafis='NA039' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA039ft,
	ROUND(SUM(komputer_grafis='NA040' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA040ft,
	
	ROUND(SUM(minat='NA043' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA043ft,
	ROUND(SUM(minat='NA044' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA044ft,
	ROUND(SUM(minat='NA045' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA045ft,
	
	ROUND(SUM(bakat='NA041' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA041ft,
	ROUND(SUM(bakat='NA042' AND konsentrasi='NA048')/SUM(konsentrasi='NA048'),2) NA042ft
	FROM tbl_datatraning")->result();
	return $query;
}


}
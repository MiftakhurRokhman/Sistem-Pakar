<?php 
 
class M_login extends CI_Model{
	function auth_mhs($username,$password){
        $query=$this->db->query("SELECT * FROM tbl_mhs WHERE username='$username' AND password='$password'");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ");
        return $query;
    }

}
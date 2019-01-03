<?php

class profilModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// Mengambil informasi file yang belum di cetak
	// ======================================================================================================
	public function dataPengguna($id_pengguna){
		$data=$this->db->query("SELECT * FROM pengguna WHERE pengguna.id_pengguna = '".$id_pengguna."'");
		return $data->result_array();
	}
}
?>
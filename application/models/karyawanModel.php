<?php

class karyawanModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function karyawan(){
		$sql = sprintf("SELECT * FROM pengguna WHERE id_level = 'lvl1'");
		$data=$this->db->query($sql);
    	return $data->result_array();
	}
	public function hapus($id){
		$sql = sprintf("DELETE FROM pengguna WHERE id_pengguna = '$id'");
		$data=$this->db->query($sql);

}
}

?>
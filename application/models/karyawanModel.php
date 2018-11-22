<?php

class karyawanModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function karyawan(){
		$sql = sprintf("SELECT * FROM pengguna WHERE ID_LEVEL = 'lvl1'");
		$data=$this->db->query($sql);
    	return $data->result_array();
	}
}
?>
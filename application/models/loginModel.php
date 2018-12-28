<?php
class loginModel extends CI_Model{
	public $namaPengguna;
	public $kataSandi;
	public $notif = "";

	// public $labels = [];

	public function __construct(){
		parent::__construct();
		// $this->labels = $this->_attributeLabels();
		$this->load->database();
	}

	public function cek_log(){
		$sql = sprintf("SELECT COUNT(*) AS nama_pengguna FROM pengguna WHERE nama_pengguna='%s' AND kata_sandi='%s'",
			$this->namaPengguna,
			$this->kataSandi);
		$query = $this->db->query($sql);
		$row = $query->row_array();
		return $row['nama_pengguna'] == 1;
		}

	public function getId(){
		$sql = sprintf("SELECT id_pengguna FROM pengguna WHERE nama_pengguna = '".$this->namaPengguna."'");
		$query = $this->db->query($sql);
		foreach ($query->result_array() as $data){
			return $data['id_pengguna'];	
		}
		
	}

	public function cek_level(){
		$sql = sprintf("SELECT id_level FROM pengguna WHERE nama_pengguna='%s'",$this->namaPengguna);
		$query = $this->db->query($sql);
		foreach ($query->result_array() as $hasil) {
			if($hasil['id_level']==lvl1){
				return 1;
			}
			elseif($hasil['id_level']==lvl2){
				return 2;
			}
		}
		
		}
	}

	/*private function _attributeLabels(){
		return [
			'username'=>'User :',
			'password'=>'Password :'];
	}*/
?>
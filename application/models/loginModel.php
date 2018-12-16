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
		$sql = sprintf("SELECT COUNT(*) AS NAMA_PENGGUNA FROM pengguna WHERE NAMA_PENGGUNA='%s' AND KATA_SANDI='%s'",
			$this->namaPengguna,
			$this->kataSandi);
		$query = $this->db->query($sql);
		$row = $query->row_array();
		return $row['NAMA_PENGGUNA'] == 1;
		}

	public function getId(){
		$sql = sprintf("SELECT id_pengguna FROM pengguna WHERE nama_pengguna = '".$this->namaPengguna."'");
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function cek_level(){
		$sql = sprintf("SELECT ID_LEVEL FROM pengguna WHERE NAMA_PENGGUNA='%s'",$this->namaPengguna);
		$query = $this->db->query($sql);
		foreach ($query->result_array() as $hasil) {
			if($hasil['ID_LEVEL']==lvl1){
				return 1;
			}
			elseif($hasil['ID_LEVEL']==lvl2){
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
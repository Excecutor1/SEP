<?php
class loginModel extends CI_Model{
	public $nama_pengguna;
	public $kata_sandi;
	public $notif = "";


	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// cek login
	// ===============================================================
	public function cek_log(){
		$sql = sprintf("SELECT COUNT(*) AS nama_pengguna FROM pengguna WHERE nama_pengguna='%s' AND kata_sandi='%s'",
			$this->nama_pengguna,
			$this->kata_sandi);
		$query = $this->db->query($sql);
		$row = $query->row_array();
		return $row['nama_pengguna'] == 1;
		}

	// Mengambil id_pengguna user yang login
	// ==============================================================
	public function getId(){
		$sql = sprintf("SELECT id_pengguna FROM pengguna WHERE nama_pengguna = '".$this->nama_pengguna."'");
		$query = $this->db->query($sql);
		foreach ($query->result_array() as $data){
			return $data['id_pengguna'];	
		}
	}

	// cek level pengguna yang login
	// ==============================================================
	public function cek_level(){
		$sql = sprintf("SELECT id_level FROM pengguna WHERE nama_pengguna='%s'",$this->nama_pengguna);
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
?>
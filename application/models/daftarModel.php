<?php
class daftarModel extends CI_Model{
	public $namaLengkap;
	public $namaPengguna;
	public $email;
	public $alamat;
	public $noTlp;
	public $kataSandi;

	

	// public $labels = [];

	public function __construct(){
		parent::__construct();
		// $this->labels = $this->_attributeLabels();
		$this->load->database();
	}

	public function daftar(){
		$data = array(
		'ID_LEVEL' => '2',
        'NAMA_LENGKAP' => $this->namaLengkap,
        'NAMA_PENGGUNA' => $this->namaPengguna,
        'EMAIL' => $this->email,
        'ALAMAT' => $this->alamat,
        'NO_TLP' => $this->noTlp,
        'KATA_SANDI' => $this->kataSandi
		);
		$this->db->insert('pengguna', $data);
		}
	}

	/*private function _attributeLabels(){
		return [
			'username'=>'User :',
			'password'=>'Password :'];
	}*/
?>
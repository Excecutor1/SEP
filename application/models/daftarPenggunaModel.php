<?php
class daftarPenggunaModel extends CI_Model{
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
		'id_level' => 'lvl2',
        'nama_lengkap' => $this->namaLengkap,
        'nama_pengguna' => $this->namaPengguna,
        'email' => $this->email,
        'alamat' => $this->alamat,
        'no_tlp' => $this->noTlp,
        'kata_sandi' => $this->kataSandi
		);
		$this->db->insert('pengguna', $data);
		}
	}


?>
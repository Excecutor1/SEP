<?php
class saldoModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// cek apakah id pengguna dan nama pengguna terdaftar di database
	// ========================================================================
	public function cekAkun($id_pengguna,$nama_pengguna){
		$sql = sprintf("SELECT COUNT(*) AS id_pengguna FROM pengguna WHERE id_pengguna='%s' AND nama_pengguna='%s'",
			$id_pengguna,
			$nama_pengguna);
		$query = $this->db->query($sql);
		$row = $query->row_array();
		return $row['id_pengguna'] == 1;
	}

	// menyimpan transaksi topup
	// ========================================================================
	public function simpanTopup($id_pengguna,$topup){
		$this->db->query("INSERT INTO transaksi (id_pengguna,id_jenis_transaksi,topup) VALUES ('$id_pengguna','tr2',$topup)");

		// mendapatkan saldo
		// ========================================================================
		$query = $this->db->query("SELECT saldo FROM pengguna WHERE id_pengguna = $id_pengguna");
		$saldo;
		foreach ($query->result_array() as $row) {
			$saldo = $row['saldo'];
		};

		// menjumlahkan saldo dengan topup
		// ======================================================================
		$hasil = $saldo + $topup;
		$data = array(
			'saldo' => $hasil,
		);
		$this->db->where('id_pengguna', $id_pengguna);
		$this->db->update('pengguna', $data);
	}

	public function transaksi(){
		$query = $this->db->query("SELECT * FROM transaksi JOIN pengguna JOIN jenis_transaksi WHERE pengguna.id_pengguna = transaksi.id_pengguna AND jenis_transaksi.id_jenis_transaksi = transaksi.id_jenis_transaksi ORDER BY transaksi.id_transaksi DESC");
		return $query->result_array();
	}
}
?>
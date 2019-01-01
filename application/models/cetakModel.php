<?php

class cetakModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// Mengambil informasi file yang belum di cetak
	// ======================================================================================================
	public function belumCetak(){
		$sql = sprintf("SELECT * FROM transaksi JOIN pengguna JOIN admin_online JOIN status JOIN cetak JOIN warna WHERE cetak.id_warna = warna.id_warna AND transaksi.id_pengguna = pengguna.id_pengguna AND cetak.id_transaksi = transaksi.id_transaksi AND transaksi.id_status = status.id_status AND transaksi.id_status = 1 ORDER BY transaksi.id_transaksi DESC");
		$data=$this->db->query($sql);
		return $data->result_array();
	}

    // Mengambil informasi file yang belum di cetak sesuai id transaksi
    // =======================================================================================================
	public function detailCetak($id){
		$sql = sprintf("SELECT * FROM transaksi JOIN pengguna JOIN admin_online JOIN status JOIN cetak JOIN kertas JOIN finishing JOIN warna JOIN berkas WHERE kertas.id_kertas = cetak.id_kertas AND finishing.id_finishing = cetak.id_finishing AND berkas.id_berkas = cetak.id_berkas AND cetak.id_warna = warna.id_warna AND transaksi.id_pengguna = pengguna.id_pengguna AND cetak.id_transaksi = transaksi.id_transaksi AND transaksi.id_status = status.id_status AND transaksi.id_status = 1 AND transaksi.id_transaksi = ".$id."");
		$data=$this->db->query($sql);
		return $data->result_array();
	}

    //  Mengambil informasi file yang sudah di cetak
    // ======================================================================================================

	public function sudahCetak(){
		$sql = sprintf("SELECT * FROM transaksi JOIN pengguna JOIN admin_online JOIN status WHERE transaksi.ID_PENGGUNA = pengguna.ID_PENGGUNA AND transaksi.id_admin = admin_online.ID_PENGGUNA AND transaksi.ID_STATUS = status.ID_STATUS AND transaksi.ID_STATUS = 2");
		$data=$this->db->query($sql);
		return $data->result_array();
	}
	public function jumlahBelumcetak(){
		$sql = sprintf("SELECT * FROM transaksi WHERE ID_STATUS = 1");
		$data=$this->db->query($sql);
		return $data->num_rows();
	}

	// Mengambil informasi jumlah file yang sudah di cetak
	// ======================================================================================================

	public function jumlahSudahcetak(){
		$sql = sprintf("SELECT * FROM transaksi WHERE ID_STATUS = 2");
		$data=$this->db->query($sql);
		return $data->num_rows();
	}

	// Membuka file yang dipilih
	// ======================================================================================================
	public function getFile($id){
		$query = $this->db->get_where('cetak', array('ID_CETAK' => $id));
		foreach ($query->result() as $data) {
			$file = "file/".$data->BERKAS;
			$nama = $data->BERKAS;
			header('Content-type: application/pdf');
			header('Content-Disposition: inline; filename="'.$nama.'"');
			header('Content-Length: ' . filesize($file));
			ob_clean();
			flush();
			@readfile($file);
		}	
	}

	// Selesai mencetak, merubah status dari 1 ke 2(sudah dicetak)
	// ======================================================================================================
	public function selesai($id){
		$data = array(
			'ID_STATUS' => 2,
		);
		$this->db->where('ID_transaksi', $id);
		$this->db->update('transaksi', $data);
		redirect('belumCetak');
	}

	// Mengambil informasi dari tabel warna
	// ======================================================================================================
	public function warna(){
		$sql = sprintf("SELECT * FROM warna");
		$warna=$this->db->query($sql);
		return $warna->result_array();
	}

	// Mengambil informasi dari tabel kertas
	// ======================================================================================================
	public function kertas(){
		$sql = sprintf("SELECT * FROM kertas");
		$kertas=$this->db->query($sql);

		return $kertas->result_array();
	}

	// Mengambil informasi dari tabel finishing
	// ======================================================================================================
	public function finishing(){
		$sql = sprintf("SELECT * FROM finishing");
		$finishing=$this->db->query($sql);
		return $finishing->result_array();
	}

	// Memasukkan nama berkas ke database dan mendapatkan id berkasnya
	// ======================================================================================================
	public function upload($nama){
		$data = array(
			'berkas' => $nama,
		);
		$this->db->insert('berkas',$data);
		$lastID = $this->db->insert_id();
		return $lastID;
	}

	// Menyimpan data cetak setelah pengguna selesai mencetak
	// ======================================================================================================
	public function simpanCetak($data){
		$this->db->query("INSERT INTO transaksi (id_pengguna) VALUES ('".$data['id_pengguna']."')");
		$id_transaksi = $this->db->insert_id();
		$this->db->query("INSERT INTO cetak (id_transaksi,id_berkas,id_kertas,id_warna,id_finishing,salinan,keterangan)
			VALUES ('".$id_transaksi."','".$data['id_berkas']."','".$data['id_kertas']."','".$data['id_warna']."','".$data['id_finishing']."','".$data['salinan']."','".$data['keterangan']."')");
		return $id_transaksi;
	}

	// hapus semua data di tabel cetak, transaksi, dan berkas
	// =================================================================
	public function clean(){
		$this->db->query("SET FOREIGN_KEY_CHECKS = 0;

			TRUNCATE 'cetak';
			TRUNCATE 'transaksi';
			TRUNCATE 'berkas';

			SET FOREIGN_KEY_CHECKS = 1;");
	}
}
?>
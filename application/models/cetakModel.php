<?php

class cetakModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function belumCetak(){
		$sql = sprintf("SELECT * FROM transaksi JOIN pengguna JOIN admin_online JOIN status WHERE transaksi.ID_PENGGUNA = pengguna.ID_PENGGUNA AND transaksi.id_admin = admin_online.ID_PENGGUNA AND transaksi.ID_STATUS = status.ID_STATUS AND transaksi.ID_STATUS = 1 ORDER BY transaksi.ID_transaksi DESC");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->result_array();
    }
	public function sudahCetak(){
		$sql = sprintf("SELECT * FROM transaksi JOIN pengguna JOIN admin_online JOIN status WHERE transaksi.ID_PENGGUNA = pengguna.ID_PENGGUNA AND transaksi.id_admin = admin_online.ID_PENGGUNA AND transaksi.ID_STATUS = status.ID_STATUS AND transaksi.ID_STATUS = 2");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->result_array();
	}
	public function jumlahBelumcetak(){
		$sql = sprintf("SELECT * FROM transaksi WHERE ID_STATUS = 1");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->num_rows();
	}
	public function jumlahSudahcetak(){
		$sql = sprintf("SELECT * FROM transaksi WHERE ID_STATUS = 2");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->num_rows();
	}
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
	public function selesai($id){
		$data = array(
        'ID_STATUS' => 2,
    	);
		$this->db->where('ID_transaksi', $id);
		$this->db->update('transaksi', $data);
		redirect('belumCetak');
	}
	public function warna(){
		$sql = sprintf("SELECT * FROM warna");
		$warna=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $warna->result_array();
	}
	public function kertas(){
		$sql = sprintf("SELECT * FROM kertas");
		$kertas=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $kertas->result_array();
	}
	public function finishing(){
		$sql = sprintf("SELECT * FROM finishing");
		$finishing=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $finishing->result_array();
	}
	public function upload($nama){
		$data = array(
        'berkas' => $nama,
    	);
		$this->db->insert('berkas',$data);
		// $lastID = $this->db->insert_id();
		// return $lastID;
	}
	public function lastID(){
		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$data = $query->result_array();
		return $data;
	}	
	public function simpanCetak($data){
		$this->db->query("INSERT INTO transaksi (id_pengguna) VALUES ('".$data['id_pengguna']."')");
		$id_transaksi = $this->db->insert_id();
		$this->db->query("INSERT INTO cetak (id_transaksi,id_berkas,id_kertas,id_warna,id_finishing,salinan,keterangan)
						VALUES ('".$id_transaksi."','".$data['id_berkas']."','".$data['id_kertas']."','".$data['id_warna']."','".$data['id_finishing']."','".$data['salinan']."','".$data['keterangan']."')");
	}
}
?>
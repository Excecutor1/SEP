<?php

class cetakModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
/*	public function belumCetak(){
		$sql = sprintf("SELECT * FROM cetak JOIN finishing JOIN pengguna JOIN tinta JOIN status JOIN kertas WHERE cetak.ID_Finishing = finishing.Id_finishing AND cetak.ID_PENGGUNA = pengguna.ID_PENGGUNA AND cetak.ID_warna = warna.ID_warna AND cetak.ID_KERTAS = kertas.ID_KERTAS AND ORDER BY cetak.ID_CETAK DESC");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->result_array();
	}
*/

	public function belumCetak(){
		$sql = sprintf("SELECT * FROM transaksi JOIN pengguna JOIN admin_online JOIN status WHERE transaksi.ID_PENGGUNA = pengguna.ID_PENGGUNA AND transaksi.id_admin = admin_online.ID_PENGGUNA AND transaksi.ID_STATUS = status.ID_STATUS AND transaksi.ID_STATUS = 1 ORDER BY transaksi.ID_transaksi DESC");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->result_array();
    }

/*	public function sudahCetak(){
		$sql = sprintf("SELECT * FROM cetak JOIN layanan JOIN pengguna JOIN tinta JOIN status JOIN kertas WHERE cetak.ID_LAYANAN = layanan.ID_LAYANAN AND cetak.ID_PENGGUNA = pengguna.ID_PENGGUNA AND cetak.ID_TINTA = tinta.ID_TINTA AND cetak.ID_STATUS = status.ID_STATUS AND cetak.ID_KERTAS = kertas.ID_KERTAS AND cetak.ID_STATUS = 2");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->result_array();
	}
*/
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
}
?>
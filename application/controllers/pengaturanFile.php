<?php
class pengaturanFile extends CI_Controller{

	public function __construct(){
    	    parent::__construct();
        	$this->load->library('session');
        	$this->load->helper('url');
            $this->load->model('cetakModel');
            $this->load->helper(array('form', 'url'));
    	}
	public function index(){
		$this->data['warna']=$this->cetakModel->warna();
		$this->data['kertas']=$this->cetakModel->kertas();
		$this->data['finishing']=$this->cetakModel->finishing();
		$this->data['nama_file'] = $this->session->userdata('nama_file');
		$this->data['error'] = $this->session->userdata('status');
		$this->load->view('pengaturanFileview', $this->data);//file view
	}
	public function simpan(){
		if (isset($_POST['btn_cetak'])) {
			// Menyimpan DATA CETAK
			// =============================================================
			$data['id_pengguna']=$this->session->userdata('id_pengguna');
			$data['id_berkas']=$this->session->userdata('id_berkas');
			$data['id_warna']=$_POST['id_warna'];
			$data['id_kertas']=$_POST['id_kertas'];
			$data['id_finishing']=$_POST['id_finishing'];
			$data['salinan']=$_POST['salinan'];
			$data['keterangan']=$_POST['keterangan'];
			$id_transaksi = $this->cetakModel->simpanCetak($data);
			$this->session->set_userdata('id_transaksi', $id_transaksi);
			redirect('konfirmasi');
			}	

	}
}
?>
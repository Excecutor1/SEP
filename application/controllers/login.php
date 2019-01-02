<?php
class login extends CI_Controller{
	//public $model = NULL;

	public function __construct(){
		parent::__construct();
		$this->load->model('loginModel');
		$this->model = $this->loginModel;
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index (){
		if (isset($_POST['btn_log'])) {
			$this->model->nama_pengguna = $_POST['nama_pengguna'];
			$this->model->kata_sandi = $_POST['kata_sandi'];
			if (($this->model->cek_log()==TRUE)&&($this->model->cek_level()==1)) {
				$this->session->set_userdata('nama_pengguna', $this->model->nama_pengguna);
				$this->session->set_userdata('level', "1");
				$id_pengguna = $this->model->getId();
				$this->session->set_userdata('id_pengguna', $data);
				redirect('admin');
				
			}
			elseif (($this->model->cek_log()==TRUE)&&($this->model->cek_level()==2)) {
				$this->session->set_userdata('nama_pengguna', $this->model->nama_pengguna);
				$this->session->set_userdata('level', "2");
				$id_pengguna = $this->model->getId();
				$this->session->set_userdata('id_pengguna', $id_pengguna);
				
				// Cek apakah di redirect dari halaman lain
				// =======================================================
				if($this->session->has_userdata('redirect')){
					$redirect = $this->session->userdata('redirect');
					$this->session->userdata('redirect', null);
					// kembalikan ke halaman sebelumnya
					// ===============================================
					redirect($redirect);
				}else{
					redirect('home');
				}
				// ======================================================
			}else{
				$this->model->notif = "Nama Pengguna dan Kata Sandi yang anda masukkan salah";
				$this->load->view('loginView', ['model'=>$this->model]);
			}
		}else{
			$this->alert = $this->session->flashdata('alert');
			$this->load->view('loginView', ['model'=>$this->model], $this->alert);
		}
	}
}
?>
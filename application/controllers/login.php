<?php
class login extends CI_Control
ler{
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
			$this->model->namaPengguna = $_POST['namaPengguna'];
			$this->model->kataSandi = $_POST['kataSandi'];
			if (($this->model->cek_log()==TRUE)&&($this->model->cek_level()==1)) {
				$this->session->set_userdata('namaPengguna', $this->model->namaPengguna);
				$this->session->set_userdata('level', "1");
				redirect('admin');
			}
			elseif (($this->model->cek_log()==TRUE)&&($this->model->cek_level()==2)) {
				$this->session->set_userdata('namaPengguna', $this->model->namaPengguna);
				$this->session->set_userdata('level', "2");
				
				redirect('home');
			}else{

				$this->model->notif = "Nama Pengguna dan Kata Sandi yang anda masukkan salah";
				$this->load->view('loginView', ['model'=>$this->model]);
			}
		}else{
			$this->load->view('loginView', ['model'=>$this->model]);
		}
	}
}
?>
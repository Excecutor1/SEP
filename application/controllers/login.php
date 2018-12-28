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
<<<<<<< HEAD
=======
				$id_pengguna = $this->model->getId();
				// $data = print_r($id_pengguna['id_pengguna']);
				$this->session->set_userdata('id_pengguna', $data);
>>>>>>> 4b099776a622ba5a25e109356729d61f6cd5fbfc
				redirect('admin');
			}
			elseif (($this->model->cek_log()==TRUE)&&($this->model->cek_level()==2)) {
				$this->session->set_userdata('namaPengguna', $this->model->namaPengguna);
				$this->session->set_userdata('level', "2");
<<<<<<< HEAD
				
=======
				$id_pengguna = $this->model->getId();
				// $data = print_r($id_pengguna['id_pengguna']);
				$this->session->set_userdata('id_pengguna', $id_pengguna);
>>>>>>> 4b099776a622ba5a25e109356729d61f6cd5fbfc
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
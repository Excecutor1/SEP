<?php
class daftarPengguna extends CI_Controller{
	//public $model = NULL;

	public function __construct(){
		parent::__construct();
		$this->load->model('daftarPenggunaModel');
		$this->model = $this->daftarPenggunaModel;
		$this->load->helper('url');
	}

	public function index (){
		if (isset($_POST['btn_log'])) {
            $this->model->namaPengguna = $_POST['namaPengguna'];
            $this->model->namaLengkap = $_POST['namaLengkap'];
            $this->model->email = $_POST['email'];
            $this->model->alamat = $_POST['alamat'];
            $this->model->noTlp = $_POST['noTlp'];
            $this->model->kataSandi = $_POST['kataSandi'];
            $this->model->daftar();
            $alert = '<div class="alert alert-success alert-st-one" role="alert">Anda berhasil mendaftar</div>';
            $this->session->set_flashdata('alert', $alert);
            redirect('login');
            }
            else{
                $this->load->view('daftarPenggunaView');
            }
		}
	}
	  


?>
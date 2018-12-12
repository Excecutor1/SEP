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
            redirect('login');
            }
            else{
                $this->load->view('daftarPenggunaView');
            }
		}
	}
	  


?>
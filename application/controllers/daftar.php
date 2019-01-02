<?php
class daftar extends CI_Controller{
	//public $model = NULL;

	public function __construct(){
		parent::__construct();
		$this->load->model('daftarModel');
		$this->model = $this->daftarModel;
		$this->load->helper('url');
	}

	public function index (){
		if ($this->session->has_userdata('nama_pengguna')) {
           if (isset($_POST['btn_log'])) {
            $this->model->namaPengguna = $_POST['namaPengguna'];
            $this->model->namaLengkap = $_POST['namaLengkap'];
            $this->model->email = $_POST['email'];
            $this->model->alamat = $_POST['alamat'];
            $this->model->noTlp = $_POST['noTlp'];
            $this->model->kataSandi = $_POST['kataSandi'];
            $this->model->daftar();
            redirect('admin');
            }
            else{
                $this->load->view('daftarView');
            }
    		}
    	else{
        	redirect('login');
    		}
		}
	}
	  


?>
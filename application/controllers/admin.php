<?php
class admin extends CI_Controller{
	public function __construct(){
    	    parent::__construct();
        	//$this->load->model('loginModel');
        	//$this->model = $this->loginModel;
        	$this->load->library('session');
        	$this->load->helper('url');
    	}

    public function index(){
		if ($this->session->has_userdata('namaPengguna')) {
            $this->load->model('cetakModel');
            $this->jumlah1 = $this->cetakModel->jumlahBelumcetak();
            $this->jumlah2 = $this->cetakModel->jumlahSudahcetak();
            $this->pengguna = $this->session->userdata;
            $this->level = $this->session->userdata('level');
        	$this->load->view('adminView', $this->jumlah1, $this->jumlah2, $this->pengguna, $this->level);
    		}
    	else{
        	redirect('login');
    		}
		}
    public function jumlah1(){
        $this->load->model('cetakModel');
        $this->jumlah1 = $this->cetakModel->jumlahBelumcetak();
        echo $this->jumlah1;
    }
    public function jumlah2(){
        $this->load->model('cetakModel');
        $this->jumlah2 = $this->cetakModel->jumlahSudahcetak();
        echo $this->jumlah2;
    }
}
?>
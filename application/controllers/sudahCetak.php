<?php
class sudahCetak extends CI_Controller{
	public function __construct(){
    	    parent::__construct();
        	$this->load->library('session');
        	$this->load->helper('url');
    	}

    public function index(){
    	$this->load->model('cetakModel');
    	$this->data['hasil']=$this->cetakModel->sudahCetak();
        $this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
		$this->load->view('sudahCetakview', $this->data, $this->level, $this->pengguna);
		}
    public function tabel(){
        $this->data['hasil']=$this->cetakModel->belumCetak();
        $this->load->view('sudahcetakTabel', $this->data);
    }
}
?>
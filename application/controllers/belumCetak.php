<?php
class belumCetak extends CI_Controller{
	public function __construct(){
    	    parent::__construct();
        	$this->load->library('session');
        	$this->load->helper('url');
            $this->load->model('cetakModel');
    	}

    public function index(){
    	$this->data['hasil']=$this->cetakModel->belumCetak();
		$this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
        $this->load->view('belumCetakview', $this->data, $this->level, $this->pengguna);
		}
    public function lihatFile(){
        $id = $this->uri->segment(3);
        $this->cetakModel->getFile($id);
    }
    public function selesaiCetak(){
        $id = $this->uri->segment(3);
        $this->cetakModel->selesai($id);
    }
    public function tabel(){
        $this->data['hasil']=$this->cetakModel->belumCetak();
        $this->load->view('belumcetakTabel', $this->data);
    }
}
?>
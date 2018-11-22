<?php
class karyawan extends CI_Controller{
	public function __construct(){
    	    parent::__construct();
        	$this->load->library('session');
        	$this->load->helper('url');
            $this->load->model('karyawanModel');
    	}

    public function index(){
    	$this->data['hasil']=$this->karyawanModel->karyawan();
        $this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
		$this->load->view('karyawanView', $this->data, $this->level, $this->pengguna);
		}
    public function lihatKaryawan(){
        $id = $this->uri->segment(3);
        $this->cetakModel->getFile($id);
    }
    public function hapusKaryawan(){
        $id = $this->uri->segment(3);
        $this->cetakModel->selesai($id);
    }
}
?>
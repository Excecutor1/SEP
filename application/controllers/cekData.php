<?php
class cekData extends CI_Controller{
	//public $model = NULL;

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('cetakModel');
		$this->load->helper('url');
	}

	public function index (){
		$a=$this->session->userdata('id_berkas');
		// $s="asdf";
		$data = array('hasil' => $a);
		$this->load->view('cekDataview', $data);
	}

	public function clean(){
		$this->cetakModel->clean();
		redirect('cekData');
	}
}
?>
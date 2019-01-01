<?php
class home extends CI_Controller{
	public function __construct(){
    	    parent::__construct();
        	$this->load->library('session');
        	$this->load->helper('url');
    	}

    public function index(){
    	// cek apakah sudah login
        if ($this->session->has_userdata('nama_pengguna')) {
            $this->login = 1;
        }else{
            $this->login = 0;
        }
        // membuat array nama file dan status upload di session
        $this->session->set_userdata('nama_file', null);
        $this->session->set_userdata('status', null);
		$this->load->view("homeView",$this->login);
    }
}
?>
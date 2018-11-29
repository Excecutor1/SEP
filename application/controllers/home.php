<?php
class home extends CI_Controller{
	public function __construct(){
    	    parent::__construct();
        	//$this->load->model('loginModel');
        	//$this->model = $this->loginModel;
        	$this->load->library('session');
        	$this->load->helper('url');
    	}

    public function index(){
        if ($this->session->has_userdata('namaPengguna')) {
            $this->online = 1;
        }else{
            $this->online = 0;
        }
            $this->session->set_userdata('namaFile', null);
            $this->session->set_userdata('status', null);
		$this->load->view("homeView",$this->online);
    }
}
?>
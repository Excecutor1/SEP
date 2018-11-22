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
		$this->load->view("homeView");
    }
}
?>
<?php
class logout extends CI_Controller{
	public $model = NULL;

	public function __construct(){
		parent::__construct();
		$this->load->model('loginModel');
		$this->model = $this->loginModel;
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index (){
		$this->pengguna = $this->session->userdata;
		if ($this->pengguna['level']==1){
				$this->level = 1;
			}elseif ($this->pengguna['level']==2){
			$this->level = 2;
			}
		if ($this->session->has_userdata('namaPengguna')) {
			$this->session->sess_destroy();
			if ($this->level == 1){
				redirect('login');
				}elseif ($this->level == 2){
					echo $this->level;
				redirect('home',$this->message);
				
				}
		}else{
			redirect('login');
				$message = "Anda berhasil LOGOUT";
                echo "<script type='text/javascript'>alert('$message');</script>";
		}

	}


}
?>
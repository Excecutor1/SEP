<?php
class mulaiCetak extends CI_Controller{

	public function __construct(){
    	    parent::__construct();
        	$this->load->library('session');
        	$this->load->helper('url');
            $this->load->model('cetakModel');
            $this->load->helper(array('form', 'url'));
    	}
	public function index(){
		$this->data['warna']=$this->cetakModel->warna();
		$this->data['kertas']=$this->cetakModel->kertas();
		$this->data['finishing']=$this->cetakModel->finishing();
		$this->load->view('mulaiCetakview', array('error' => ' ' ), $this->data);//file view
	}

	 public function do_upload()
        {
                $config['upload_path']          = 'file/';
                $config['allowed_types']        = 'doc|docx|pdf';
                $config['max_size']             = 1000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->load->view('upload_success', $data);
                }
        }
}
?>
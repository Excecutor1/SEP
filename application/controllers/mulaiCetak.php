<?php
class mulaiCetak extends CI_Controller{

	public function __construct(){
    	    parent::__construct();
        	$this->load->library('session');
        	$this->load->helper('url');
            $this->load->model('cetakModel');
            $this->load->helper(array('form', 'url'));
            $config['upload_path']          = 'file/';
            $config['allowed_types']        = 'doc|docx|pdf';
            $config['max_size']             = 1000;

            $this->load->library('upload', $config);
    	}
	public function index(){
		$this->data['warna']=$this->cetakModel->warna();
		$this->data['kertas']=$this->cetakModel->kertas();
		$this->data['finishing']=$this->cetakModel->finishing();
		$this->data['namaFile'] = $this->upload->data('file_name');
		$this->data['error'] = $this->upload->display_errors();

		$this->load->view('mulaiCetakview', $this->data);//file view
	}

	 public function do_upload()
        {
                if ( ! $this->upload->do_upload('userfile'))
                {
                        redirect('mulaiCetak');
                }
                else
                {       
                        redirect('mulaiCetak');
                }
        }
}
?>
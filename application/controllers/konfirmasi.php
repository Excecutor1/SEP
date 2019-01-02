<?php
class konfirmasi extends CI_Controller{

	public function __construct(){
       parent::__construct();
       $this->load->library('session');
       $this->load->helper('url');
       $this->load->model('cetakModel');
            /* $this->load->helper(array('form', 'url'));
            $config['upload_path']          = 'file/';
            $config['allowed_types']        = 'doc|docx|pdf';
            $config['max_size']             = 1000;
            $this->load->library('upload', $config);*/
        }
        public function index(){
            $id = $this->session->userdata('id_pengguna');
            $this->data['cetak'] = $this->cetakModel->detailCetak2($id);
            $this->load->view('konfirmasiView', $this->data);
      }

  }
  ?>
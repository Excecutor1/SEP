<?php
class profil extends CI_Controller{

	public function __construct(){
   parent::__construct();
   $this->load->library('session');
   $this->load->helper('url');
   $this->load->model('profilModel');
            /* $this->load->helper(array('form', 'url'));
            $config['upload_path']          = 'file/';
            $config['allowed_types']        = 'doc|docx|pdf';
            $config['max_size']             = 1000;
            $this->load->library('upload', $config);*/
          }
          public function index(){
          $id_pengguna = $this->session->userdata('id_pengguna');
          $this->data['dataPengguna'] = $this->profilModel->dataPengguna($id_pengguna);
          $this->load->view('profilView', $this->data);
        }

      }
      ?>
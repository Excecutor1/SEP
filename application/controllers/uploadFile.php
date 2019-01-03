<?php
class uploadFile extends CI_Controller{

	public function __construct(){
    	    parent::__construct();
        	$this->load->library('session');
        	$this->load->helper('url');
            $this->load->model('cetakModel');
            $this->load->helper(array('form', 'url'));
            $config['upload_path']          = 'file/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 1000;

            $this->load->library('upload', $config);
    	}

	public function index(){
        if($this->session->has_userdata('nama_pengguna')){
		$this->data['nama_file'] = $this->session->userdata('nama_file');
		$this->data['error'] = $this->session->userdata('status');
		$this->load->view('uploadView', $this->data);//file view
        }
        else{
            $alert = '<div class="alert alert-success alert-st-one" role="alert">Anda harus login dulu</div>';
            $this->session->set_flashdata('alert', $alert);

            // set userdata redirect
            // ==========================================================
            $this->session->set_userdata('redirect', 'uploadFile');
            // ==========================================================
            redirect('login');
        }
	}

	 public function do_upload()
        {
                if ( ! $this->upload->do_upload('userfile'))
                {
                        // set userdata status dengan error upload file
                        $this->session->set_userdata('status', $this->upload->display_errors());
                        redirect('upload_file');
                }
                else
                {      
                        // memasukkan nama file ke database
                        $nama = $this->upload->data('file_name');
                        $data = $this->cetakModel->upload($nama);

                        // set id berkas, nama file, dan status upload
                        $this->session->set_userdata('id_berkas', $data);
                		$this->session->set_userdata('nama_file', '<i class="fa fa-check" style="margin-left: 13px"> </i>'.$nama);
                        $this->session->set_userdata('status', '<i class="fa fa-check" style="margin-left: 13px"> </i> File berhasil di Upload');

                        // redirect ke pengaturan file
                        redirect('pengaturanFile');
                }
        }
}
?>
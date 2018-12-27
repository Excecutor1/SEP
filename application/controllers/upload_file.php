<?php
class uploadFile extends CI_Controller{

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
		$this->data['namaFile'] = $this->session->userdata('namaFile');
		$this->data['error'] = $this->session->userdata('status');
		$this->load->view('uploadView', $this->data);//file view
	}

	 public function do_upload()
        {
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $this->session->set_userdata('status', $this->upload->display_errors());
                        redirect('upload_file');
                }
                else
                {       
                        $nama = $this->upload->data('file_name');
                        $data = $this->cetakModel->upload($nama);
                        $id = $this->model->lastID();
                        $id_berkas = print_r($id['2'])
                		$this->session->set_userdata('id_berkas', $id_berkas);
                        $this->session->set_userdata('namaFile', '<i class="fa fa-check" style="margin-left: 13px"> </i>  '.$nama);
                        $this->session->set_userdata('status', '<i class="fa fa-check" style="margin-left: 13px"> </i> File berhasil di Upload');
                        redirect('pengaturanFile');
                }
        }
}
?>
<?php
class saldo extends CI_Controller{
	public function __construct(){
       parent::__construct();
        	//$this->load->model('loginModel');
        	//$this->model = $this->loginModel;
       $this->load->library('session');
       $this->load->model('saldoModel');
       $this->load->helper('url');
   }

   public function index(){
    if ($this->session->has_userdata('nama_pengguna')) {
        // set variable dari flashdata untuk ditampilkan di view
        // ===========================================================================
        $this->id_pengguna = $this->session->flashdata('cek_id_pengguna');
        $this->nama_pengguna = $this->session->flashdata('cek_nama_pengguna');
        $this->alert = $this->session->flashdata('alert');
        // ==========================================================================
        $this->pengguna = $this->session->userdata;
        $this->level = $this->session->userdata('level');
        // mengambil data transaksi topup
        // ==========================================================================
        $this->data['transaksi'] = $this->saldoModel->transaksi();
        $this->load->view('saldoView', $this->data, $this->pengguna, $this->level, $this->id_pengguna, $this->nama_pengguna, $this->alert);
    }
    else{
        $alert = '<div class="alert alert-success alert-st-one" role="alert">Anda harus login dulu</div>';
        $this->session->set_flashdata('alert', $alert);
        redirect('login');
    }
}

public function cek(){
    if (isset($_POST['cek'])) {
        $id_pengguna = $_POST['id_pengguna'];
        $nama_pengguna = $_POST['nama_pengguna'];
        if ($this->saldoModel->cekAkun($id_pengguna,$nama_pengguna) == TRUE) {
            // set flashdata
            $this->session->set_flashdata('cek_id_pengguna', $id_pengguna);
            $this->session->set_flashdata('cek_nama_pengguna', $nama_pengguna);
            $this->session->set_flashdata('alert', 'Id pengguna dan Nama pengguna cocok');
            redirect('saldo');
        }
        else{
            $this->session->set_flashdata('alert', 'Id pengguna dan Nama pengguna tidak cocok');
            redirect('saldo');
        }

    }
}

public function topup(){
    if (isset($_POST['topup'])) {
        // mengambil jumlah topup
        // ============================================
        $topup = $_POST['jumlahTopup'];

        // mengambil id pengguna
        // ============================================
        $id_pengguna = $this->uri->segment(3);

        if ($id_pengguna != NULL) {
            // proses topup
            // ============================================
            $this->saldoModel->simpanTopup($id_pengguna,$topup);
            redirect('saldo');
        }else{
            $this->session->set_flashdata('alert', 'Mohon isi Form ini terlebih dahulu');
            redirect('saldo');   
        }
    }

}

}
?>
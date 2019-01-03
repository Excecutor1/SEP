<?php
class belumCetak extends CI_Controller{
	public function __construct(){
    	    parent::__construct();
        	$this->load->library('session');
        	$this->load->helper('url');
            $this->load->model('cetakModel');
    	}

    public function index(){
    	$this->data['hasil']=$this->cetakModel->belumCetak();
		$this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
        $this->load->view('belumCetakview', $this->data, $this->level, $this->pengguna);
		}
        // membuka file yang di upload sesuai id
        // ========================================================
    public function lihatFile(){
        $id_berkas = $this->uri->segment(3);
        $this->cetakModel->getFile($id_berkas);
    }

        // selesai mencetak
        // ========================================================
    public function selesaiCetak(){
        $id = $this->uri->segment(3);
        $this->cetakModel->selesai($id);
    }

        // halaman detail
        // ========================================================
    public function detail(){
        $id_transaksi = $this->uri->segment(3);
        $this->data['hasil']=$this->cetakModel->detailCetak($id_transaksi);
        $this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
        $this->alert = $this->session->flashdata('alert');
        $this->load->view('detailView', $this->data, $this->level, $this->pengguna, $this->alert);
    }

        // halaman input harga
        // ========================================================
    public function harga(){
        $this->id_transaksi = $this->uri->segment(3);
        $this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
        $this->load->view('hargaView', $this->level, $this->pengguna, $this->id_transaksi);
    }

        // halaman simpan harga, cek saldo apakah cukup
        // ======================================================
    public function simpanHarga(){
        if (isset($_POST['simpan'])) {
            $harga = $_POST['harga'];
            $id_transaksi = $this->uri->segment(3);
            // simpan harga ke database
            // ======================================================
            $this->cetakModel->simpanHarga($id_transaksi,$harga);
            // mengambil saldo pengguna
            // =======================================================
            $saldo = $this->cetakModel->getSaldo($id_transaksi);
            // cek apakah saldo masih ada sisa/cukup
            // =======================================================
            if (($saldo-$harga)>=0) {
                redirect('belumCetak/cetak/'.$id_transaksi.'');
            // cek apakah saldo kurang
            // =======================================================
            }elseif (($saldo-$harga)<0) {
                $this->cetakModel->saldoTidakcukup($id);
                $alert = '<div class="alert alert-danger alert-st-one" role="alert">Saldo tidak cukup</div>';
                $this->session->set_flashdata('alert', $alert);
                redirect('belumCetak/detail/'.$id_transaksi.'');
            }

        }
    }
    public function cetak(){
        $id_transaksi = $this->uri->segment(3);
        $this->data['hasil']=$this->cetakModel->detailCetak($id_transaksi);
        $this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
        $this->cetakModel->bayar($id_transaksi);
        $this->load->view('cetakView', $this->data, $this->level, $this->pengguna);   
    }
    public function tabel(){
        $this->data['hasil']=$this->cetakModel->belumCetak();
        $this->load->view('belumcetakTabel', $this->data);
    }
}
?>
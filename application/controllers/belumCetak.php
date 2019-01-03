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
        $id = $this->uri->segment(3);
        $this->cetakModel->getFile($id);
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
        $id = $this->uri->segment(3);
        $this->data['hasil']=$this->cetakModel->detailCetak($id);
        $this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
        $this->alert = $this->session->flashdata('alert');
        $this->load->view('detailView', $this->data, $this->level, $this->pengguna, $this->alert);
    }

        // halaman input harga
        // ========================================================
    public function harga(){
        $this->id = $this->uri->segment(3);
        $this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
        $this->load->view('hargaView', $this->level, $this->pengguna, $this->id);
    }

        // halaman simpan harga, cek saldo apakah cukup
        // ======================================================
    public function simpanHarga(){
        if (isset($_POST['simpan'])) {
            $harga = $_POST['harga'];
            $id = $this->uri->segment(3);
            // simpan harga ke database
            // ======================================================
            $this->cetakModel->simpanHarga($id,$harga);
            // mengambil saldo pengguna
            // =======================================================
            $saldo = $this->cetakModel->getSaldo($id);
            // cek apakah saldo masih ada sisa/cukup
            // =======================================================
            if (($saldo-$harga)>=0) {
                redirect('belumCetak/cetak/'.$id.'');
            // cek apakah saldo kurang
            // =======================================================
            }elseif (($saldo-$harga)<0) {
                $this->cetakModel->saldoTidakcukup($id);
                $alert = '<div class="alert alert-danger alert-st-one" role="alert">Saldo tidak cukup</div>';
                $this->session->set_flashdata('alert', $alert);
                redirect('belumCetak/detail/'.$id.'');
            }

        }
    }
    public function cetak(){
        $id = $this->uri->segment(3);
        $this->data['hasil']=$this->cetakModel->detailCetak($id);
        $this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
        $this->cetakModel->bayar($id);
        $this->load->view('cetakView', $this->data, $this->level, $this->pengguna);   
    }
    public function tabel(){
        $this->data['hasil']=$this->cetakModel->belumCetak();
        $this->load->view('belumcetakTabel', $this->data);
    }
}
?>
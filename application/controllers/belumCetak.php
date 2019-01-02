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
    public function lihatFile(){
        $id = $this->uri->segment(3);
        $this->cetakModel->getFile($id);
    }
    public function selesaiCetak(){
        $id = $this->uri->segment(3);
        $this->cetakModel->selesai($id);
    }
    public function detail(){
        $id = $this->uri->segment(3);
        $this->data['hasil']=$this->cetakModel->detailCetak($id);
        $this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
        $this->alert = $this->session->flashdata('alert');
        $this->load->view('detailView', $this->data, $this->level, $this->pengguna, $this->alert);
    }
    public function harga(){
        $this->id = $this->uri->segment(3);
        $this->level = $this->session->userdata('level');
        $this->pengguna = $this->session->userdata;
        $this->load->view('hargaView', $this->level, $this->pengguna, $this->id);
    }
    public function simpanHarga(){
        if (isset($_POST['simpan'])) {
            $harga = $_POST['harga'];
            $id = $this->uri->segment(3);
            $saldo = $this->cetakModel->getSaldo($id);
            if (($saldo-$harga)>=0) {
                redirect('belumCetak/cetak/'.$id.'');
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
        $this->load->view('cetakView', $this->data, $this->level, $this->pengguna);   
    }
    public function tabel(){
        $this->data['hasil']=$this->cetakModel->belumCetak();
        $this->load->view('belumcetakTabel', $this->data);
    }
}
?>
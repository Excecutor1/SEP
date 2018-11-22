<?php
class Controller extends CI_Controller{
	public function index(){
	//c3 - memuat model "Tugas"
	$this->load->model('Tugas');

	//pengambilan objek dari kolom Tugas dan dimuat di var $model
	$model = $this->Tugas;

	//mengambil data dari model
	$a = $model->txt;
	echo $a;
	
	

	
}
}
?>
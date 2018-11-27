<?php
class cetak2 extends CI_Controller{
	public function index(){
		//echo "<h2>Hello Word CI!</h2>";

		//memanggil file view
		$this->load->view('cetakView2');//file view
	}
}
?>
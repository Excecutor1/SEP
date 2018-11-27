<?php
class cetakModel2 extends CI_Model{
	public $warna;
	public $kertas;
	public $finishing;
	public $salinan;

	

	// public $labels = [];

	public function __construct(){
		parent::__construct();
		// $this->labels = $this->_attributeLabels();
		$this->load->database();
	}

	
	}

	/*private function _attributeLabels(){
		return [
			'username'=>'User :',
			'password'=>'Password :'];
	}*/
?>
<?php
class cobaModel extends CI_model{
	public function __construct(){
		parent::__construct();

		$this->load->database();
	}
	public function index(){
		$query=$this->db->query("SELECT * FROM level");
		return $query->result();
	}
}
?>
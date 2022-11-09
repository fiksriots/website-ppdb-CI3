<?php 

class Dashboard extends CI_Controller
{
	public function index()
	{
		$pendaftar = $this->db->query("SELECT * FROM akun where role_id = '1'")->result();
		// $j_pendaftar =$pendaftar->num_rows();
		// var_dump($j_pendaftar);
		// $data['j_pendaftar'] =$jp;
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/dashboard');
		$this->load->view('templates/footer_admin');
	}
}
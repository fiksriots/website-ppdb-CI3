<?php 

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['info_jurusan'] = $this->ppdb_model->get_data('info_jurusan')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_pendaftar');
		$this->load->view('pendaftar/dashboard',$data);
		$this->load->view('templates/footer_admin');
	}
}
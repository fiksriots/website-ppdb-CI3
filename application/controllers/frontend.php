<?php

class frontend extends CI_Controller
{
	public function index()
	{
		$data['info_pembayaran'] = $this->ppdb_model->get_data('info_pembayaran')->result();
		$data['info_gelombang'] = $this->ppdb_model->get_data('info_gelombang')->result();
		$data['info_sekolah'] = $this->ppdb_model->get_data('info_sekolah')->result();
		$this->load->view('templates/header_frontend');
		$this->load->view('templates/navbar_frontend');
		$this->load->view('frontend/index' ,$data);
		$this->load->view('templates/footer_frontend');
	}

	public function about()
	{
		$this->load->view('frontend/about');
	}
	public function contact()
	{
		$this->load->view('frontend/contact');
	}
	public function event()
	{
		$this->load->view('frontend/event');
	}
	public function login()
	{
		$this->load->view('frontend/login');
	}
}

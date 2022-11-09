<?php 

class Data_nilai extends CI_Controller
{
	public function index()
	{
		$data['ujian'] = $this->db->query("SELECT * FROM ujian u,akun a where u.id_ujian=a.id_ujian")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/data_nilai',$data);
		$this->load->view('templates/footer_admin');
	}
	public function excel()
	{
		$data['title'] = 'Data Nilai';
		$data['sNilai'] = $this->db->query("SELECT * FROM ujian u,akun a where u.id_ujian=a.id_ujian")->result_array();
		$this->load->view('excel/nilai', $data);
	}
	
	
}


?>
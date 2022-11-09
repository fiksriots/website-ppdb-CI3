<?php 

class data_lampiran extends CI_Controller
{
	public function index()
	{
		$data['lampiran'] = $this->db->query("SELECT * FROM lampiran")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/data_lampiran',$data);
		$this->load->view('templates/footer_admin');
	}
	
	
}


?>
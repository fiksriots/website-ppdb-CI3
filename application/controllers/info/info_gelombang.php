<?php

class info_gelombang extends CI_Controller
{
	public function index()
	{
		$data['info_gelombang'] = $this->ppdb_model->get_data('info_gelombang')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('info/info_gelombang', $data);
		$this->load->view('templates/footer_admin');
	}
	public function tambah_info_gelombang()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('info/form_tambah_info_gelombang');
		$this->load->view('templates/footer_admin');
	}
	public function tambah_info_gelombang_aksi()
	{
		$gelombang		= $this->input->post('gelombang');
		$dari	= $this->input->post('dari');
		$sampai		= $this->input->post('sampai');

		$data = array(
			'gelombang'				=> $gelombang,
			'dari'			=> $dari,
			'sampai'			=> $sampai,
			'status'		=> $status

		);

		$this->ppdb_model->insert_data($data, 'info_gelombang');
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data Gelombang Berhasil Ditambahkan !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('info/info_gelombang');
	}


	public function update_info_gelombang($id)
	{
		$where = array('id' => $id);
		$data['info_gelombang'] = $this->db->query("SELECT * FROM info_gelombang WHERE id_gelombang='$id' ")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('info/form_update_info_gelombang', $data);
		$this->load->view('templates/footer_admin');
	}
	public function update_info_gelombang_aksi()
	{
		$id_gelombang 		= $this->input->post('id_gelombang');
		$gelombang		= $this->input->post('gelombang');
		$dari	= $this->input->post('dari');
		$sampai		= $this->input->post('sampai');
		$status		= $this->input->post('status');
		$data = array(
			'gelombang'				=> $gelombang,
			'dari'			=> $dari,
			'sampai'			=> $sampai,
			'status'		=> $status

		);
		//var_dump($data);
		//$where = ('id_info_gelombang' => $id);
		$this->ppdb_model->update_data_gelombang('info_gelombang', $data, $id_gelombang);
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data Gelombang Berhasil Diubah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('info/info_gelombang');
	}





	public function delete_info_gelombang($id)
	{
		$where = array('id_gelombang'	=>	$id);
		$this->ppdb_model->delete_data($where, 'info_gelombang');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Gelombang Berhasil Dihapus !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('info/info_gelombang');
	}
}

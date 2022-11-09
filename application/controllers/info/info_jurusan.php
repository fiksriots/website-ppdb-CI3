<?php

class info_jurusan extends CI_Controller
{
	public function index()
	{
		$data['info_jurusan'] = $this->ppdb_model->get_data('info_jurusan')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('info/info_jurusan', $data);
		$this->load->view('templates/footer_admin');
	}
	public function tambah_info_jurusan()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('info/form_tambah_info_jurusan');
		$this->load->view('templates/footer_admin');
	}
	public function tambah_info_jurusan_aksi()
	{
		$nama_jurusan		= $this->input->post('nama_jurusan');
		$kode_jurusan	= $this->input->post('kode_jurusan');
		$kuota_siswa		= $this->input->post('kuota_siswa');
		$siswa_mendaftar	= $this->input->post('siswa_mendaftar');

		$data = array(
			'nama_jurusan'				=> $nama_jurusan,
			'kode_jurusan'			=> $kode_jurusan,
			'kuota_siswa'			=> $kuota_siswa,
			'siswa_mendaftar'		=> $siswa_mendaftar

		);

		$this->ppdb_model->insert_data($data, 'info_jurusan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data jurusan Berhasil Ditambahkan !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('info/info_jurusan');
	}


	public function update_info_jurusan($id)
	{
		$where = array('id_jurusan' => $id);
		$data['info_jurusan'] = $this->db->query("SELECT * FROM info_jurusan WHERE id_jurusan='$id' ")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('info/form_update_info_jurusan', $data);
		$this->load->view('templates/footer_admin');
	}
	public function update_info_jurusan_aksi()
	{
		$id_jurusan 		= $this->input->post('id_jurusan');
		$nama_jurusan		= $this->input->post('nama_jurusan');
		$kode_jurusan		= $this->input->post('kode_jurusan');
		$kuota_siswa		= $this->input->post('kuota_siswa');
		$siswa_mendaftar	= $this->input->post('siswa_mendaftar');

		$data = array(
			'nama_jurusan'			=> $nama_jurusan,
			'kode_jurusan'			=> $kode_jurusan,
			'kuota_siswa'			=> $kuota_siswa,
			'siswa_mendaftar'		=> $siswa_mendaftar

		);
		//$where = ('id_info_jurusan' => $id);
		$this->ppdb_model->update_data_jurusan('info_jurusan', $data, $id_jurusan);
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data jurusan Berhasil Diubah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('info/info_jurusan');
	}





	public function delete_info_jurusan($id)
	{
		$where = array('id_jurusan'	=>	$id);
		$this->ppdb_model->delete_data($where, 'info_jurusan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data jurusan Berhasil Dihapus !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('info/info_jurusan');
	}
}

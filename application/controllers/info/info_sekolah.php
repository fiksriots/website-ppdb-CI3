<?php 
class info_sekolah extends CI_Controller
{
	public function index()
	{
		$data['info_sekolah'] = $this->ppdb_model->get_data('info_sekolah')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('info/info_sekolah', $data);
		$this->load->view('templates/footer_admin');
	}
	public function update_info_sekolah()
	{
		$data['info_sekolah'] = $this->db->query("SELECT * FROM info_sekolah WHERE id_sekolah='1' ")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('info/form_update_info_sekolah',$data);
		$this->load->view('templates/footer_admin');
	}
	public function update_info_sekolah_aksi()
	{
			$Nama_sekolah		= $this->input->post('Nama_sekolah');
			$email	= $this->input->post('email');
			$alamat	= $this->input->post('alamat');
			$no_telp	= $this->input->post('no_telp');
			$no_rek	= $this->input->post('no_rek');
			$motto	= $this->input->post('motto');
			$data = array(
				'Nama_sekolah'				=> $Nama_sekolah,
				'alamat'			=> $alamat,
				'email'				=> $email,
				'no_telp'	=>$no_telp,
				'no_rek'	=>$no_rek,
				'motto'		=>$motto

			);
			//$where = ('id_info_sekolah' => $id);
			$this->ppdb_model->update_data_sekolah('info_sekolah',$data,'1');
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data sekolah Berhasil Diubah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('info/info_sekolah');
		}
	
}
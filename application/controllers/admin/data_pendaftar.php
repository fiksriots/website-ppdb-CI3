<?php 
class data_Pendaftar extends CI_Controller
{
	public function index()
	{
		$data['data_diri'] = $this->ppdb_model->get_data('data_diri')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/data_pendaftar', $data);
		$this->load->view('templates/footer_admin');
	}
	public function detail_data($id)
	{
		$data['detail'] = $this->ppdb_model->ambil_id_data($id);
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/detail_data', $data);
		$this->load->view('templates/footer_admin');
	}
	public function delete_data($id)
	{
		$where = array('id_datadiri'	=>	$id);
		$this->ppdb_model->delete_data($where, 'data_diri');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Data Pendaftar Berhasil Dihapus !!!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('admin/data_pendaftar');
	}
	public function update_data($id)
	{
		$where = array('id_datadiri' => $id);
		$data['data_diri'] = $this->db->query("SELECT * FROM data_diri WHERE id_datadiri='$id' ")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/form_update_pendaftar',$data);
		$this->load->view('templates/footer_admin');
	}
	public function update_pendaftar_aksi($id)
	{
		
			$status_pendaftaran		= $this->input->post('status_pendaftaran');
		
			$data = array(
				'status_pendaftaran' => $status_pendaftaran

			);

			//$where = ('id_akun' => $id);
			$this->ppdb_model->update_data_diri('data_diri',$data,$id);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data Pembayaran Berhasil Diubah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_pendaftar');
		
	}
}


	?>
	
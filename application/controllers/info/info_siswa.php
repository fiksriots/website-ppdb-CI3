<?php 

class info_siswa extends CI_Controller
{
	public function index()
	{
		$data['info_pembayaran'] = $this->ppdb_model->get_data('info_pembayaran')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('info/info_siswa',$data);
		$this->load->view('templates/footer_admin');
	}
	public function tambah_info_pembayaran()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('info/form_tambah_info_pembayaran');
		$this->load->view('templates/footer_admin');
	}
	public function tambah_info_pembayaran_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == false) {
			$this->tambah_info_pembayaran();
		}else
		{
			$jurusan		= $this->input->post('jurusan');
			$harga_formulir	= $this->input->post('harga_formulir');
			$uang_pangkal		= $this->input->post('uang_pangkal');
			$spp		= $this->input->post('spp');
			$dpps	= $this->input->post('dpps');
			
			$data = array(
				'jurusan'				=> $jurusan,
				'harga_formulir'			=> $harga_formulir,
				'uang_pangkal'			=> $uang_pangkal,
				'spp'			=> $spp,
				'dpps'			=> $dpps

			);

			$this->ppdb_model->insert_data($data,'info_pembayaran');
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data akun Berhasil Ditambahkan !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('info/info_siswa');
		}
	}

	public function update_info_pembayaran($id)
	{
		$where = array('id' => $id);
		$data['info_pembayaran'] = $this->db->query("SELECT * FROM info_pembayaran WHERE id='$id' ")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('info/form_update_info_pembayaran',$data);
		$this->load->view('templates/footer_admin');
	}
	public function update_info_pembayaran_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == false) {
			$this->update_info_pembayaran();
		}else{
			$id 		= $this->input->post('id');
			$jurusan		= $this->input->post('jurusan');
			$harga_formulir		= $this->input->post('harga_formulir');
			$uang_pangkal		= $this->input->post('uang_pangkal');
			$spp		= $this->input->post('spp');
			$dpps	= $this->input->post('dpps');
			
		
			$data = array(
				'jurusan'				=> $jurusan,
				'harga_formulir'				=> $harga_formulir,
				'uang_pangkal'			=> $uang_pangkal,
				'spp'			=> $spp,
				'dpps'			=> $dpps

			);

			//$where = ('id_info_pembayaran' => $id);
			$this->ppdb_model->update_data_i('info_pembayaran',$data,$id);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data akun Berhasil Diubah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('info/info_siswa');
		}
	}

	
	public function _rules()
	{
		$this->form_validation->set_rules('jurusan','Jurusan','required');
		$this->form_validation->set_rules('harga_formulir','Harga Formulir','required');
		$this->form_validation->set_rules('uang_pangkal','Uang Pangkal','required');
		$this->form_validation->set_rules('spp','SPP','required');
		$this->form_validation->set_rules('dpps','DPPS','required');
		
	}
	
	public function delete_info_pembayaran($id)
	{
		$where =array('id'	=>	$id);
		$this->ppdb_model->delete_data($where,'info_pembayaran');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data akun Berhasil Dihapus !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('info/info_siswa');
	}
	
	
}
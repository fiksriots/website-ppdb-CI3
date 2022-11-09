<?php 

class data_soal extends CI_Controller
{
	public function index()
	{
		$data['soal'] = $this->ppdb_model->get_data('soal')->result();
		$data['info_jurusan'] = $this->ppdb_model->get_data('info_jurusan')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/data_soal',$data);
		$this->load->view('templates/footer_admin');
	}
	public function tambah_soal()
	{
		$data['info_jurusan'] = $this->ppdb_model->get_data('info_jurusan')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/form_tambah_soal',$data);
		$this->load->view('templates/footer_admin');
	}
	public function tambah_soal_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == false) {
			$this->tambah_soal();
		}else
		{
			$soal			= $this->input->post('soal');
			$a				= $this->input->post('a');
			$b				= $this->input->post('b');
			$c				= $this->input->post('c');
			$d				= $this->input->post('d');
			$e				= $this->input->post('e');
			$knc_jawaban	= $this->input->post('knc_jawaban');
			$jurusan 		= $this->input->post('jurusan');
			$aktif			= $this->input->post('aktif');
			$gambar			= $FILES['gambar']['name'];
				if ($gambar = '') {
				} else {
					$config['upload_path']		= './assets/gambar_soal';
					$config['allowed_types']	= 'jpg|jpeg|png|gif';

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('gambar')) {
						echo "Gambar Mobil Gagal Diupload!!";
					} else {
						$gambar = $this->upload->data('file_name');
					}
				}

		
			$data = array(
				'soal'			=> $soal,
				'a'				=> $a,
				'b'				=> $b,
				'c'				=> $c,
				'd'				=> $d,
				'e'				=> $e,
				'knc_jawaban'	=> $knc_jawaban,
				'jurusan'		=> $jurusan,
				'aktif'			=> $aktif,
				'gambar'		=> $gambar

			);

			$this->ppdb_model->insert_data($data,'soal');
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data soal Berhasil Ditambahkan !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_soal');
		}
	}

	public function update_soal($id)
	{
		$where = array('id_soal' => $id);
		$data['soal'] = $this->db->query("SELECT * FROM soal WHERE id_soal='$id' ")->result();
		$data['info_jurusan'] = $this->ppdb_model->get_data('info_jurusan')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/form_update_soal',$data);
		$this->load->view('templates/footer_admin');
	}
	public function update_soal_aksi()
	{
		// $this->_rules();
		if ($this->form_validation->run() == false) {
			$this->update_soal();
		}else{
			$id 			= $this->input->post('id_soal');
			$soal			= $this->input->post('soal');
			$a				= $this->input->post('a');
			$b				= $this->input->post('b');
			$c				= $this->input->post('c');
			$d				= $this->input->post('d');
			$e				= $this->input->post('e');
			$knc_jawaban	= md5($this->input->post('knc_jawaban'));
			$jurusan 		= $this->input->post('jurusan');
			$aktif			= $this->input->post('aktif');
			$gambar			= $FILES['gambar']['name'];
				if ($gambar = '') {
				} else {
					$config['upload_path']		= './assets/gambar_soal';
					$config['allowed_types']	= 'jpg|jpeg|png|gif';

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('gambar')) {
						echo "Gambar Mobil Gagal Diupload!!";
					} else {
						$gambar = $this->upload->data('file_name');
					}
				}
		
			$data = array(
				'soal'			=> $soal,
				'a'				=> $a,
				'b'				=> $b,
				'c'				=> $c,
				'd'				=> $d,
				'e'				=> $e,
				'knc_jawaban'	=> $knc_jawaban,
				'jurusan'		=> $jurusan,
				'aktif' 		=> $aktif,
				'gambar'		=> $gambar

			);

			//$where = ('id_soal' => $id);
			$this->ppdb_model->update_soal('soal',$data,$id);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data soal Berhasil Diubah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_soal');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('soal','Soal','required');
		$this->form_validation->set_rules('a','A','required');
		$this->form_validation->set_rules('b','B','required');
		$this->form_validation->set_rules('c','C','required');
		$this->form_validation->set_rules('d','D','required');
		$this->form_validation->set_rules('e','E','required');
		$this->form_validation->set_rules('knc_jawaban','Kunci Jawaban','required');
		$this->form_validation->set_rules('aktif','Status Soal','required');
		
	}
	public function delete_soal($id)
	{
		$where =array('id_soal'	=>	$id);
		$this->ppdb_model->delete_data($where,'soal');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data soal Berhasil Dihapus !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_soal');
	}

	public function excel()
	{
		$data['title'] = 'Data Soal';
		$data['sSoal'] = $this->ppdb_model->getdatasoal();
		$this->load->view('excel/soal', $data);
	}
	public function import()
	{
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'xlsx|xls';
		$config['file_name']	= 'doc' . time();
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('uploadexcel')) {
			$file = $this->upload->data();
			$reader = ReaderEntityFactory::createXLSXReader();
			$reader->open('assets/uploads/' . $file['file_name']);
			foreach ($reader->getSheetIterator() as $sheet) {
				$numRow = 1;
				foreach ($sheet->getRowIterator() as $row) {
					if ($numRow > 1) {
						$data_akun = array(
							'soal'	=> $row->getCellAtIndex(0),
							'a'	=> $row->getCellAtIndex(1),
							'b'	=> $row->getCellAtIndex(2),
							'c'	=> $row->getCellAtIndex(3),
							'd'	=> $row->getCellAtIndex(4),
							'e'	=> $row->getCellAtIndex(5),
							'knc_jawaban'	=> $row->getCellAtIndex(6),
							'jurusan'	=> $row->getCellAtIndex(7),

							// 'date_created'	=> time(),
							// 'data_modified'	=> time(),
						);
						$this->ppdb_model->import_data($data_soal);
					}
					$numRow++;
				}
				$reader->close();
				unlink('assets/uploads/' . $file['file_name']);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Berhasil Di Import !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('admin/data_soal');
			}
		} else {
			echo "Error : " . $this->upload->display_errors();
		};
	}
}



?>
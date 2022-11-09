<?php
//load Spout Library
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Data_akun extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ppdb_model');
	}
	public function index()
	{
		$data['akun'] = $this->ppdb_model->get_data('akun')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/data_akun', $data);
		$this->load->view('templates/footer_admin');
	}
	public function tambah_akun()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/form_tambah_akun');
		$this->load->view('templates/footer_admin');
	}
	public function tambah_akun_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == false) {
			$this->tambah_akun();
		} else {
			$nama		= $this->input->post('nama');
			$email	= $this->input->post('email');
			$alamat		= $this->input->post('alamat');
			$gender		= $this->input->post('gender');
			$no_telp	= $this->input->post('no_telp');
			$jurusan		= $this->input->post('jurusan');
			$password	= ($this->input->post('password'));


			$data = array(
				'nama'				=> $nama,
				'email'			=> $email,
				'alamat'			=> $alamat,
				'gender'			=> $gender,
				'no_telp'			=> $no_telp,
				'jurusan'			=> $jurusan,
				'password'			=> md5($password),
				'role_id'			=> '2'

			);

			$this->ppdb_model->insert_data($data, 'akun');
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data akun Berhasil Ditambahkan !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_akun');
		}
	}

	public function update_akun($id)
	{
		$where = array('id_akun' => $id);
		$data['akun'] = $this->db->query("SELECT * FROM akun WHERE id_akun='$id' ")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/form_update_akun', $data);
		$this->load->view('templates/footer_admin');
	}
	public function update_akun_aksi()
	{

		$id 		= $this->input->post('id_akun');
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$alamat		= $this->input->post('alamat');
		$gender		= $this->input->post('gender');
		$no_telp	= $this->input->post('no_telp');
		$jurusan		= $this->input->post('jurusan');
		$password	= md5($this->input->post('password'));
		$status		= $this->input->post('status_pembayaran');

		$data = array(
			'nama'				=> $nama,
			'email'				=> $email,
			'alamat'			=> $alamat,
			'gender'			=> $gender,
			'no_telp'			=> $no_telp,
			'jurusan'			=> $jurusan,
			'password'			=> $password,
			'status' => $status

		);

		//$where = ('id_akun' => $id);
		$this->ppdb_model->update_data('akun', $data, $id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data akun Berhasil Diubah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('admin/data_akun');
	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('no_telp', 'NO Telepon', 'required');
		$this->form_validation->set_rules('jurusan', 'ASAL SEKOLAH', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}
	public function delete_akun($id)
	{
		$where = array('id_akun'	=>	$id);
		$this->ppdb_model->delete_data($where, 'akun');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data akun Berhasil Dihapus !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('admin/data_akun');
	}

	public function detail_pembayaran($id)
	{
		$data['detail'] = $this->ppdb_model->ambil_id_akun($id);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/detail_pembayaran', $data);
		$this->load->view('templates/footer');
	}

	function download($id)
	{
		$data = $this->db->get_where('akun', ['id_akun' => $id])->row();
		force_download('bukti_pembayaran/' . $data->bukti_pembayaran, NULL);
	}
	public function excel()
	{
		$data['title'] = 'Data Akun';
		$data['sAkun'] = $this->ppdb_model->getdataakun();
		$this->load->view('excel/akun', $data);
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
							'nama'	=> $row->getCellAtIndex(0),
							'alamat'	=> $row->getCellAtIndex(1),
							'no_telp'	=> $row->getCellAtIndex(2),
							'gender'	=> $row->getCellAtIndex(3),
							'jurusan'	=> $row->getCellAtIndex(4),

							// 'date_created'	=> time(),
							// 'data_modified'	=> time(),
						);
						$this->ppdb_model->import_data($data_akun);
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
				redirect('admin/data_akun');
			}
		} else {
			echo "Error : " . $this->upload->display_errors();
		};
	}

	public function pdf()
	{
		$this->load->library('dompdf_gen');

		$data['akun'] = $this->ppdb_model->tampil_akun('akun')->result();
		$this->load->view('print_mahasiswa', $data);
	}
}

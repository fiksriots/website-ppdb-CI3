<?php 

class Register extends CI_Controller
{
	public function index()
	{
		$this->_rules();
		// if($this->form_validation->run() != false){
		if($this->input->post('nama')==null){
			$data['jurusan'] = $this->ppdb_model->get_data('info_jurusan')->result();
			$this->load->view('templates/header');
			$this->load->view('register_form',$data);
			$this->load->view('templates/footer');
		}else{
			$id 			= $this->input->post('id_akun');
			$nama			= $this->input->post('nama');
			$email			= $this->input->post('email');
			$alamat			= $this->input->post('alamat');
			$gender			= $this->input->post('gender');
			$asal_sekolah	= $this->input->post('asal_sekolah');
			$password		= $this->input->post('password');
			$role_id		= '2';
		
			$data = array(
				'nama'				=> $nama,
				'email'				=> $email,
				'alamat'			=> $alamat,
				'gender'			=> $gender,
				'jurusan'			=> $asal_sekolah,
				'password'			=> md5($password),
				'role_id'			=> $role_id

			);
			$temp = $this->ppdb_model->getinfojurusan();
			foreach($temp as $key){
				if($key['kode_jurusan'] == $asal_sekolah){
					$id = $key['id_jurusan'];
					$banyak = array(
						'siswa_mendaftar' => $key['siswa_mendaftar'] + 1
					);
					$ada = true;
				}
			}
			if($ada == true){
				$this->ppdb_model->insert_akun($data,'akun');
				$this->ppdb_model->update_siswa_mendaftar($id,$banyak);
				$cek = $this->ppdb_model->cek_login($email,$password);
						
				$this->load->library('email');
				$config = array();
				$config['charset'] = 'utf-8';
				$config['useragent'] = 'Codeigniter';
				$config['protocol']= "smtp";
				$config['mailtype']= "html";
				$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
				$config['smtp_port']= "465";
				$config['smtp_timeout']= "400";
				$config['smtp_user']= "eephyr@gmail.com"; // isi dengan email kamu
				$config['smtp_pass']= "Aryanta123"; // isi dengan password kamu
				$config['crlf']="\r\n"; 
				$config['newline']="\r\n"; 
				$config['wordwrap'] = TRUE;
				//memanggil library email dan set konfigurasi untuk pengiriman email
					
				$this->email->initialize($config);
				//konfigurasi pengiriman
				$this->email->from($config['smtp_user']);
				$this->email->to($email);
				$this->email->subject("Verifikasi Akun");
				$this->email->message(
					"terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini <br><br>".
					site_url("register/verification/$cek->id_akun")
											
				);
				
				if($this->email->send())
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
					Berhasil melakukan registrasi, silahkan cek email kamu !!!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>');
					
					redirect('auth/login');
				}else
				{				
					$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
					Berhasil melakukan registrasi, namu gagal mengirim verifikasi email
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>');
					redirect('auth/login');
				}
				
				echo "<br><br><a href='".site_url('auth/login')."'>Kembali ke Menu Login</a>";
			
				$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
					Registrasi Berhasil !!!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('auth/login');
			}else{
				//fik tambahono nk entek kuota e
			}
		}
	}	
	
	public function _rules()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('jurusan','Asal Sekolah','required');
		$this->form_validation->set_rules('password','Password','required');
		
	}

	public function verification($key)
	{
		$this->load->helper('url');
		$this->load->model('ppdb_model');
		$this->ppdb_model->changeActiveState($key);
		echo "Selamat kamu telah memverifikasi akun kamu";
		echo "<br><br><a href='".site_url('auth/login')."'>Kembali ke Menu Login</a>";
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
}
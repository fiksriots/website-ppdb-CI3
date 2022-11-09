<?php 

class form_pendaftaran extends CI_Controller
{

	public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

	public function index()
	{
		// $data['akun'] = $this->ppdb_model->get_data('akun')->result();
		// $id_datadiri=$this->db->query("select * from akun where id_datadiri")->result();
            $this->load->view('templates/header_admin');
			$this->load->view('templates/sidebar_pendaftar');
			$this->load->view('Pendaftar/form_pendaftaran_dashboard');
			$this->load->view('templates/footer_admin');
		
	}
	public function tambah_data()
	{
		$data['jurusan'] = $this->ppdb_model->get_data('info_jurusan')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_pendaftar');
		$this->load->view('Pendaftar/form_pendaftaran', $data);
		$this->load->view('templates/footer_admin');
	}
	public function tambah_data_aksi()
	{
		$id_akun			=$this->session->userdata('id_akun');
//data siswa 
		$nama_lengkap 		=$this->input->post('nama_lengkap');
		$alamat 		=$this->input->post('alamat');
		$gender 			=$this->input->post('gender');
		$nik 				=$this->input->post('nik');
		$tempat_lahir 		=$this->input->post('tempat_lahir');
		$tgl_lahir 			=$this->input->post('tgl_lahir');
		$agama 				=$this->input->post('agama');
		$minat_jurusan		=$this->input->post('minat_jurusan');
		$p_bantuan			=$this->input->post('p_bantuan');
		$status_anak		=$this->input->post('status_anak');
		$hobi				=$this->input->post('hobi');
		$alamat				=$this->input->post('alamat');
		$no_telp			=$this->input->post('no_telp');
		$gol_darah			=$this->input->post('gol_darah');
		$tinggi				=$this->input->post('tinggi');
		$berat				=$this->input->post('berat');
// data sekolah
		$asal_sekolah		=$this->input->post('asal_sekolah');
		$no_ijazah			=$this->input->post('no_ijazah');
		$no_skhun			=$this->input->post('no_skhun');
		$nisn				=$this->input->post('nisn');
// data ayah
		$nama_ayah			=$this->input->post('nama_ayah');
		$tgl_lahir_ayah		=$this->input->post('tgl_lahir_ayah');
		$agama_ayah			=$this->input->post('agama_ayah');
		$pendidikan_ayah	=$this->input->post('pendidikan_ayah');
		$pekerjaan_ayah		=$this->input->post('pekerjaan_ayah');
		$penghasilan_ayah	=$this->input->post('penghasilan_ayah');
		$alamat_ayah		=$this->input->post('alamat_ayah');
		$no_telp_ayah		=$this->input->post('no_telp_ayah');
		$hidup_ayah			=$this->input->post('hidup_ayah');
// data ibuk
		$nama_ibu			=$this->input->post('nama_ibu');
		$tgl_lahir_ibu		=$this->input->post('tgl_lahir_ibu');
		$pendidikan_ibu		=$this->input->post('pendidikan_ibu');
		$pekerjaan_ibu		=$this->input->post('pekerjaan_ibu');
		$penghasilan_ibu	=$this->input->post('penghasilan_ibu');
		$alamat_ibu			=$this->input->post('alamat_ibu');
		$no_telp_ibu		=$this->input->post('no_telp_ibu');
		$hidup_ibu			=$this->input->post('hidup_ibu');
// data nilai
		$nilai_b_indo		=$this->input->post('nilai_b_indo');
		$nilai_mtk			=$this->input->post('nilai_mtk');
		$nilai_ipa			=$this->input->post('nilai_ipa');
		$nilai_b_inggris	=$this->input->post('nilai_b_inggris');
// lampiran
		$config['upload_path']		= './foto/lampiran_foto';
		$config['allowed_types']	= 'jpg|jpeg|png|gif';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambarfoto'))
    	{
            $error = array('error' => $this->upload->display_errors());

			$this->load->view('Pendaftar/form_pendaftaran', $error);
			$file 					= $this->upload->data();
 			$gambar					= $file['file_name'];
    	}
    	else
    	{
			$file 					= $this->upload->data();
 			$gambar					= $file['file_name'];
		}




		$data =array(
			'id_akun'			=>$id_akun,
			'nama_lengkap'		=>$nama_lengkap,
			'gender'			=>$gender,
			'nik'				=>$nik,
			'tempat_lahir'		=>$tempat_lahir,
			'tgl_lahir' 		=>$tgl_lahir,
			'agama'				=>$agama,
			'minat_jurusan'		=>$minat_jurusan,
			'p_bantuan'			=>$p_bantuan,
			'status_anak' 		=>$status_anak,
			'hobi' 				=>$hobi,
			'alamat'			=>$alamat,
			'no_telp'			=>$no_telp,
			'gol_darah'			=>$gol_darah,
			'tinggi'			=>$tinggi,
			'berat'				=>$berat,
			'asal_sekolah'		=>$asal_sekolah,
			'no_ijazah'			=>$no_ijazah,
			'no_skhun'			=>$no_skhun,
			'nisn'				=>$nisn,
			'nama_ayah'			=>$nama_ayah,
			'tgl_lahir_ayah'	=>$tgl_lahir_ayah,
			'agama_ayah'		=>$agama_ayah,
			'pendidikan_ayah'	=>$pendidikan_ayah,
			'pekerjaan_ayah'	=>$pekerjaan_ayah,
			'penghasilan_ayah'	=>$penghasilan_ayah,
			'alamat_ayah'		=>$alamat_ayah,
			'no_telp_ayah'		=>$no_telp_ayah,
			'hidup_ayah'		=>$hidup_ayah,
			'nama_ibu'			=>$nama_ibu,
			'tgl_lahir_ibu'		=>$tgl_lahir_ibu,
			'pendidikan_ibu'	=>$pendidikan_ibu,
			'pekerjaan_ibu'		=>$pekerjaan_ibu,
			'penghasilan_ibu'	=>$penghasilan_ibu,
			'alamat_ibu'		=>$alamat_ibu,
			'no_telp_ibu'		=>$no_telp_ibu,
			'hidup_ibu'			=>$hidup_ibu,
			'nilai_b_indo'		=>$nilai_b_indo,
			'nilai_mtk'			=>$nilai_mtk,
			'nilai_ipa'			=>$nilai_ipa,
			'nilai_b_inggris'	=>$nilai_b_inggris,
			'gambar'			=>$gambar

		);
		$this->ppdb_model->insert_data($data,'data_diri');
		$result =$this->db->where('id_akun',$id_akun)->limit(1)->get('data_diri');
		//var_dump($result);
		if($result->num_rows() > 0){
			$cek = $result->row();
		}else{
		}
		$this->session->set_userdata('id_datadiri',$cek->id_datadiri);
		$data=array(
			'id_datadiri' => $cek->id_datadiri
		);
		$this->ppdb_model->update_data('akun', $data, $id_akun);
		
		
		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data Berhasil Di Input !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('pendaftar/form_pendaftaran');
		
	}
	public function cetak_bukti()
	{
		$id =$this->session->userdata('id_akun');
		$data['data_diri'] = $this->db->query("SELECT * FROM data_diri dd where id_akun ='$id' ")->result();
		$this->load->library('pdf');
		$this->load->view('pendaftar/cetak_bukti',$data);
	}
	public function update_data()
	{
		$id=$this->session->userdata('id_datadiri');
		$data['data_diri'] = $this->db->query("SELECT * FROM data_diri WHERE id_datadiri='$id' ")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('pendaftar/form_pendaftaran_update',$data);
		$this->load->view('templates/footer_admin');
	}
	public function update_data_aksi()
	{
		$id_datadiri		=$this->session->userdata('id_datadiri');
//data siswa 
		$nama_lengkap 		=$this->input->post('nama_lengkap');
		$gender 			=$this->input->post('gender');
		$nik 				=$this->input->post('nik');
		$tempat_lahir 		=$this->input->post('tempat_lahir');
		$tgl_lahir 			=$this->input->post('tgl_lahir');
		$agama 				=$this->input->post('agama');
		$minat_jurusan		=$this->input->post('minat_jurusan');
		$p_bantuan			=$this->input->post('p_bantuan');
		$status_anak		=$this->input->post('status_anak');
		$hobi				=$this->input->post('hobi');
		$alamat				=$this->input->post('alamat');
		$no_telp			=$this->input->post('no_telp');
		$gol_darah			=$this->input->post('gol_darah');
		$tinggi				=$this->input->post('tinggi');
		$berat				=$this->input->post('berat');
// data sekolah
		$asal_sekolah		=$this->input->post('asal_sekolah');
		$no_ijazah			=$this->input->post('no_ijazah');
		$no_skhun			=$this->input->post('no_skhun');
		$nisn				=$this->input->post('nisn');
// data ayah
		$nama_ayah			=$this->input->post('nama_ayah');
		$tgl_lahir_ayah		=$this->input->post('tgl_lahir_ayah');
		$agama_ayah			=$this->input->post('agama_ayah');
		$pendidikan_ayah	=$this->input->post('pendidikan_ayah');
		$pekerjaan_ayah		=$this->input->post('pekerjaan_ayah');
		$penghasilan_ayah	=$this->input->post('penghasilan_ayah');
		$alamat_ayah		=$this->input->post('alamat_ayah');
		$no_telp_ayah		=$this->input->post('no_telp_ayah');
		$hidup_ayah			=$this->input->post('hidup_ayah');
// data ibuk
		$nama_ibu			=$this->input->post('nama_ibu');
		$tgl_lahir_ibu		=$this->input->post('tgl_lahir_ibu');
		$pendidikan_ibu		=$this->input->post('pendidikan_ibu');
		$pekerjaan_ibu		=$this->input->post('pekerjaan_ibu');
		$penghasilan_ibu	=$this->input->post('penghasilan_ibu');
		$alamat_ibu			=$this->input->post('alamat_ibu');
		$no_telp_ibu		=$this->input->post('no_telp_ibu');
		$hidup_ibu			=$this->input->post('hidup_ibu');
// data nilai
		$nilai_b_indo		=$this->input->post('nilai_b_indo');
		$nilai_mtk			=$this->input->post('nilai_mtk');
		$nilai_ipa			=$this->input->post('nilai_ipa');
		$nilai_b_inggris	=$this->input->post('nilai_b_inggris');

		$data =array(
			'nama_lengkap'		=>$nama_lengkap,
			'gender'			=>$gender,
			'nik'				=>$nik,
			'tempat_lahir'		=>$tempat_lahir,
			'tgl_lahir' 		=>$tgl_lahir,
			'agama'				=>$agama,
			'minat_jurusan'		=>$minat_jurusan,
			'p_bantuan'			=>$p_bantuan,
			'status_anak' 		=>$status_anak,
			'hobi' 				=>$hobi,
			'alamat'			=>$alamat,
			'no_telp'			=>$no_telp,
			'gol_darah'			=>$gol_darah,
			'tinggi'			=>$tinggi,
			'berat'				=>$berat,
			'asal_sekolah'		=>$asal_sekolah,
			'no_ijazah'			=>$no_ijazah,
			'no_skhun'			=>$no_skhun,
			'nisn'				=>$nisn,
			'nama_ayah'			=>$nama_ayah,
			'tgl_lahir_ayah'	=>$tgl_lahir_ayah,
			'agama_ayah'		=>$agama_ayah,
			'pendidikan_ayah'	=>$pendidikan_ayah,
			'pekerjaan_ayah'	=>$pekerjaan_ayah,
			'penghasilan_ayah'	=>$penghasilan_ayah,
			'alamat_ayah'		=>$alamat_ayah,
			'no_telp_ayah'		=>$no_telp_ayah,
			'hidup_ayah'		=>$hidup_ayah,
			'nama_ibu'			=>$nama_ibu,
			'tgl_lahir_ibu'		=>$tgl_lahir_ibu,
			'pendidikan_ibu'	=>$pendidikan_ibu,
			'pekerjaan_ibu'		=>$pekerjaan_ibu,
			'penghasilan_ibu'	=>$penghasilan_ibu,
			'alamat_ibu'		=>$alamat_ibu,
			'no_telp_ibu'		=>$no_telp_ibu,
			'hidup_ibu'			=>$hidup_ibu,
			'nilai_b_indo'		=>$nilai_b_indo,
			'nilai_mtk'			=>$nilai_mtk,
			'nilai_ipa'			=>$nilai_ipa,
			'nilai_b_inggris'	=>$nilai_b_inggris

		);
		$this->ppdb_model->update_data_diri('data_diri',$data,$id_datadiri);
			
		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Formulir Berhasil Diubah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('pendaftar/form_pendaftaran');
		
	}
	public function update_foto()
	{
		$id=$this->session->userdata('id_datadiri');
		$data['data_diri'] = $this->db->query("SELECT * FROM data_diri WHERE id_datadiri='$id' ")->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('pendaftar/form_pendaftaran_updatefoto',$data);
		$this->load->view('templates/footer');
	}
	public function update_foto_aksi()
	{
		$id_datadiri		=$this->session->userdata('id_datadiri');
// lampiran
		$config['upload_path']		= './foto/lampiran_foto';
		$config['allowed_types']	= 'jpg|jpeg|png|gif';

		$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambarfoto'))
	    	{
	            $error = array('error' => $this->upload->display_errors());

				$this->load->view('Pendaftar/form_pendaftaran', $error);
				$file 					= $this->upload->data();
	 			$gambar					= $file['file_name'];
	    	}
	    	else
	    	{
				$file 					= $this->upload->data();
	 			$gambar					= $file['file_name'];

			}



		$data =array(
			'gambar'					=> $gambar
		);
		$this->ppdb_model->update_data_diri('data_diri',$data,$id_datadiri);
			
		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Foto Berhasil Diubah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('pendaftar/form_pendaftaran');
		
	}
}
?>
<?php 

class Form_lampiran extends CI_Controller
{
	public function index()
	{
		$data['akun'] = $this->ppdb_model->get_data('akun')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_pendaftar');
		$this->load->view('pendaftar/form_lampiran_dashboard');
		$this->load->view('templates/footer_admin');
	}
	public function tambah_lampiran()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_pendaftar');
		$this->load->view('Pendaftar/form_lampiran');
		$this->load->view('templates/footer_admin');
	}
	public function tambah_lampiran_aksi()
	{
		$id_akun			=$this->session->userdata('id_akun');
//data siswa 
		
// lampiran kk
		$config['upload_path']		= './foto/lampiran_kk';
		$config['allowed_types']	= 'jpg|jpeg|png|gif|pdf';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambarkk'))
    	{
            $error = array('error' => $this->upload->display_errors());

			$this->load->view('Pendaftar/form_lampiran', $error);
			$file 					= $this->upload->data();
 			$lampiran_kk			= $file['file_name'];
    	}
    	else
    	{
			$file 					= $this->upload->data();
 			$lampiran_kk			= $file['file_name'];
		}
// lampiran kk
		$config['upload_path']		= './foto/lampiran_kk';
		$config['allowed_types']	= 'jpg|jpeg|png|gif|pdf';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambarkk'))
    	{
            $error = array('error' => $this->upload->display_errors());

			$this->load->view('Pendaftar/form_lampiran', $error);
			$file 					= $this->upload->data();
 			$lampiran_kk			= $file['file_name'];
    	}
    	else
    	{
			$file 					= $this->upload->data();
 			$lampiran_kk			= $file['file_name'];
		}
// lampiran akta
		$config['upload_path']		= './foto/lampiran_akta';
		$config['allowed_types']	= 'jpg|jpeg|png|gif|pdf';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambarakta'))
    	{
            $error = array('error' => $this->upload->display_errors());

			$this->load->view('Pendaftar/form_lampiran', $error);
			$file 					= $this->upload->data();
 			$lampiran_akta			= $file['file_name'];
    	}
    	else
    	{
			$file 					= $this->upload->data();
 			$lampiran_akta			= $file['file_name'];
		}
// lampiran ktp
		$config['upload_path']		= './foto/lampiran_ktp';
		$config['allowed_types']	= 'jpg|jpeg|png|gif|pdf';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambarktp'))
    	{
            $error = array('error' => $this->upload->display_errors());

			$this->load->view('Pendaftar/form_lampiran', $error);
			$file 					= $this->upload->data();
 			$lampiran_ktp			= $file['file_name'];
    	}
    	else
    	{
			$file 					= $this->upload->data();
 			$lampiran_ktp			= $file['file_name'];
		}
// lampiran ijazah
		$config['upload_path']		= './foto/lampiran_ijazah';
		$config['allowed_types']	= 'jpg|jpeg|png|gif|pdf';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambarijazah'))
    	{
            $error = array('error' => $this->upload->display_errors());

			$this->load->view('Pendaftar/form_lampiran', $error);
			$file 					= $this->upload->data();
 			$lampiran_ijazah			= $file['file_name'];
    	}
    	else
    	{
			$file 					= $this->upload->data();
 			$lampiran_ijazah			= $file['file_name'];
		}
// lampiran rapot
		$config['upload_path']		= './foto/lampiran_rapot';
		$config['allowed_types']	= 'jpg|jpeg|png|gif|pdf';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambarrapot'))
    	{
            $error = array('error' => $this->upload->display_errors());

			$this->load->view('Pendaftar/form_lampiran', $error);
			$file 					= $this->upload->data();
 			$lampiran_rapot			= $file['file_name'];
    	}
    	else
    	{
			$file 					= $this->upload->data();
 			$lampiran_rapot			= $file['file_name'];
		}
// lampiran kk
		$config['upload_path']		= './foto/lampiran_kk';
		$config['allowed_types']	= 'jpg|jpeg|png|gif|pdf';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambarkk'))
    	{
            $error = array('error' => $this->upload->display_errors());

			$this->load->view('Pendaftar/form_lampiran', $error);
			$file 					= $this->upload->data();
 			$lampiran_kk			= $file['file_name'];
    	}
    	else
    	{
			$file 					= $this->upload->data();
 			$lampiran_kk			= $file['file_name'];
		}
// lampiran bantuan
		$config['upload_path']		= './foto/lampiran_bantuan';
		$config['allowed_types']	= 'jpg|jpeg|png|gif|pdf';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambarbantuan'))
    	{
            $error = array('error' => $this->upload->display_errors());

			$this->load->view('Pendaftar/form_lampiran', $error);
			$file 					= $this->upload->data();
 			$lampiran_bantuan			= $file['file_name'];
    	}
    	else
    	{
			$file 					= $this->upload->data();
 			$lampiran_bantuan			= $file['file_name'];
		}



		$data =array(
			'id_akun'			=>$id_akun,
			'lampiran_kk'		=>$lampiran_kk,
			'lampiran_akta'		=>$lampiran_akta,
			'lampiran_ktp'		=>$lampiran_ktp,
			'lampiran_ijazah'		=>$lampiran_ijazah,
			'lampiran_rapot'		=>$lampiran_rapot,
			'lampiran_bantuan'		=>$lampiran_bantuan

		);
		$this->ppdb_model->insert_data($data,'lampiran');
		$result =$this->db->where('id_akun',$id_akun)->limit(1)->get('lampiran');
		//var_dump($result);
		if($result->num_rows() > 0){
			$cek = $result->row();
		}else{
		}
		$this->session->set_userdata('id_lampiran',$cek->id_lampiran);
		$data=array(
			'id_lampiran' => $cek->id_lampiran
		);
		$this->ppdb_model->update_data('akun', $data, $id_akun);
		
		
		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data Berhasil Di Input !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('pendaftar/form_lampiran');
		
	}
}
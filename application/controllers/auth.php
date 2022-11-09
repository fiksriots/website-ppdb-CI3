<?php 
/**
 * 
 */
class Auth extends CI_Controller
{
	public function login()
	{
		$this->_rules();
		if($this->form_validation->run()== false)
		{
			// $this->load->view('berhasil');
			$this->load->view('templates/header');
			$this->load->view('form_login');
			$this->load->view('templates/footer');
		}else{
			$email		=$this->input->post('email');
			$password	=$this->input->post('password');
			$cek = $this->ppdb_model->cek_login($email,$password);
			
			if($cek == false)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				Username / password salah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('auth/login');
			}else{
				 $this->session->set_userdata('email',$cek->email);
				 $this->session->set_userdata('role_id',$cek->role_id);
				 $this->session->set_userdata('nama',$cek->nama);
				 $this->session->set_userdata('id_akun',$cek->id_akun);
				 $this->session->set_userdata('id_datadiri',$cek->id_datadiri);
				 $this->session->set_userdata('id_lampiran',$cek->id_lampiran);
				 $this->session->set_userdata('id_ujian',$cek->id_ujian);
				 $this->session->set_userdata('bukti_pembayaran',$cek->bukti_pembayaran);
				 $this->session->set_userdata('status',$cek->status);
				 
				 switch ($cek->role_id) {
					case 1 : redirect('admin/dashboard'); 		break;
					//case 2 : redirect('Pendaftar/dashboard'); 	break;
					case 2 : redirect('Pendaftar/dashboard'); 	break;
				 	default: 									break;
				}
			}
		}
		
	}
	public function _rules()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
	public function ganti_password(){
		$this->load->view('templates/header');
		$this->load->view('change_password');
		$this->load->view('templates/footer');
	}
	public function ganti_password_aksi(){
		$pass_baru =$this->input->post('pass_baru');
		$ulang_pass =$this->input->post('ulang_pass');

		$this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass]');
		$this->form_validation->set_rules('ulang_pass','Ulangi Password','required');
		if($this->form_validation->run() != false){
			$data = array('password'	=> md5($pass_baru));
			$id   = array('id_akun' => $this->session->userdata('id_akun'));
			$this->ppdb_model->update_password($id,$data,'akun');
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Password sudah dirubah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('auth/login');
		}else{
			$this->load->view('templates/header');
			$this->load->view('change_password');
			$this->load->view('templates/footer');
		}
	}
}

 ?>
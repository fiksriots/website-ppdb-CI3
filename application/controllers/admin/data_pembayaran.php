<?php 

class data_pembayaran extends CI_Controller
{
	public function index()
	{
		$data['akun'] = $this->db->query("SELECT * FROM akun WHERE role_id='2' ")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/data_pembayaran',$data);
		$this->load->view('templates/footer_admin');
	}
	public function update_pembayaran($id)
	{
		$where = array('id_akun' => $id);
		$data['akun'] = $this->db->query("SELECT * FROM akun WHERE id_akun='$id' ")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/form_update_pembayaran',$data);
		$this->load->view('templates/footer_admin');
	}
	public function update_pembayaran_aksi($id)
	{
		
			$status		= $this->input->post('status_pembayaran');
		
			$data = array(
				'status' => $status

			);

			//$where = ('id_akun' => $id);
			$this->ppdb_model->update_data('akun',$data,$id);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Data Pembayaran Berhasil Diubah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_pembayaran');
		
	}
	// public function delete($id){
 //        $where =array('id_akun'	=>	$id);
	// 	$query = $this->db->query("Delete bukti_pembayaran FROM akun where id_akun = '$where'");
	// 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 			  Data Foto Berhasil Dihapus !!!
	// 			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 			    <span aria-hidden="true">&times;</span>
	// 			  </button>
	// 			</div>');
 //            redirect('admin/data_pembayaran');
 //        }
	
}


?>
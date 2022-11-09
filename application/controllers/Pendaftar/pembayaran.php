<?php

class pembayaran extends CI_Controller
{
	public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
	public function index()
	{
		$data['info_pembayaran'] = $this->ppdb_model->get_data('info_pembayaran')->result();
		$data['akun'] = $this->ppdb_model->get_data('akun')->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_pendaftar');
		$this->load->view('Pendaftar/pembayaran',$data);
		$this->load->view('templates/footer_admin');
	}
	public function form_pembayaran($id)
	{
		$where = array('id_akun' => $id);
		$data['akun'] = $this->db->query("SELECT * FROM akun WHERE id_akun='$id' ")->result();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/form_update_akun',$data);
		$this->load->view('templates/footer_admin');
	}
	public function pembayaran_aksi()
	{
		//$this->_rules();
		// if ($this->form_validation->run() == false) {
			//$this->pembayaran();
		// }else{
				// if ($bukti_pembayaran = '') {
				// } else {
					$config['upload_path']		= './foto/bukti_pembayaran';
					$config['allowed_types']	= 'jpg|jpeg|png|gif';

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('bukti'))
                	{
                        $error = array('error' => $this->upload->display_errors());

                        redirect('Pendaftar/testing', $error);
                	}
                	else
                	{
						// $data = array('upload_data' => $this->upload->data());
						$id 					= $this->session->userdata('id_akun');
						$file 					= $this->upload->data();
			 			$bukti_pembayaran		= $file['file_name'];
						$data = array('bukti_pembayaran' => $bukti_pembayaran);
						// $where = ('id_akun' => $id);
						$this->ppdb_model->update_data('akun',$data,$id);
						$this->session->set_userdata('bukti_pembayaran',$bukti_pembayaran);
						$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
							  Pembayaran Berhasil !!!
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							  </button>
							</div>');
						redirect('Pendaftar/pembayaran');

					}
				

					// if (!$this->upload->do_upload('bukti_pembayaran')) {
					// 	echo "Bukti Pembayaran Gagal Diupload!!";
					// } else {
					// 	$bukti_pembayaran = $this->upload->data('bukti_pembayaran');
					// }
				
		
			// $data = array('bukti_pembayaran' => $bukti_pembayaran);
			// $where = array('id_akun' => $id);
			// $this->ppdb_model->update_data('akun',$data,$where);
			// $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
			// 	  Data akun Berhasil Diubah !!!
			// 	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			// 	    <span aria-hidden="true">&times;</span>
			// 	  </button>
			// 	</div>');
			// redirect('admin/data_akun');
		//}
	}
}
?>
<?php
class Ppdb_model extends CI_Model
{
	public function tampil_akun()
	{
		return $this->db->get('akun');
	}
	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function getdataakun()
	{
		return $this->db->get('akun')->result_array();
	}

	public function getdatanilai()
	{
		return $this->db->get('ujian')->result_array();
	}
	public function getdatasoal()
	{
		return $this->db->get('soal')->result_array();
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function simpan_akun($data = array())
	{
		$jumlah = count($data);

		if ($jumlah > 0) {
			$this->db->insert_batch('akun', $data);
		}
	}
	public function insert_akun($data, $table)
	{
		$this->db->insert($table, $data);
	}
	//public function ambil_id_akun($email)

	public function update_data($table, $data, $where)
	{
		$this->db->where('id_akun', $where);
		$this->db->update($table, $data);
	}
	public function update_data_diri($table, $data, $where)
	{
		$this->db->where('id_datadiri', $where);
		$this->db->update($table, $data);
	}
	public function update_data_gelombang($table, $data, $where)
	{
		$this->db->where('id_gelombang', $where);
		$this->db->update($table, $data);
	}
	public function update_data_jurusan($table, $data, $where)
	{
		$this->db->where('id_jurusan', $where);
		$this->db->update($table, $data);
	}
	public function update_data_sekolah($table, $data, $where)
	{
		$this->db->where('id_sekolah', $where);
		$this->db->update($table, $data);
	}
	public function update_data_i($table, $data, $where)
	{
		$this->db->where('id', $where);
		$this->db->update($table, $data);
	}
	public function update_data_ij($table, $data, $where)
	{
		$this->db->where('kode_jurusan', $where);
		$this->db->update($table, $data);
	}
	public function update_data_nilai($table, $data, $where)
	{
		$this->db->where('id_ujian', $where);
		$this->db->update($table, $data);
	}
	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function cek_login($email, $password)
	{
		$result = $this->db->where('email', $email)
			->where('password', md5($password))->limit(1)->get('akun');

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return false;
		}
	}
	public function update_password($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function get_where($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_soal($table, $data, $where)
	{
		$this->db->where('id_soal', $where);
		$this->db->update($table, $data);
	}
	public function ambil_id_akun($id)
	{
		$hasil = $this->db->where('id_akun', $id)->get('akun');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}
	public function ambil_id_akun_datadiri($id)
	{
		$hasil = $this->db->where('id_akun', $id)->get('data_diri');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}
	public function ambil_id_ujian($id)
	{
		$hasil = $this->db->where('id_ujian', $id)->get('ujian');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}
	public function ambil_id_data($id)
	{
		$hasil = $this->db->where('id_datadiri', $id)->get('data_diri');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	function changeActiveState($key)
	{
		$this->load->database();
		$data = array(
			'active' => 1
		);

		$this->db->where('id_akun', $key);
		$this->db->update('akun', $data);

		return true;
	}
	public function import_data($data_akun)
	{
		$jumlah = count($data_akun);
		if ($jumlah > 0) {
			$this->db->replace('akun', $data_akun);
		}
	}

	public function update_siswa_mendaftar($id,$data){
		$this->db->where($id);
		$this->db->update('info_jurusan', $data);
	}

	public function getinfojurusan()
	{
		return $this->db->get('info_jurusan')->result_array();
	}

	// private function _upload_foto()
	// {
	//     $config['upload_path']          = 'foto/lampiran_foto/';
	//     $config['allowed_types']        = 'gif|jpg|png';
	//     $config['file_name']            = $this->lampiran_foto;
	//     $config['overwrite']			= true;
	//     $config['max_size']             = 5024; // 1MB
	//     // $config['max_width']            = 1024;
	//     // $config['max_height']           = 768;

	//     $this->load->library('upload', $config);

	//     if ($this->upload->do_upload('image')) {
	//         return $this->upload->data("file_name");
	//     }

	//     return "default.jpg";
	// }

}

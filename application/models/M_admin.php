<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class M_admin extends CI_Model
{

	// siswa
	public function data_siswa()
	{
	    $this->db->select('*');
	    $this->db->from('tb_siswa');
	    $this->db->join('detail_siswa', 'tb_siswa.nis = detail_siswa.nis');
	    $result = $this->db->get();
	    return $result->result_array();
	}
	public function last_siswa()
	{
	    $this->db->select('*');
	    $this->db->from('tb_siswa');
	    $this->db->order_by('tb_siswa.id_siswa', 'DESC LIMIT 1');
	    $result = $this->db->get();
	    return $result->result_array();
	}
	public function add_siswa()
	{	
		$data = [
				'nis' => htmlspecialchars($this->input->post('nis', true)),
				'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa', true)),
				'kelas' => htmlspecialchars($this->input->post('kelas', true)),
				'rombel' => htmlspecialchars($this->input->post('rombel', true)),
		];
		return $this->db->insert('tb_siswa', $data);
	}
	public function add_detail_siswa()
	{
		$datas = [
				'nis' => htmlspecialchars($this->input->post('nis', true)),
				'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa', true)),
				'ttl' => htmlspecialchars($this->input->post('ttl', true)),
				'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
				'image' => 'default.png'
		];
		return $this->db->insert('detail_siswa', $datas);
	}
	public function detail_siswa($id)
	{
	    $this->db->select('*');
	    $this->db->from('tb_siswa');
	    $this->db->join('detail_siswa', 'tb_siswa.id_siswa = detail_siswa.siswa_id');
	    $this->db->join('jenis_kelamin', 'detail_siswa.jenis_kelamin = jenis_kelamin.id_jk');
	    $this->db->where('tb_siswa.id_siswa', $id);
	    $this->db->where('detail_siswa.siswa_id', $id);
	    $result = $this->db->get();
	    return $result->result_array();
	}
	public function update_siswa($where, $data, $table)
	{
		return $this->db->update('tb_siswa', $data, $where);
	}
	public function update_detail_siswa($where, $data, $table)
	{
		return $this->db->update('detail_siswa', $data, $where);
	}
	public function delete_siswa($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function delete_detail_siswa($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// nilai
	public function data_nilai()
	{
	    $this->db->select('*');
	    $this->db->from('tb_nilai');
	    $this->db->join('detail_nilai', 'tb_nilai.kode_nilai = detail_nilai.kode_nilai');
	    $this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_nilai.siswa_id');
	    $result = $this->db->get();
	    return $result->result_array();
	}
	public function add_nilai($kode_nilai)
	{	
		$data = [
				'kode_nilai' => htmlspecialchars($kode_nilai, true),
				'siswa_id' => htmlspecialchars($this->input->post('id_siswa', true)),
				'raport' => htmlspecialchars($this->input->post('raport', true)),
				'prilaku' => htmlspecialchars($this->input->post('prilaku', true)),
		];
		return $this->db->insert('tb_nilai', $data);
	}
	public function add_detail_nilai($kode_nilai)
	{
		$datan = [
				'siswa_id' => htmlspecialchars($this->input->post('id_siswa', true)),
				'kode_nilai' => htmlspecialchars($kode_nilai, true),
		];
		return $this->db->insert('detail_nilai', $datan);
	}
	public function edit_nilai($id)
	{
	    $this->db->select('*');
	    $this->db->from('tb_nilai');
	    $this->db->join('detail_nilai', 'tb_nilai.kode_nilai = detail_nilai.kode_nilai');
	    $this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_nilai.siswa_id');
	    $this->db->where('tb_nilai.kode_nilai', $id);
	    $result = $this->db->get();
	    return $result->result_array();
	}
	public function update_nilai($where, $data, $table)
	{
		return $this->db->update('tb_nilai', $data, $where);
	}
	public function update_detail_nilai($where, $data, $table)
	{
		return $this->db->update('detail_nilai', $data, $where);
	}
	public function delete_nilai($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function delete_detail_nilai($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// prestasi
	public function data_prestasi()
	{
	    $this->db->select('*');
	    $this->db->from('tb_prestasi');
	    $this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_prestasi.siswa_id');
	    $this->db->join('tb_pelajaran', 'tb_prestasi.mapel = tb_pelajaran.id_pelajaran');
	    $result = $this->db->get();
	    return $result->result_array();
	}
	public function add_prestasi()
	{	
		$data = [
				'siswa_id' => htmlspecialchars($this->input->post('id_siswa', true)),
				'prestasi' => htmlspecialchars($this->input->post('prestasi', true)),
				'mapel' => htmlspecialchars($this->input->post('mapel', true)),
		];
		return $this->db->insert('tb_prestasi', $data);
	}
	public function data_pelajaran()
	{
	    $this->db->select('*');
	    $this->db->from('tb_pelajaran');
	    $result = $this->db->get();
	    return $result->result_array();
	}
	public function edit_prestasi($id)
	{
	    $this->db->select('*');
	    $this->db->from('tb_prestasi');
	    $this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_prestasi.siswa_id');
	    $this->db->where('tb_prestasi.id_prestasi', $id);
	    $result = $this->db->get();
	    return $result->result_array();
	}
	public function update_prestasi($where, $data, $table)
	{
		return $this->db->update('tb_prestasi', $data, $where);
	}
	public function delete_prestasi($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// user
	public function data_user()
	{
	    $this->db->select('*');
	    $this->db->from('tb_user');
	    $result = $this->db->get();
	    return $result->result_array();
	}

}
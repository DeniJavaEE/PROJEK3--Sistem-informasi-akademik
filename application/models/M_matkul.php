<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_matkul extends CI_Model {
	public $table ="tbl_matakuliah";
	public function data() {
		$query = "SELECT * FROM $this->table ORDER BY kode_mk ASC";
		return $this->db->query($query)->result();
	}
	public function simpan() {
		$data = array(
			'kode_mk' => $this->input->post('kode_mk'),
			'nama_mk' => $this->input->post('nama_mk'),
			'jml_sks' => $this->input->post('jml_sks'),
			'semester' => $this->input->post('semester'),
			'jurusan' => $this->input->post('jurusan'),
			'nid' => $this->input->post('nid')
		);
		$this->db->insert($this->table, $data);
	}
	public function update() {
		$data = array(
			'nama_mk' => $this->input->post('nama_mk'),
			'jml_sks' => $this->input->post('jml_sks'),
			'semester' => $this->input->post('semester'),
			'jurusan' => $this->input->post('jurusan'),
			'nid' => $this->input->post('nid')
		);
		$kode_mk = $this->input->post('kode_mk');
		$this->db->where('kode_mk', $kode_mk);
		$this->db->update($this->table, $data);
	}
}
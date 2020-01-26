<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_nilai extends CI_Model {
	public $table ="tbl_nilai";
	public function data() {
		$query = "SELECT * FROM $this->table ORDER BY nim ASC";
		return $this->db->query($query)->result();
	}
	public function simpan() {
		$data = array(
			'nim' => $this->input->post('nim'),
			'kode_mk' => $this->input->post('kode_mk'),
			'nid' => $this->input->post('nid'),
			'thn_akademik' => $this->input->post('thn_akademik'),
			'semester' => $this->input->post('semester'),
			'nilai' => $this->input->post('nilai'),
			'grade' => $this->input->post('grade'),
			'tgl_input' => $this->input->post('tgl_input')
		);
		$this->db->insert($this->table, $data);
	}
	public function update() {
		$data = array(
			'nilai' => $this->input->post('nilai'),
			'grade' => $this->input->post('grade')
		);
		$nim = $this->input->post('nim');
		$this->db->where('nim', $nim);
		$this->db->update($this->table, $data);
	}
	public function getNilaiSemester() {
		$query = $this->db->order_by('semester')
		->get('tbl_nilai');
		if($query->num_rows()>0) {
			return $query->result();
		} else {
			return array();
		}
	}
	public function getSemester($semester, $nim) {
		$query = $this->db->select('*')
		->from('tbl_nilai')
		->join('tbl_matakuliah', 'tbl_matakuliah.kode_mk = tbl_nilai.kode_mk')
		->join('tbl_dosen','tbl_dosen.nid = tbl_nilai.nid')
		->join('tbl_mahasiswa','tbl_mahasiswa.nim = tbl_nilai.nim')
		->where('tbl_nilai.semester', $semester)
		->where('tbl_nilai.nim', $nim)
		->get();
		if($query->num_rows()>0) {
			return $query->result();
		} else {
			return array();
		}
	}
}
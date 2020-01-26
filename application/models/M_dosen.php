<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_dosen extends CI_Model {
	public $table ="tbl_dosen";
	public function chekLogin($nid, $password) {
		$this->db->where('nid', $nid);
		$this->db->where('password', SHA1($password));
		$dosen = $this->db->get($this->table)->row_array();
		return $dosen;
	}
	public function data() {
		$query = "SELECT * FROM $this->table ORDER BY nid ASC";
		return $this->db->query($query)->result();
	}
	public function simpan($foto) {
		$data = array(
			'nid' => $this->input->post('nid'),
			'password' => SHA1($this->input->post('password')),
			'nama_dosen' => $this->input->post('nama_dosen'),
			'foto' => $foto
		);
		$this->db->insert($this->table, $data);
	}

	public function update($foto) {
		if(empty($foto) AND $this->input->post('password') == '') {
			$data = array(
				'nama_dosen' => $this->input->post('nama_dosen'),
			);
		} else if(empty($foto) AND $this->input->post('password') != '') {
			$data = array(
				'password' => SHA1($this->input->post('password')),
				'nama_dosen' => $this->input->post('nama_dosen'),
			);
		} else if($this->input->post('password') == '') {
			$data = array(
				'nama_dosen' => $this->input->post('nama_dosen'),
				'foto' => $foto
			);
		} else if($this->input->post('password') != '') {
			$data = array(
				'password' => SHA1($this->input->post('password')),
				'nama_dosen' => $this->input->post('nama_dosen'),
				'foto' => $foto
			);
		}
		$nid = $this->input->post('nid');
		$this->db->where('nid', $nid);
		$this->db->update($this->table, $data);
	}
}
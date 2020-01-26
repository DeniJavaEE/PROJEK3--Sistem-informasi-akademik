<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_admin extends CI_Model {
	public $table ="tbl_admin";
	public function chekLogin($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', SHA1($password));
		$admin = $this->db->get($this->table)->row_array();
		return $admin;
	}

	public function data() {
		$query = "SELECT * FROM $this->table ORDER BY username ASC";
		return $this->db->query($query)->result();
	}
	public function simpan($foto) {
		$data = array(
			'username' => $this->input->post('username'),
			'password' => SHA1($this->input->post('password')),
			'nama_admin' => $this->input->post('nama_admin'),
			'foto' => $foto
		);
		$this->db->insert($this->table, $data);
	}
	public function update($foto) {
		if(empty($foto) AND $this->input->post('password') == '') {
			$data = array(
				'nama_admin' => $this->input->post('nama_admin'),
			);
		} else if(empty($foto) AND $this->input->post('password') != '') {
			$data = array(
				'password' => SHA1($this->input->post('password')),
				'nama_admin' => $this->input->post('nama_admin'),
			);
		} else if($this->input->post('password') == '') {
			$data = array(
				'nama_admin' => $this->input->post('nama_admin'),
				'foto' => $foto
			);
		} else if($this->input->post('password') != '') {
			$data = array(
				'password' => SHA1($this->input->post('password')),
				'nama_admin' => $this->input->post('nama_admin'),
				'foto' => $foto
			);
		}
		$username = $this->input->post('username');
		$this->db->where('username', $username);
		$this->db->update($this->table, $data);
	}
}
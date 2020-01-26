<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
	public function __construct() {
		parent::__construct();
		sesiDosen();
		$this->load->model('M_mahasiswa');
		$this->load->model('M_dosen');
		$this->load->model('M_matkul');
		$this->load->model('M_nilai');
	}
	public function index() {
		redirect('dosen/dashboard','refresh');
	}
	public function dashboard() {
		$data = array(
			'title' => 'Dashboard | Panel Dosen SIINI'
		);
		$this->load->view('dosen/header', $data);
		$this->load->view('dosen/dashboard');
		$this->load->view('dosen/footer');
	}
//list nilai
	public function nilai() {
		$nid = $this->session->userdata('nid');
		$data = array(
			'title' => 'Daftar Nilai Mahasiswa | Panel Dosen SIINI',
			'nil' => $this->db->query("SELECT * FROM tbl_nilai WHERE nid = '$nid'")->result()
		);
		$this->load->view('dosen/header', $data);
		$this->load->view('dosen/nilai_list');
		$this->load->view('dosen/footer');
	}
//tambah nilai
	public function nilai_tambah() {
		if (isset($_POST['submit'])) {
			$this->M_nilai->simpan();
			$this->session->set_flashdata('simpan', 'Nilai Mahasiswa baru berhasil tersimpan ...');
			redirect('dosen/nilai');
		} else {
			$nid = $this->session->userdata('nid');
			$data = array(
				'title' => 'Transkasi Nilai | Panel Dosen SIINI',
				'mhs' => $this->M_mahasiswa->data(),
				'mtk' => $this->db->query("SELECT * FROM tbl_matakuliah WHERE nid = '$nid'")->result()
			);
			$this->load->view('dosen/header', $data);
			$this->load->view('dosen/nilai_tambah');
			$this->load->view('dosen/footer');
		}
	}
//profil saya
	public function profil_saya() {
		if (isset($_POST['submit'])) {
			$uploadFoto = $this->upload_foto();
			$this->M_dosen->update($uploadFoto);
			$this->session->set_flashdata('simpan', 'Profil kamu diperbaharui ...');
			redirect('dosen/profil_saya');
		} else {
			$data = array(
				'title' => 'Profil Saya | Panel Dosen SIINI',
				'ps' => $this->db->get_where('tbl_dosen', array('nid' => $this->session->userdata('nid')))->row_array()
			);
			$this->load->view('dosen/header', $data);
			$this->load->view('dosen/profil_saya');
			$this->load->view('dosen/footer');
		}
	}
//upload foto
	public function upload_foto() {
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		$config['max_size'] = 2048;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('filefoto');
		$upload = $this->upload->data();
		return $upload['file_name'];
	}
}
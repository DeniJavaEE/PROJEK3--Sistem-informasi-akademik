<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_dosen');
		$this->load->model('M_mahasiswa');
	}
	public function index() {
		if(isset($_SESSION['username'])) {
			redirect(site_url('admin'));
		} else if(isset($_SESSION['nid'])) {
			redirect(site_url('dosen'));
		} else if(isset($_SESSION['nim'])) {
			redirect(site_url('mahasiswa'));
		}
		$this->load->view('view_masuk');
	}
	public function cekMasuk() {
		if (isset($_POST['submit'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$loginAdmin = $this->M_admin->chekLogin($username, $password);
			$loginDosen = $this->M_dosen->chekLogin($username, $password);
			$loginMahasiswa = $this->M_mahasiswa->chekLogin($username, $password);
			if (!empty($loginAdmin)) {
				$this->session->set_userdata($loginAdmin);
				$this->session->set_flashdata('berhasil', 'kamu berhasil masuk ...');
				redirect('admin');
			} elseif (!empty($loginDosen)) {
				$this->session->set_userdata($loginDosen);
				$this->session->set_flashdata('berhasil', 'kamu berhasil masuk ...');
				redirect('dosen');
			} elseif (!empty($loginMahasiswa)) {
				$this->session->set_userdata($loginMahasiswa);
				$this->session->set_flashdata('berhasil', 'kamu berhasil masuk ...');
				redirect('mahasiswa');

			} else {
				$this->session->set_flashdata('gagal', 'maaf, username / password kamu salah !');
				redirect();
			}
		} else {
			$this->session->set_flashdata('gagal', 'maaf, username / password kamu salah !');
			redirect();
		}
	}
	public function keluar() {
		$this->session->sess_destroy();
		$this->session->set_flashdata('keluar', 'Kamu berhasil keluar ...');
		redirect();
	}
}
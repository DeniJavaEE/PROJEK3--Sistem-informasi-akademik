<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		sesiAdmin();
		$this->load->model('M_mahasiswa');
		$this->load->model('M_dosen');
		$this->load->model('M_admin');
		$this->load->model('M_matkul');
		$this->load->model('M_nilai');
	}
	public function index() {
		redirect('admin/dashboard','refresh');
	}
//dashboard
	public function dashboard() {
		$data = array(
			'title' => 'Dashboard | Panel Admin SIINI',
			'mtk' => $this->db->query("SELECT * FROM tbl_matakuliah")->num_rows(),
			'mhs' => $this->db->query("SELECT * FROM tbl_mahasiswa")->num_rows(),
			'dsn' => $this->db->query("SELECT * FROM tbl_dosen")->num_rows(),
			'adm' => $this->db->query("SELECT * FROM tbl_admin")->num_rows()
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

//list mahasiswa
	public function mahasiswa() {
		$data = array(
			'title' => 'Data Mahasiswa | Panel Admin SIINI',
			'mhs' => $this->M_mahasiswa->data()
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/mahasiswa_list');
		$this->load->view('admin/footer');
	}

//tambah mahasiswa
	public function mahasiswa_tambah() {
		if (isset($_POST['submit'])) {
			$uploadFoto = $this->upload_foto();
			$this->M_mahasiswa->simpan($uploadFoto);
			$this->session->set_flashdata('simpan', 'Mahasiswa baru berhasil tersimpan ...');
			redirect('admin/mahasiswa');
		} else {
			$data = array(
				'title' => 'Tambah Mahasiswa | Panel Admin SIINI'
			);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/mahasiswa_tambah');
			$this->load->view('admin/footer');
		}
	}
//edit mahasiswa
	public function mahasiswa_edit() {
		if (isset($_POST['submit'])) {
			$uploadFoto = $this->upload_foto();
			$this->M_mahasiswa->update($uploadFoto);
			$this->session->set_flashdata('simpan', 'Mahasiswa berhasil diperbaharui ...');
			redirect('admin/mahasiswa');
		} else {
			if ($nim = $this->uri->segment(3)) {
				$data = array(
					'title' => 'Edit Mahasiswa | Panel Admin SIINI',
					'mhs' => $this->db->get_where('tbl_mahasiswa', array('nim' => $nim))->row_array()
				);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/mahasiswa_edit');
				$this->load->view('admin/footer');
			} else {
				redirect('admin/mahasiswa');
			}
		}
	}
//hapus mahasiswa
	public function mahasiswa_hapus() {
		if ($nim = $this->uri->segment(3)) {
			if(!empty($nim)) {
				$this->db->where('nim', $nim);
				$this->db->delete('tbl_mahasiswa');
			}
			$this->session->set_flashdata('simpan', 'Mahasiswa berhasil terhapus ...');
			redirect('admin/mahasiswa');
		} else {
			redirect('admin/mahasiswa');
		}
	}
//list dosen
	public function dosen() {
		$data = array(
			'title' => 'Data Dosen | Panel Admin SIINI',
			'dsn' => $this->M_dosen->data()
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/dosen_list');
		$this->load->view('admin/footer');
	}
//tambah dosen
	public function dosen_tambah() {
		if (isset($_POST['submit'])) {
			$uploadFoto = $this->upload_foto();
			$this->M_dosen->simpan($uploadFoto);
			$this->session->set_flashdata('simpan', 'Dosen baru berhasil tersimpan ...');
			redirect('admin/dosen');
		} else {
			$data = array(
				'title' => 'Tambah Dosen | Panel Admin SIINI'
			);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/dosen_tambah');
			$this->load->view('admin/footer');
		}
	}

//edit dosen
	public function dosen_edit() {
		if (isset($_POST['submit'])) {
			$uploadFoto = $this->upload_foto();
			$this->M_dosen->update($uploadFoto);
			$this->session->set_flashdata('simpan', 'Dosen berhasil diperbaharui ...');
			redirect('admin/dosen');
		} else {
			if ($nid = $this->uri->segment(3)) {
				$data = array(
					'title' => 'Edit Dosen | Panel Admin SIINI',
					'dsn' => $this->db->get_where('tbl_dosen', array('nid' => $nid))->row_array()
				);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/dosen_edit');
				$this->load->view('admin/footer');
			} else {
				redirect('admin/dosen');
			}
		}
	}
//hapus dosen
	public function dosen_hapus() {
		if ($nid = $this->uri->segment(3)) {
			if(!empty($nid)) {
				$this->db->where('nid', $nid);
				$this->db->delete('tbl_dosen');
			}
			$this->session->set_flashdata('simpan', 'Dosen berhasil terhapus ...');
			redirect('admin/dosen');
		} else {
			redirect('admin/dosen');
		}
	}
//list user
	public function user() {
		$data = array(
			'title' => 'Data Admin | Panel Admin SIINI',
			'adm' => $this->M_admin->data()
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/admin_list');
		$this->load->view('admin/footer');
	}
//tambah user
	public function user_tambah() {
		if (isset($_POST['submit'])) {
			$uploadFoto = $this->upload_foto();
			$this->M_admin->simpan($uploadFoto);
			$this->session->set_flashdata('simpan', 'Admin baru berhasil tersimpan ...');
			redirect('admin/user');
		} else {
			$data = array(
				'title' => 'Tambah Admin | Panel Admin SIINI'
			);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/admin_tambah');
			$this->load->view('admin/footer');
		}
	}

//edit user
	public function user_edit() {
		if (isset($_POST['submit'])) {
			$uploadFoto = $this->upload_foto();
			$this->M_admin->update($uploadFoto);
			$this->session->set_flashdata('simpan', 'Admin berhasil diperbaharui ...');
			redirect('admin/user');
		} else {
			if ($username = $this->uri->segment(3)) {
				$data = array(
					'title' => 'Edit Admin | Panel Admin SIINI',
					'adm' => $this->db->get_where('tbl_admin', array('username' => $username))->row_array()
				);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/admin_edit');
				$this->load->view('admin/footer');
			} else {
				redirect('admin/user');
			}
		}
	}
//hapus user
	public function user_hapus() {
		if ($username = $this->uri->segment(3)) {
			if(!empty($username)) {
				$this->db->where('username', $username);
				$this->db->delete('tbl_admin');
			}
			$this->session->set_flashdata('simpan', 'Admin berhasil terhapus ...');
			redirect('admin/user');
		} else {
			redirect('admin/user');
		}
	}
//list matkul
	public function matkul() {
		$data = array(
			'title' => 'Data Mata Kuliah | Panel Admin SIINI',
			'mtk' => $this->M_matkul->data()
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/matkul_list');
		$this->load->view('admin/footer');
	}
//tambah matkul
	public function matkul_tambah() {
		if (isset($_POST['submit'])) {
			$this->M_matkul->simpan();
			$this->session->set_flashdata('simpan', 'Mata Kuliah baru berhasil tersimpan ...');
			redirect('admin/matkul');
		} else {
			$data = array(
				'title' => 'Tambah Mata Kuliah | Panel Admin SIINI',
				'dsn' => $this->M_dosen->data()
			);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/matkul_tambah');
			$this->load->view('admin/footer');
		}
	}
//edit matkul
	public function matkul_edit() {
		if (isset($_POST['submit'])) {
			$this->M_matkul->update();
			$this->session->set_flashdata('simpan', 'Mata Kuliah berhasil diperbaharui ...');
			redirect('admin/matkul');
		} else {
			if ($kode_mk = $this->uri->segment(3)) {
				$data = array(
					'title' => 'Edit Mata Kuliah | Panel Admin SIINI',
					'mtk' => $this->db->get_where('tbl_matakuliah', array('kode_mk' => $kode_mk))->row_array(),
					'dsn' => $this->M_dosen->data()
				);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/matkul_edit');
				$this->load->view('admin/footer');
			} else {
				redirect('admin/matkul');
			}
		}
	}
//hapus matkul
	public function matkul_hapus() {
		if ($kode_mk = $this->uri->segment(3)) {
			if(!empty($kode_mk)) {
				$this->db->where('kode_mk', $kode_mk);
				$this->db->delete('tbl_matakuliah');
			}
			$this->session->set_flashdata('simpan', 'Mata Kuliah berhasil terhapus ...');
			redirect('admin/matkul');
		} else {
			redirect('admin/matkul');
		}
	}
//list nilai
	public function nilai() {
		$data = array(
			'title' => 'Daftar Nilai Mahasiswa | Panel Admin SIINI',
			'nil' => $this->M_nilai->data()
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/nilai_list');
		$this->load->view('admin/footer');
	}
//tambah nilai
	public function nilai_tambah() {
		if (isset($_POST['submit'])) {
			$this->M_nilai->simpan();
			$this->session->set_flashdata('simpan', 'Nilai Mahasiswa baru berhasil tersimpan ...');
			redirect('admin/nilai');
		} else {
			$data = array(
				'title' => 'Transkasi Nilai | Panel Admin SIINI',
				'mhs' => $this->M_mahasiswa->data(),
				'mtk' => $this->M_matkul->data()
			);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/nilai_tambah');
			$this->load->view('admin/footer');
		}
	}
//edit nilai
	public function nilai_edit() {
		if (isset($_POST['submit'])) {
			$this->M_nilai->update();
			$this->session->set_flashdata('simpan', 'Nilai berhasil diperbaharui ...');
			redirect('admin/nilai');
		} else {
			if ($nim = $this->uri->segment(3)) {
				$data = array(
					'title' => 'Edit Nilai Mahasiswa | Panel Admin SIINI',
					'nil' => $this->db->get_where('tbl_nilai', array('nim' => $nim))->row_array()
				);
				$this->load->view('admin/header', $data);
				$this->load->view('admin/nilai_edit');
				$this->load->view('admin/footer');
			} else {
				redirect('admin/nilai');
			}
		}
	}

	public function profil_saya() {
		if (isset($_POST['submit'])) {
			$uploadFoto = $this->upload_foto();
			$this->M_admin->update($uploadFoto);
			$this->session->set_flashdata('simpan', 'Profil kamu diperbaharui ...');
			redirect('admin/profil_saya');
		} else {
			$data = array(
				'title' => 'Profil Saya | Panel Admin SIINI',
				'ps' => $this->db->get_where('tbl_admin', array('username' => $this->session->userdata('username')))->row_array()
			);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/profil_saya');
			$this->load->view('admin/footer');
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


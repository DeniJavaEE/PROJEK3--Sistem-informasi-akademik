<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cetak extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->Library('pdf');
	}
	public function index() {
		
	}

	public function mahasiswa(){
		$pdf = new FPDF('P','mm','A3');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(300,10,'DAFTAR MAHASISWA',0,1,'C');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,10,'');
		$pdf->Cell(15,10,'|| NO ||',1,0,'C');
		$pdf->Cell(30,10,'|| NIM ||',1,0,'C');
		$pdf->Cell(30,10,'|| NAMA ||',1,0,'C');
		$pdf->Cell(25,10,'|| JENIS ||',1,0,'C');
		$pdf->Cell(25,10,'|| TAHUN ||',1,0,'C');
		$pdf->Cell(50,10,'|| JURUSAN ||',1,0,'C');
		$pdf->Cell(30,10,'|| JENJANG ||',1,0,'C');
		$pdf->Cell(30,10,'|| KELAS ||',1,0,'C');
		$pdf->ln();
		$mahasiswa=$this->db->get('tbl_mahasiswa')->result();
		$n=1;
		foreach ($mahasiswa as $row) {
			# code...
			$pdf->SetFont('Arial','',12);
			$pdf->Cell(10,10,'');
			$pdf->Cell(15,10,$n,1,0,'C');
			$pdf->Cell(30,10,$row->nim,1,0,'C');
			$pdf->Cell(30,10,$row->nama_mhs,1,0,'C');
			$pdf->Cell(25,10,$row->jk_mhs,1,0,'C');
			$pdf->Cell(25,10,$row->thn_akademik,1,0,'C');
			$pdf->Cell(50,10,$row->jurusan_mhs,1,0,'C');
			$pdf->Cell(30,10,$row->jenjang_mhs,1,0,'C');
			$pdf->Cell(30,10,$row->kelas_program,1,0,'C');
			$pdf->ln();
			$n++;
		}
		$pdf->Output();
	}

	public function nilai(){
		$pdf = new FPDF('P','mm','A3');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(300,10,'| DAFTAR NILAI |',0,1,'C');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,10,'');
		$pdf->Cell(10,10,'No ',1,0,'C');
		$pdf->Cell(30,10,'NIM',1,0,'C');
		$pdf->Cell(30,10,'MAHASISWA',1,0,'C');
		$pdf->Cell(20,10,'TAHUN',1,0,'C');
		$pdf->Cell(25,10,'SEMESTER',1,0,'C');
		$pdf->Cell(25,10,'KODE MK',1,0,'C');
		$pdf->Cell(50,10,'MATA KULIAH',1,0,'C');
		$pdf->Cell(20,10,'SKS',1,0,'C');
		$pdf->Cell(20,10,'NILAI',1,0,'C');
		$pdf->Cell(20,10,'GRADE',1,0,'C');
		$pdf->Cell(25,10,'TANGGAL',1,0,'C');
		$pdf->ln();

		$nilai=$this->db->get('tbl_nilai, tbl_mahasiswa, tbl_matakuliah')->result();
		$n=1;
		foreach ($nilai as $row) {
			# code...
			$pdf->SetFont('Arial','',12);
			$pdf->Cell(10,10,'');
			$pdf->Cell(10,10,$n,1,0,'C');
			$pdf->Cell(30,10,$row->nim,1,0,'C');
			$pdf->Cell(30,10,$row->nama_mhs,1,0,'C');
			$pdf->Cell(20,10,$row->thn_akademik,1,0,'C');
			$pdf->Cell(25,10,$row->semester,1,0,'C');
			$pdf->Cell(25,10,$row->kode_mk,1,0,'C');
			$pdf->Cell(50,10,$row->nama_mk,1,0,'C');
			$pdf->Cell(20,10,$row->jml_sks,1,0,'C');
			$pdf->Cell(20,10,$row->nilai,1,0,'C');
			$pdf->Cell(20,10,$row->grade,1,0,'C');
			$pdf->Cell(25,10,$row->tgl_input,1,0,'C');
			$pdf->ln();
			$n;
		}
		$pdf->Output();

	}

	public function matkul(){
		$pdf = new FPDF('P','mm','A3');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(300,10,'DAFTAR MATAKULIAH',0,1,'C');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,10,'');
		$pdf->Cell(15,10,'|| NO ||',1,0,'C');
		$pdf->Cell(25,10,'|| KODE ||',1,0,'C');
		$pdf->Cell(50,10,'|| MATA KULIAH ||',1,0,'C');
		$pdf->Cell(25,10,'|| SKS ||',1,0,'C');
		$pdf->Cell(35,10,'|| SEMESTER||',1,0,'C');
		$pdf->Cell(50,10,'|| JURUSAN ||',1,0,'C');
		$pdf->Cell(60,10,'|| DOSEN ||',1,0,'C');
		$pdf->ln();
		$matakuliah=$this->db->get('tbl_matakuliah, tbl_dosen')->result();
		$n=1;
		foreach ($matakuliah as $row) {
			# code...
			$pdf->SetFont('Arial','',12);
			$pdf->Cell(10,10,'');
			$pdf->Cell(15,10,$n,1,0,'C');
			$pdf->Cell(25,10,$row->kode_mk,1,0,'C');
			$pdf->Cell(50,10,$row->nama_mk,1,0,'C');
			$pdf->Cell(25,10,$row->jml_sks,1,0,'C');
			$pdf->Cell(35,10,$row->semester,1,0,'C');
			$pdf->Cell(50,10,$row->jurusan,1,0,'C');
			$pdf->Cell(60,10,$row->nama_dosen,1,0,'C');
			$pdf->ln();
			$n++;
		}
		$pdf->Output();
	}

	public function dosen(){
		$pdf = new FPDF('P','mm','A4');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(200,10,'DAFTAR DOSEN',0,1,'C');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,10,'');
		$pdf->Cell(20,10,'|| NO ||',1,0,'C');
		$pdf->Cell(80,10,'|| NID ||',1,0,'C');
		$pdf->Cell(80,10,'|| NAMA ||',1,0,'C');
		$pdf->ln();
		$dosen=$this->db->get('tbl_dosen')->result();
		$n=1;
		foreach ($dosen as $row) {
			# code...
			$pdf->SetFont('Arial','',12);
			$pdf->Cell(10,10,'');
			$pdf->Cell(20,10,$n,1,0,'C');
			$pdf->Cell(80,10,$row->nid,1,0,'C');
			$pdf->Cell(80,10,$row->nama_dosen,1,0,'C');
			$pdf->ln();
			$n++;
		}
		$pdf->Output();
	}

	public function admin(){
		$pdf = new FPDF('P','mm','A4');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(200,10,'DAFTAR ADMIN',0,1,'C');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,10,'');
		$pdf->Cell(20,10,'|| NO ||',1,0,'C');
		$pdf->Cell(80,10,'|| ID ||',1,0,'C');
		$pdf->Cell(80,10,'|| NAMA ||',1,0,'C');
		$pdf->ln();
		$admin=$this->db->get('tbl_admin')->result();
		$n=1;
		foreach ($admin as $row) {
			# code...
			$pdf->SetFont('Arial','',12);
			$pdf->Cell(10,10,'');
			$pdf->Cell(20,10,$n,1,0,'C');
			$pdf->Cell(80,10,$row->username,1,0,'C');
			$pdf->Cell(80,10,$row->nama_admin,1,0,'C');
			$pdf->ln();
			$n++;
		}

		$pdf->Output();
	}
}
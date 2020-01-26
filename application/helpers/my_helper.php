<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session admin
function sesiAdmin() {
	if(isset($_SESSION['username'])) {
		return TRUE;
	} else {
		redirect(base_url(), 'refresh');
	}
}
//session dosen
function sesiDosen() {
	if(isset($_SESSION['nid'])) {
		return TRUE;
	} else {
		redirect(base_url(), 'refresh');
	}
}
//session Mahasiswa
function sesiMahasiswa() {
	if(isset($_SESSION['nim'])) {
		return TRUE;
	} else {
		redirect(base_url(), 'refresh');
	}
}
//getDosen
function getDosen($nid) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT nama_dosen FROM tbl_dosen WHERE nid = '$nid'")->row();
	return $ambil->nama_dosen;
}

//getMhs
function getMhs($nim) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT nama_mhs FROM tbl_mahasiswa WHERE nim = '$nim'")->row();
	return $ambil->nama_mhs;
}
//getTAMhs
function getNim($nim) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT nim FROM tbl_mahasiswa WHERE nim = '$nim'")->row();
	return $ambil->nim;
}
//getTAMhs
function getTAMhs($nim) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT thn_akademik FROM tbl_mahasiswa WHERE nim = '$nim'")->row();
	return $ambil->thn_akademik;
}
//getJMhs
function getJMhs($nim) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT jurusan_mhs FROM tbl_mahasiswa WHERE nim = '$nim'")->row();
	return $ambil->jurusan_mhs;
}
//Ambil Nama_mk
function getMatkul($kode_mk) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT nama_mk FROM tbl_matakuliah WHERE kode_mk = '$kode_mk'")->row();
	return $ambil->nama_mk;
}
//getMatkul
function getKDmatkul($kode_mk) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT kode_mk FROM tbl_nilai WHERE kode_mk = '$kode_mk'")->row();
	return $ambil->kode_mk;
}
//getSKSMatkul
function getSKSMatkul($kode_mk) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT jml_sks FROM tbl_matakuliah WHERE kode_mk = '$kode_mk'")->row();
	return $ambil->jml_sks;
}
//getSMatkul
function getSMatkul($kode_mk) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT semester FROM tbl_matakuliah WHERE kode_mk = '$kode_mk'")->row();
	return $ambil->semester;
}
//getSMatkul
function getTanggal($kode_mk) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT tgl_input FROM tbl_nilai WHERE kode_mk = '$kode_mk'")->row();
	return $ambil->tgl_input;
}
//getDMatkul
function getDMatkul($kode_mk) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT nid FROM tbl_matakuliah WHERE kode_mk = '$kode_mk'")->row();
	return $ambil->nid;
}
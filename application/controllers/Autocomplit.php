<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autocomplit extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function skhilang()
	{
		$nik = $_GET['nik'];
		$ambil = $this->db->get_where('table_bip', ['nik' => $nik])->row_array();
		$data =
			[
				"nama" => $ambil['nama'],
				"jk" => $ambil['jk'],
				"tmpt_lhr" => $ambil['tmpt_lhr'],
				"tanggal_lahir" => $ambil['tgl_lhr'],
				"pekerjaan" => $ambil['pekerjaan'],
				"agama" => $ambil['agama'],
				"status" => $ambil['status'],
				"alamat" => $ambil['alamat'],
				"rt" => $ambil['rt'],
				"rw" => $ambil['rw']
			];
		echo json_encode($data);
	}

	public function skizinnikah()
	{
		$nik = $_GET['nik'];
		$ambil = $this->db->get_where('table_bip', ['nik' => $nik])->row_array();
		$data =
			[
				"nama_suami" => $ambil['nama'],
				"jk_suami" => $ambil['jk'],
				"tmpt_lhr_suami" => $ambil['tmpt_lhr'],
				"tgl_lhr_suami" => $ambil['tgl_lhr'],
				"agama_suami" => $ambil['agama'],
				"pekerjaan_suami" => $ambil['pekerjaan'],
				"alamat_suami" => $ambil['alamat'],
				"kecamatan_suami" => $ambil['nama_kec'],
				"kabupaten_suami" => $ambil['nama_kab'],

				"nama_ayah" => $ambil['nama'],
				"jk_ayah" => $ambil['jk'],
				"tmpt_lhr_ayah" => $ambil['tmpt_lhr'],
				"tgl_lhr_ayah" => $ambil['tgl_lhr'],
				"agama_ayah" => $ambil['agama'],
				"pekerjaan_ayah" => $ambil['pekerjaan'],
				"alamat_ayah" => $ambil['alamat'],
				"kecamatan_ayah" => $ambil['nama_kec'],
				"kabupaten_ayah" => $ambil['nama_kab'],

				"nama_istri" => $ambil['nama'],
				"jk_istri" => $ambil['jk'],
				"tmpt_lhr_istri" => $ambil['tmpt_lhr'],
				"tgl_lhr_istri" => $ambil['tgl_lhr'],
				"agama_istri" => $ambil['agama'],
				"pekerjaan_istri" => $ambil['pekerjaan'],
				"alamat_istri" => $ambil['alamat'],
				"kecamatan_istri" => $ambil['nama_kec'],
				"kabupaten_istri" => $ambil['nama_kab'],

				"nama_ibu" => $ambil['nama'],
				"jk_ibu" => $ambil['jk'],
				"tmpt_lhr_ibu" => $ambil['tmpt_lhr'],
				"tgl_lhr_ibu" => $ambil['tgl_lhr'],
				"agama_ibu" => $ambil['agama'],
				"pekerjaan_ibu" => $ambil['pekerjaan'],
				"alamat_ibu" => $ambil['alamat'],
				"kecamatan_ibu" => $ambil['nama_kec'],
				"kabupaten_ibu" => $ambil['nama_kab']
			];
		echo json_encode($data);
	}

	public function skizinramai()
	{
		$nik = $_GET['nik'];
		$ambil = $this->db->get_where('table_bip', ['nik' => $nik])->row_array();
		$data =
			[
				"nama" => $ambil['nama'],
				"tmpt_lhr" => $ambil['tmpt_lhr'],
				"tgl_lhr" => $ambil['tgl_lhr'],
				"alamat" => $ambil['alamat'],
				"rt" => $ambil['rt'],
				"rw" => $ambil['rw']
			];
		echo json_encode($data);
	}

	public function skusaha()
	{
		$nik = $_GET['nik'];
		$ambil = $this->db->get_where('table_bip', ['nik' => $nik])->row_array();
		$data =
			[
				"nama" => $ambil['nama'],
				"tmpt_lhr" => $ambil['tmpt_lhr'],
				"tgl_lhr" => $ambil['tgl_lhr'],
				"pekerjaan" => $ambil['pekerjaan'],
				"jk" => $ambil['jk'],
				"agama" => $ambil['agama'],
				"alamat" => $ambil['alamat'],
				"rt" => $ambil['rt'],
				"rw" => $ambil['rw']
			];
		echo json_encode($data);
	}

	public function skTidakMampu()
	{
		$nik = $_GET['nik'];
		$ambil = $this->db->get_where('table_bip', ['nik' => $nik])->row_array();
		$data =
			[
				"nama" => $ambil['nama'],
				"tmpt_lhr" => $ambil['tmpt_lhr'],
				"tgl_lhr" => $ambil['tgl_lhr'],
				"pekerjaan" => $ambil['pekerjaan'],
				"jk" => $ambil['jk'],
				"agama" => $ambil['agama'],
				"status" => $ambil['status'],
				"alamat" => $ambil['alamat'],
				"rt" => $ambil['rt'],
				"rw" => $ambil['rw']
			];
		echo json_encode($data);
	}


	public function skKematian()
	{
		$nik = $_GET['nik'];
		$ambil = $this->db->get_where('table_bip', ['nik' => $nik])->row_array();
		$data =
			[
				"nama" => $ambil['nama'],
				"tmpt_lhr" => $ambil['tmpt_lhr'],
				"tgl_lhr" => $ambil['tgl_lhr'],
				"jk" => $ambil['jk'],
				"pekerjaan" => $ambil['pekerjaan'],
				"alamat" => $ambil['alamat'],
				"rt" => $ambil['rt'],
				"rw" => $ambil['rw']
			];
		echo json_encode($data);
	}

	public function srPermohonanPindah()
	{
		$nik = $_GET['nik'];
		$ambil = $this->db->get_where('table_bip', ['nik' => $nik])->row_array();
		$data =
			[
				"nama" => $ambil['nama'],
				"tmpt_lhr" => $ambil['tmpt_lhr'],
				"tgl_lhr" => $ambil['tgl_lhr'],
				"jk" => $ambil['jk'],
				"agama" => $ambil['agama'],
				"pekerjaan" => $ambil['pekerjaan'],
				"status" => $ambil['status'],
				"pekerjaan" => $ambil['pekerjaan'],
				"pendidikan" => $ambil['pddk_akhir'],
				"alamat_asal" => $ambil['alamat'],
			];
		echo json_encode($data);
	}

	public function pindahPengikut()
	{
		$nik = $_GET['nik'];
		$ambil = $this->db->get_where('table_bip', ['nik' => $nik])->row_array();
		$data =
			[
				"nama" => $ambil['nama'],
				"jk" => $ambil['jk'],
				"status" => $ambil['status'],
				"pendidikan" => $ambil['pddk_akhir'],
			];
		echo json_encode($data);
	}


	public function skKelahiran()
	{
		$nik = $_GET['nik'];
		$ambil = $this->db->get_where('table_bip', ['nik' => $nik])->row_array();
		$data =
			[
				"nama_ibu" => $ambil['nama'],
				"tmpt_ibu" => $ambil['tmpt_lhr'],
				"tgl_ibu" => $ambil['tgl_lhr'],
				"pekerjaan_ibu" => $ambil['pekerjaan'],
				"alamat_ibu" => $ambil['alamat'],


				"nama_ayah" => $ambil['nama'],
				"tmpt_ayah" => $ambil['tmpt_lhr'],
				"tgl_ayah" => $ambil['tgl_lhr'],
				"pekerjaan_ayah" => $ambil['pekerjaan'],
				"alamat_ayah" => $ambil['alamat'],

				"nama_anak" => $ambil['nama'],
				"jk_anak" => $ambil['jk'],
				"tmpt_anak" => $ambil['tmpt_lhr'],
				"tgl_anak" => $ambil['tgl_lhr'],
				"alamat_anak" => $ambil['alamat'],
			];
		echo json_encode($data);
	}
}

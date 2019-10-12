<?php
class Surat_model extends CI_model
{

	public function getSurat()
	{
		return $this->db->get("surat")->result_array();
	}

	public function getSuratById($id)
	{
		return $this->db->get_where('surat', ['id' => $id])->row_array();
	}
	// ================SURAT MASUK=================
	public function getSuratMasuk()
	{
		return $this->db->get('surat_masuk')->result_array();
	}

	public function getSuratMasukById($id)
	{
		return $this->db->get_where('surat_masuk', ['id' => $id])->row_array();
	}

	// ================SURAT KELUAR=================
	public function getSuratKeluar()
	{
		return $this->db->get('surat_keluar')->result_array();
	}

	public function getSuratKeluarById($id)
	{
		return $this->db->get_where('surat_keluar', ['id' => $id])->row_array();
	}

	// ================SURAT KETERANGAN HILANG=================
	public function getSkHilang()
	{
		return $this->db->get("sk_hilang")->result_array();
	}

	public function getSkHilangById($id)
	{
		$this->db->join('table_rt', 'table_rt.rt = sk_hilang.rt');
		$this->db->join('table_rw', 'table_rw.rw = sk_hilang.rw');
		return $this->db->get_where('sk_hilang', ['id' => $id])->row_array();
	}

	public function post_skHilang()
	{
		$data =
			[
				'nama' => $this->input->post('name', true),
				'nik' => $this->input->post('nik', true),
				"jk" => $this->input->post('jk', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"agama" => $this->input->post('agama', true),
				"status" => $this->input->post('status', true),
				"pekerjaan" => $this->input->post('pekerjaan', true),
				"hilang" => $this->input->post('hilang', true),
				"tgl_hilang" => $this->input->post('tgl_hilang', true),
				"antara" => $this->input->post('antara', true),
				"alamat" => $this->input->post('alamat', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];
		$this->db->insert('sk_hilang', $data);

		$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

			$message =
			[
				'user'=> $user['name'],
				'surat'=> 'SK Hilang'.'<br>'. $this->input->post('name', true) .' - '. $this->input->post('nik', true).' - Hilang: '. $this->input->post('hilang', true),
				'date' => date('d-m-Y'),
				'url' => 'laporan/skhilang',
				'eye'=>'0'
			];
		$this->db->insert('table_message', $message);
	}

	public function edit_skHilang($id)
	{
		$data =
			[
				'nama' => $this->input->post('name', true),
				'nik' => $this->input->post('nik', true),
				"jk" => $this->input->post('jk', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"agama" => $this->input->post('agama', true),
				"status" => $this->input->post('status', true),
				"pekerjaan" => $this->input->post('pekerjaan', true),
				"hilang" => $this->input->post('hilang', true),
				"tgl_hilang" => $this->input->post('tgl_hilang', true),
				"antara" => $this->input->post('antara', true),
				"alamat" => $this->input->post('alamat', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];
		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('sk_hilang', $data);
	}

	public function delete_skHilang($id)
	{
		$this->db->delete('sk_hilang', ['id' => $id]);
	}



	// ================SURAT KETERANGAN IZIN NIKAH=================
	public function getSkIzinNikah()
	{
		return $this->db->get("sk_izin_nikah")->result_array();
	}

	public function getSkIzinNikahById($id)
	{
		return $this->db->get_where('sk_izin_nikah', ['id' => $id])->row_array();
	}

	public function post_skIzinNikah()
	{
		$data =
			[
				"nama_suami" => $this->input->post('nama_suami', true),
				"nik_suami" => $this->input->post('nik_suami', true),
				"jk_suami" => $this->input->post('jk_suami', true),
				"tmpt_lhr_suami" => $this->input->post('tmpt_lhr_suami', true),
				"tgl_lhr_suami" => $this->input->post('tgl_lhr_suami', true),
				"agama_suami" => $this->input->post('agama_suami', true),
				"pekerjaan_suami" => $this->input->post('pekerjaan_suami', true),
				"alamat_suami" => $this->input->post('alamat_suami', true),

				"nama_istri" => $this->input->post('nama_istri', true),
				"nama_ayah_istri" => $this->input->post('nama_ayah_istri', true),
				"nik_istri" => $this->input->post('nik_istri', true),
				"jk_istri" => $this->input->post('jk_istri', true),
				"tmpt_lhr_istri" => $this->input->post('tmpt_lhr_istri', true),
				"tgl_lhr_istri" => $this->input->post('tgl_lhr_istri', true),
				"agama_istri" => $this->input->post('agama_istri', true),
				"pekerjaan_istri" => $this->input->post('pekerjaan_istri', true),
				"alamat_istri" => $this->input->post('alamat_istri', true),

				"nama_ayah" => $this->input->post('nama_ayah', true),
				"nik_ayah" => $this->input->post('nik_ayah', true),
				"jk_ayah" => $this->input->post('jk_ayah', true),
				"tmpt_lhr_ayah" => $this->input->post('tmpt_lhr_ayah', true),
				"tgl_lhr_ayah" => $this->input->post('tgl_lhr_ayah', true),
				"agama_ayah" => $this->input->post('agama_ayah', true),
				"pekerjaan_ayah" => $this->input->post('pekerjaan_ayah', true),
				"alamat_ayah" => $this->input->post('alamat_ayah', true),

				"nama_ibu" => $this->input->post('nama_ibu', true),
				"nik_ibu" => $this->input->post('nik_ibu', true),
				"jk_ibu" => $this->input->post('jk_ibu', true),
				"tmpt_lhr_ibu" => $this->input->post('tmpt_lhr_ibu', true),
				"tgl_lhr_ibu" => $this->input->post('tgl_lhr_ibu', true),
				"agama_ibu" => $this->input->post('agama_ibu', true),
				"pekerjaan_ibu" => $this->input->post('pekerjaan_ibu', true),
				"alamat_ibu" => $this->input->post('alamat_ibu', true),

				"nama_istri_suami" => $this->input->post('nama_istri_suami', true),

				"desa_suami" => $this->input->post('desa_suami', true),
				"kecamatan_suami" => $this->input->post('kecamatan_suami', true),
				"kabupaten_suami" => $this->input->post('kabupaten_suami', true),

				"desa_istri" => $this->input->post('desa_istri', true),
				"kecamatan_istri" => $this->input->post('kecamatan_istri', true),
				"kabupaten_istri" => $this->input->post('kabupaten_istri', true),

				"desa_ayah" => $this->input->post('desa_ayah', true),
				"kecamatan_ayah" => $this->input->post('kecamatan_ayah', true),
				"kabupaten_ayah" => $this->input->post('kabupaten_ayah', true),

				"desa_ibu" => $this->input->post('desa_ibu', true),
				"kecamatan_ibu" => $this->input->post('kecamatan_ibu', true),
				"kabupaten_ibu" => $this->input->post('kabupaten_ibu', true),

				"stts_pria" => $this->input->post('stts_pria', true),
				"stts_wanita" => $this->input->post('stts_wanita', true)

			];
		$this->db->insert('sk_izin_nikah', $data);
		$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$message =
			[
				'user'=> $user['name'],
				'surat'=> 'Surat Izin Nikah'.'<br>'.  $this->input->post('nama_suami', true) .' - '. $this->input->post('nik_suami', true) .'- Istri '.  $this->input->post('nama_istri', true),
				'date' => date('d-m-Y'),
				'url' => 'laporan/izinnikah',
				'eye'=>'0'
			];
		$this->db->insert('table_message', $message);
	}


	public function edite_skIzinNikah()
	{
		$data =
			[
				"nama_suami" => $this->input->post('nama_suami', true),
				"nik_suami" => $this->input->post('nik_suami', true),
				"jk_suami" => $this->input->post('jk_suami', true),
				"tmpt_lhr_suami" => $this->input->post('tmpt_lhr_suami', true),
				"tgl_lhr_suami" => $this->input->post('tgl_lhr_suami', true),
				"agama_suami" => $this->input->post('agama_suami', true),
				"pekerjaan_suami" => $this->input->post('pekerjaan_suami', true),
				"alamat_suami" => $this->input->post('alamat_suami', true),

				"nama_istri" => $this->input->post('nama_istri', true),
				"nama_ayah_istri" => $this->input->post('nama_ayah_istri', true),
				"nik_istri" => $this->input->post('nik_istri', true),
				"jk_istri" => $this->input->post('jk_istri', true),
				"tmpt_lhr_istri" => $this->input->post('tmpt_lhr_istri', true),
				"tgl_lhr_istri" => $this->input->post('tgl_lhr_istri', true),
				"agama_istri" => $this->input->post('agama_istri', true),
				"pekerjaan_istri" => $this->input->post('pekerjaan_istri', true),
				"alamat_istri" => $this->input->post('alamat_istri', true),

				"nama_ayah" => $this->input->post('nama_ayah', true),
				"nik_ayah" => $this->input->post('nik_ayah', true),
				"jk_ayah" => $this->input->post('jk_ayah', true),
				"tmpt_lhr_ayah" => $this->input->post('tmpt_lhr_ayah', true),
				"tgl_lhr_ayah" => $this->input->post('tgl_lhr_ayah', true),
				"agama_ayah" => $this->input->post('agama_ayah', true),
				"pekerjaan_ayah" => $this->input->post('pekerjaan_ayah', true),
				"alamat_ayah" => $this->input->post('alamat_ayah', true),

				"nama_ibu" => $this->input->post('nama_ibu', true),
				"nik_ibu" => $this->input->post('nik_ibu', true),
				"jk_ibu" => $this->input->post('jk_ibu', true),
				"tmpt_lhr_ibu" => $this->input->post('tmpt_lhr_ibu', true),
				"tgl_lhr_ibu" => $this->input->post('tgl_lhr_ibu', true),
				"agama_ibu" => $this->input->post('agama_ibu', true),
				"pekerjaan_ibu" => $this->input->post('pekerjaan_ibu', true),
				"alamat_ibu" => $this->input->post('alamat_ibu', true),

				"nama_istri_suami" => $this->input->post('nama_istri_suami', true),

				"desa_suami" => $this->input->post('desa_suami', true),
				"kecamatan_suami" => $this->input->post('kecamatan_suami', true),
				"kabupaten_suami" => $this->input->post('kabupaten_suami', true),

				"desa_istri" => $this->input->post('desa_istri', true),
				"kecamatan_istri" => $this->input->post('kecamatan_istri', true),
				"kabupaten_istri" => $this->input->post('kabupaten_istri', true),

				"desa_ayah" => $this->input->post('desa_ayah', true),
				"kecamatan_ayah" => $this->input->post('kecamatan_ayah', true),
				"kabupaten_ayah" => $this->input->post('kabupaten_ayah', true),

				"desa_ibu" => $this->input->post('desa_ibu', true),
				"kecamatan_ibu" => $this->input->post('kecamatan_ibu', true),
				"kabupaten_ibu" => $this->input->post('kabupaten_ibu', true),

				"stts_pria" => $this->input->post('stts_pria', true),
				"stts_wanita" => $this->input->post('stts_wanita', true)

			];
		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('sk_izin_nikah', $data);
	}

	public function delete_skIzinNikah($id)
	{
		$this->db->delete('sk_izin_nikah', ['id' => $id]);
	}

	// ================SURAT KETERANGAN IZIN NIKAH=================
	public function getSkIzinRamai()
	{
		return $this->db->get("sk_izin_ramai")->result_array();
	}

	public function getSkIzinRamaiById($id)
	{
		$this->db->join('table_rt', 'table_rt.rt = sk_izin_ramai.rt');
		$this->db->join('table_rw', 'table_rw.rw = sk_izin_ramai.rw');
		return $this->db->get_where('sk_izin_ramai', ['id' => $id])->row_array();
	}

	public function post_skIzinRamai()
	{
		$data =
			[
				"perihal" => $this->input->post('perihal', true),
				"kepada" => $this->input->post('kepada', true),
				"di" => $this->input->post('di', true),
				"nama" => $this->input->post('nama', true),
				"nik" => $this->input->post('nik', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"alamat" => $this->input->post('alamat', true),
				"hari" => $this->input->post('hari', true),
				"tanggal" => $this->input->post('tanggal', true),
				"waktu" => $this->input->post('waktu', true),
				"tempat" => $this->input->post('tempat', true),
				"kegiatan" => $this->input->post('kegiatan', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];
		$this->db->insert('sk_izin_ramai', $data);
		$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$message =
			[
				'user'=> $user['name'],
				'surat'=> 'SK Izin Ramai'.'<br>'.  $this->input->post('perihal', true) .' - '. $this->input->post('nik', true) .'- kegiatan: '.  $this->input->post('kegiatan', true),
				'date' => date('d-m-Y'),
				'url' => 'laporan/izinramai',
				'eye'=>'0'
			];
		$this->db->insert('table_message', $message);


	}

	public function edite_skIzinRamai($id)
	{
		$data =
			[
				"perihal" => $this->input->post('perihal', true),
				"kepada" => $this->input->post('kepada', true),
				"di" => $this->input->post('di', true),
				"nama" => $this->input->post('nama', true),
				"nik" => $this->input->post('nik', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"alamat" => $this->input->post('alamat', true),
				"hari" => $this->input->post('hari', true),
				"tanggal" => $this->input->post('tanggal', true),
				"waktu" => $this->input->post('waktu', true),
				"tempat" => $this->input->post('tempat', true),
				"kegiatan" => $this->input->post('kegiatan', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];
		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('sk_izin_ramai', $data);
	}

	public function delete_skIzinRamai($id)
	{
		$this->db->delete('sk_izin_ramai', ['id' => $id]);
	}


	// ================SURAT KETERANGAN USAHA=================

	public function getSkUsaha()
	{
		return $this->db->get("sk_usaha")->result_array();
	}

	public function getSkUsahaById($id)
	{
		$this->db->join('table_rt', 'table_rt.rt = sk_usaha.rt');
		$this->db->join('table_rw', 'table_rw.rw = sk_usaha.rw');
		return $this->db->get_where('sk_usaha', ['id' => $id])->row_array();
	}

	public function post_skUsaha()
	{
		$data =
			[
				"nik" => $this->input->post('nik', true),
				"nama" => $this->input->post('nama', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"pekerjaan" => $this->input->post('pekerjaan', true),
				"jk" => $this->input->post('jk', true),
				"agama" => $this->input->post('agama', true),
				"alamat" => $this->input->post('alamat', true),
				"bidang" => $this->input->post('bidang', true),
				"alamat_usaha" => $this->input->post('alamat_usaha', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];

		$this->db->insert('sk_usaha', $data);
		$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$message =
			[
				'user'=> $user['name'],
				'surat'=> 'SK Usaha'.'<br>'.  $this->input->post('nama', true) .' - '. $this->input->post('nik', true) .'- Bidang: '.  $this->input->post('bidang', true),
				'date' => date('d-m-Y'),
				'url' => 'laporan/skusaha',
				'eye'=>'0'
			];
		$this->db->insert('table_message', $message);
	}

	public function edite_skUsaha($id)
	{
		$data =
			[
				"nik" => $this->input->post('nik', true),
				"nama" => $this->input->post('nama', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"pekerjaan" => $this->input->post('pekerjaan', true),
				"jk" => $this->input->post('jk', true),
				"agama" => $this->input->post('agama', true),
				"alamat" => $this->input->post('alamat', true),
				"bidang" => $this->input->post('bidang', true),
				"alamat_usaha" => $this->input->post('alamat_usaha', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];

		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('sk_usaha', $data);
	}

	public function delete_skUsaha($id)
	{
		$this->db->delete('sk_usaha', ['id' => $id]);
	}



	// ================SURAT KETERANGAN TIDAK MAMPU=================

	public function getSkTidakMampu()
	{
		return $this->db->get("sk_tidak_mampu")->result_array();
	}

	public function getSkTidakMampuById($id)
	{
		$this->db->join('table_rt', 'table_rt.rt = sk_tidak_mampu.rt');
		$this->db->join('table_rw', 'table_rw.rw = sk_tidak_mampu.rw');
		return $this->db->get_where('sk_tidak_mampu', ['id' => $id])->row_array();
	}

	public function post_skTidakMampu()
	{
		$data =
			[
				"nik" => $this->input->post('nik', true),
				"nama" => $this->input->post('nama', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"pekerjaan" => $this->input->post('pekerjaan', true),
				"jk" => $this->input->post('jk', true),
				"agama" => $this->input->post('agama', true),
				"status" => $this->input->post('status', true),
				"warganegara" => $this->input->post('warganegara', true),
				"alamat" => $this->input->post('alamat', true),
				"pembuatan" => $this->input->post('pembuatan', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];

		$this->db->insert('sk_tidak_mampu', $data);
		$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$message =
			[
				'user'=> $user['name'],
				'surat'=> 'SK Tidak Mampu'.'<br>'.  $this->input->post('nama', true) .' - '. $this->input->post('nik', true) .'- Pembuatan: '.  $this->input->post('pembuatan', true),
				'date' => date('d-m-Y'),
				'url' => 'laporan/tidakmampu',
				'eye'=>'0'
			];
		$this->db->insert('table_message', $message);
	}

	public function edite_skTidakMampu($id)
	{
		$data =
			[
				"nik" => $this->input->post('nik', true),
				"nama" => $this->input->post('nama', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"pekerjaan" => $this->input->post('pekerjaan', true),
				"jk" => $this->input->post('jk', true),
				"agama" => $this->input->post('agama', true),
				"status" => $this->input->post('status', true),
				"warganegara" => $this->input->post('warganegara', true),
				"alamat" => $this->input->post('alamat', true),
				"pembuatan" => $this->input->post('pembuatan', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];

		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('sk_tidak_mampu', $data);
	}

	public function delete_skTidakMampu($id)
	{
		$this->db->delete('sk_tidak_mampu', ['id' => $id]);
	}






	// ================SURAT KETERANGAN KEMATIAN=================

	public function getSkKematian()
	{
		return $this->db->get("sk_kematian")->result_array();
	}

	public function getSkKematianById($id)
	{
		$this->db->join('table_rt', 'table_rt.rt = sk_kematian.rt');
		$this->db->join('table_rw', 'table_rw.rw = sk_kematian.rw');
		return $this->db->get_where('sk_kematian', ['id' => $id])->row_array();
	}

	public function post_skKematian()
	{
		$data =
			[
				"nik" => $this->input->post('nik', true),
				"nama" => $this->input->post('nama', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"jk" => $this->input->post('jk', true),
				"pekerjaan" => $this->input->post('pekerjaan', true),
				"alamat" => $this->input->post('alamat', true),
				"pada_hari" => $this->input->post('pada_hari', true),
				"pukul" => $this->input->post('pukul', true),
				"meninggal_di" => $this->input->post('meninggal_di', true),
				"sebab" => $this->input->post('sebab', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];

		$this->db->insert('sk_kematian', $data);
		$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$message =
			[
				'user'=> $user['name'],
				'surat'=> 'SK Kematian'.'<br>'.  $this->input->post('nama', true) .' - '. $this->input->post('nik', true) .'- Penyebab: '.  $this->input->post('sebab', true),
				'date' => date('d-m-Y'),
				'url' => 'laporan/skkematian',
				'eye'=>'0'
			];
		$this->db->insert('table_message', $message);
	}

	public function edite_skKematian($id)
	{
		$data =
			[
				"nik" => $this->input->post('nik', true),
				"nama" => $this->input->post('nama', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"jk" => $this->input->post('jk', true),
				"pekerjaan" => $this->input->post('pekerjaan', true),
				"alamat" => $this->input->post('alamat', true),
				"pada_hari" => $this->input->post('pada_hari', true),
				"pukul" => $this->input->post('pukul', true),
				"meninggal_di" => $this->input->post('meninggal_di', true),
				"sebab" => $this->input->post('sebab', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];

		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('sk_kematian', $data);
	}

	public function delete_skKematian($id)
	{
		$this->db->delete('sk_kematian', ['id' => $id]);
	}




	// ================SURAT SANTUNAN KEMATIAN=================

	public function getSsKematian()
	{
		return $this->db->get("ss_kematian")->result_array();
	}

	public function getSsKematianById($id)
	{
		return $this->db->get_where('ss_kematian', ['id' => $id])->row_array();
	}

	public function post_ssKematian()
	{
		$data =
			[
				"nama" => $this->input->post('nama', true),
				"nik" => $this->input->post('nik', true),
				"alamat" => $this->input->post('alamat', true)
			];

		$this->db->insert('ss_kematian', $data);
		$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$message =
			[
				'user'=> $user['name'],
				'surat'=> 'Surat Santunan Kematian'.'<br>'.  $this->input->post('nama', true) .' - '. $this->input->post('nik', true) .'- Alamat: '.  $this->input->post('alamat', true),
				'date' => date('d-m-Y'),
				'url' => 'laporan/ssKematian',
				'eye'=>'0'
			];
		$this->db->insert('table_message', $message);
	}

	public function edite_ssKematian($id)
	{
		$data =
			[
				"nama" => $this->input->post('nama', true),
				"nik" => $this->input->post('nik', true),
				"alamat" => $this->input->post('alamat', true)
			];

		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('ss_kematian', $data);
	}

	public function delete_ssKematian($id)
	{
		$this->db->delete('ss_kematian', ['id' => $id]);
	}






	// ================SURAT REKOMENDASI PERMOHONAN PINDAH=================

	public function getsrpermohonanPindah()
	{
		return $this->db->get("sr_permohonan_pindah")->result_array();
	}

	public function getsrpermohonanPindahById($id)
	{
		$this->db->join('surat_pindah_pengikut', 'surat_pindah_pengikut.kode_pengikut = sr_permohonan_pindah.kode_pengikut');
		return $this->db->get_where('sr_permohonan_pindah', ['sr_permohonan_pindah.id' => $id])->row_array();
	}


	public function post_srpermohonanPindah()
	{
		$data =
			[
				"nik" => $this->input->post('nik', true),
				"nama" => $this->input->post('nama', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"jk" => $this->input->post('jk', true),
				"warganegara" => $this->input->post('warganegara', true),
				"agama" => $this->input->post('agama', true),
				"status" => $this->input->post('status', true),
				"pekerjaan" => $this->input->post('pekerjaan', true),
				"pendidikan" => $this->input->post('pendidikan', true),
				"alamat_asal" => $this->input->post('alamat_asal', true),
				"to_alamat" => $this->input->post('to_alamat', true),
				"to_desa" => $this->input->post('to_desa', true),
				"to_kecamatan" => $this->input->post('to_kecamatan', true),
				"to_kab" => $this->input->post('to_kab', true),
				"to_prov" => $this->input->post('to_prov', true),
				"to_tanggal" => $this->input->post('to_tanggal', true),
				"alasan_pindah" => $this->input->post('alasan_pindah', true),
				"kode_pengikut" => $this->input->post('nik', true) . date("d-m-y")
			];

		$nik_p1 =  $this->input->post('nik_p-1', true);
		$nama_p1 =  $this->input->post('nama_p-1', true);
		$jk_p1 =  $this->input->post('jk_p-1', true);
		$umur_p1 =  $this->input->post('umur_p-1', true);
		$status_p1 =  $this->input->post('status_p-1', true);
		$pendidikan_p1 =  $this->input->post('pendidikan_p-1', true);

		$nik_p2 =  $this->input->post('nik_p-2', true);
		$nama_p2 =  $this->input->post('nama_p-2', true);
		$jk_p2 =  $this->input->post('jk_p-2', true);
		$umur_p2 =  $this->input->post('umur_p-2', true);
		$status_p2 =  $this->input->post('status_p-2', true);
		$pendidikan_p2 =  $this->input->post('pendidikan_p-2', true);

		$nik_p3 =  $this->input->post('nik_p-3', true);
		$nama_p3 =  $this->input->post('nama_p-3', true);
		$jk_p3 =  $this->input->post('jk_p-3', true);
		$umur_p3 =  $this->input->post('umur_p-3', true);
		$status_p3 =  $this->input->post('status_p-3', true);
		$pendidikan_p3 =  $this->input->post('pendidikan_p-3', true);

		$nik_p4 =  $this->input->post('nik_p-4', true);
		$nama_p4 =  $this->input->post('nama_p-4', true);
		$jk_p4 =  $this->input->post('jk_p-4', true);
		$umur_p4 =  $this->input->post('umur_p-4', true);
		$status_p4 =  $this->input->post('status_p-4', true);
		$pendidikan_p4 =  $this->input->post('pendidikan_p-4', true);

		$nik_p5 =  $this->input->post('nik_p-5', true);
		$nama_p5 =  $this->input->post('nama_p-5', true);
		$jk_p5 =  $this->input->post('jk_p-5', true);
		$umur_p5 =  $this->input->post('umur_p-5', true);
		$status_p5 =  $this->input->post('status_p-5', true);
		$pendidikan_p5 =  $this->input->post('pendidikan_p-5', true);

		$nik_p6 =  $this->input->post('nik_p-6', true);
		$nama_p6 =  $this->input->post('nama_p-6', true);
		$jk_p6 =  $this->input->post('jk_p-6', true);
		$umur_p6 =  $this->input->post('umur_p-6', true);
		$status_p6 =  $this->input->post('status_p-6', true);
		$pendidikan_p6 =  $this->input->post('pendidikan_p-6', true);

		$data2 =
			[
				"kode_pengikut" => $this->input->post('nik', true) . date("d-m-y"),
				"nik_p1" => $nik_p1,
				"nama_p1" => $nama_p1,
				"jk_p1" => $jk_p1,
				"umur_p1" => $umur_p1,
				"status_p1" => $status_p1,
				"pendidikan_p1" => $pendidikan_p1,

				"nik_p2" => $nik_p2,
				"nama_p2" => $nama_p2,
				"jk_p2" => $jk_p2,
				"umur_p2" => $umur_p2,
				"status_p2" => $status_p2,
				"pendidikan_p2" => $pendidikan_p2,

				"nik_p3" => $nik_p3,
				"nama_p3" => $nama_p3,
				"jk_p3" => $jk_p3,
				"umur_p3" => $umur_p3,
				"status_p3" => $status_p3,
				"pendidikan_p3" => $pendidikan_p3,

				"nik_p4" => $nik_p4,
				"nama_p4" => $nama_p4,
				"jk_p4" => $jk_p4,
				"umur_p4" => $umur_p4,
				"status_p4" => $status_p4,
				"pendidikan_p4" => $pendidikan_p4,

				"nik_p5" => $nik_p5,
				"nama_p5" => $nama_p5,
				"jk_p5" => $jk_p5,
				"umur_p5" => $umur_p5,
				"status_p5" => $status_p5,
				"pendidikan_p5" => $pendidikan_p5,

				"nik_p6" => $nik_p6,
				"nama_p6" => $nama_p6,
				"jk_p6" => $jk_p6,
				"umur_p6" => $umur_p6,
				"status_p6" => $status_p6,
				"pendidikan_p6" => $pendidikan_p6,
			];
		$this->db->insert('surat_pindah_pengikut', $data2);
		$this->db->insert('sr_permohonan_pindah', $data);
		$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$message =
			[
				'user'=> $user['name'],
				'surat'=> 'Surat Permohonan Pindah'.'<br>'.  $this->input->post('nama', true) .' - '. $this->input->post('nik', true) .'- Alasan Pindah: '.  $this->input->post('alasan_pindah', true),
				'date' => date('d-m-Y'),
				'url' => 'laporan/srpermohonanPindah',
				'eye'=>'0'
			];
		$this->db->insert('table_message', $message);
	}

	public function edite_srpermohonanPindah($id)
	{
		$data =
			[
				"nik" => $this->input->post('nik', true),
				"nama" => $this->input->post('nama', true),
				"tmpt_lhr" => $this->input->post('tmpt_lhr', true),
				"tgl_lhr" => $this->input->post('tgl_lhr', true),
				"jk" => $this->input->post('jk', true),
				"warganegara" => $this->input->post('warganegara', true),
				"agama" => $this->input->post('agama', true),
				"status" => $this->input->post('status', true),
				"pekerjaan" => $this->input->post('pekerjaan', true),
				"pendidikan" => $this->input->post('pendidikan', true),
				"alamat_asal" => $this->input->post('alamat_asal', true),
				"to_alamat" => $this->input->post('to_alamat', true),
				"to_desa" => $this->input->post('to_desa', true),
				"to_kecamatan" => $this->input->post('to_kecamatan', true),
				"to_kab" => $this->input->post('to_kab', true),
				"to_prov" => $this->input->post('to_prov', true),
				"to_tanggal" => $this->input->post('to_tanggal', true),
				"alasan_pindah" => $this->input->post('alasan_pindah', true),
				"kode_pengikut" => $this->input->post('nik', true) . date("d-m-y")
			];


		$nik_p1 =  $this->input->post('nik_p1', true);
		$nama_p1 =  $this->input->post('nama_p1', true);
		$jk_p1 =  $this->input->post('jk_p1', true);
		$umur_p1 =  $this->input->post('umur_p1', true);
		$status_p1 =  $this->input->post('status_p1', true);
		$pendidikan_p1 =  $this->input->post('pendidikan_p1', true);

		$nik_p2 =  $this->input->post('nik_p2', true);
		$nama_p2 =  $this->input->post('nama_p2', true);
		$jk_p2 =  $this->input->post('jk_p2', true);
		$umur_p2 =  $this->input->post('umur_p2', true);
		$status_p2 =  $this->input->post('status_p2', true);
		$pendidikan_p2 =  $this->input->post('pendidikan_p2', true);

		$nik_p3 =  $this->input->post('nik_p3', true);
		$nama_p3 =  $this->input->post('nama_p3', true);
		$jk_p3 =  $this->input->post('jk_p3', true);
		$umur_p3 =  $this->input->post('umur_p3', true);
		$status_p3 =  $this->input->post('status_p3', true);
		$pendidikan_p3 =  $this->input->post('pendidikan_p3', true);

		$nik_p4 =  $this->input->post('nik_p4', true);
		$nama_p4 =  $this->input->post('nama_p4', true);
		$jk_p4 =  $this->input->post('jk_p4', true);
		$umur_p4 =  $this->input->post('umur_p4', true);
		$status_p4 =  $this->input->post('status_p4', true);
		$pendidikan_p4 =  $this->input->post('pendidikan_p4', true);

		$nik_p5 =  $this->input->post('nik_p5', true);
		$nama_p5 =  $this->input->post('nama_p5', true);
		$jk_p5 =  $this->input->post('jk_p5', true);
		$umur_p5 =  $this->input->post('umur_p5', true);
		$status_p5 =  $this->input->post('status_p5', true);
		$pendidikan_p5 =  $this->input->post('pendidikan_p5', true);

		$nik_p6 =  $this->input->post('nik_p6', true);
		$nama_p6 =  $this->input->post('nama_p6', true);
		$jk_p6 =  $this->input->post('jk_p6', true);
		$umur_p6 =  $this->input->post('umur_p6', true);
		$status_p6 =  $this->input->post('status_p6', true);
		$pendidikan_p6 =  $this->input->post('pendidikan_p6', true);

		$data2 =
			[
				"kode_pengikut" => $this->input->post('nik', true) . date("d-m-y"),
				"nik_p1" => $nik_p1,
				"nama_p1" => $nama_p1,
				"jk_p1" => $jk_p1,
				"umur_p1" => $umur_p1,
				"status_p1" => $status_p1,
				"pendidikan_p1" => $pendidikan_p1,

				"nik_p2" => $nik_p2,
				"nama_p2" => $nama_p2,
				"jk_p2" => $jk_p2,
				"umur_p2" => $umur_p2,
				"status_p2" => $status_p2,
				"pendidikan_p2" => $pendidikan_p2,

				"nik_p3" => $nik_p3,
				"nama_p3" => $nama_p3,
				"jk_p3" => $jk_p3,
				"umur_p3" => $umur_p3,
				"status_p3" => $status_p3,
				"pendidikan_p3" => $pendidikan_p3,

				"nik_p4" => $nik_p4,
				"nama_p4" => $nama_p4,
				"jk_p4" => $jk_p4,
				"umur_p4" => $umur_p4,
				"status_p4" => $status_p4,
				"pendidikan_p4" => $pendidikan_p4,

				"nik_p5" => $nik_p5,
				"nama_p5" => $nama_p5,
				"jk_p5" => $jk_p5,
				"umur_p5" => $umur_p5,
				"status_p5" => $status_p5,
				"pendidikan_p5" => $pendidikan_p5,

				"nik_p6" => $nik_p6,
				"nama_p6" => $nama_p6,
				"jk_p6" => $jk_p6,
				"umur_p6" => $umur_p6,
				"status_p6" => $status_p6,
				"pendidikan_p6" => $pendidikan_p6,
			];

		$this->db->where('kode_pengikut', $this->input->post('kode_pengikut'));
		$this->db->update('surat_pindah_pengikut', $data2);

		$this->db->where('kode_pengikut', $this->input->post('kode_pengikut'));
		$this->db->update('sr_permohonan_pindah', $data);
	}

	public function delete_srpermohonanPindah($id)
	{
		$this->db->delete('sr_permohonan_pindah', ['kode_pengikut' => $id]);
		$this->db->delete('surat_pindah_pengikut', ['kode_pengikut' => $id]);
	}








	// ================SURAT KETERANGAN KELAHIRAN=================

	public function getSkKelahiran()
	{
		return $this->db->get("sk_kelahiran")->result_array();
	}

	public function getSkKelahiranById($id)
	{
		return $this->db->get_where('sk_kelahiran', ['id' => $id])->row_array();
	}

	public function post_skKelahiran()
	{
		$data =
			[
				"nama_ibu" => $this->input->post('nama_ibu', true),
				"nik_ibu" => $this->input->post('nik_ibu', true),
				"tmpt_ibu" => $this->input->post('tmpt_ibu', true),
				"tgl_ibu" => $this->input->post('tgl_ibu', true),
				"pekerjaan_ibu" => $this->input->post('pekerjaan_ibu', true),
				"alamat_ibu" => $this->input->post('alamat_ibu', true),


				"nama_ayah" => $this->input->post('nama_ayah', true),
				"nik_ayah" => $this->input->post('nik_ayah', true),
				"tmpt_ayah" => $this->input->post('tmpt_ayah', true),
				"tgl_ayah" => $this->input->post('tgl_ayah', true),
				"pekerjaan_ayah" => $this->input->post('pekerjaan_ayah', true),
				"alamat_ayah" => $this->input->post('alamat_ayah', true),

				"nama_anak" => $this->input->post('nama_anak', true),
				"nik_anak" => $this->input->post('nik_anak', true),
				"jk_anak" => $this->input->post('jk_anak', true),
				"tmpt_anak" => $this->input->post('tmpt_anak', true),
				"tgl_anak" => $this->input->post('tgl_anak', true),
				"hari" => $this->input->post('hari', true),
				"jam" => $this->input->post('jam', true),
				"berat" => $this->input->post('berat', true),
				"panjang" => $this->input->post('panjang', true),
				"anak_ke" => $this->input->post('anak_ke', true),
				"alamat_anak" => $this->input->post('alamat_anak', true)
			];

		$this->db->insert('sk_kelahiran', $data);
		$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$message =
			[
				'user'=> $user['name'],
				'surat'=> 'SK Kelahiran'.'<br>'.'- Nama Ayah: '.  $this->input->post('nama_ayah', true) .' - Nama Ibu: '. $this->input->post('nama_ibu', true) .'- Nama Anak: '.  $this->input->post('nama_anak', true),
				'date' => date('d-m-Y'),
				'url' => 'laporan/skkelahiran',
				'eye'=>'0'
			];
		$this->db->insert('table_message', $message);
	}

	public function edite_skKelahiran($id)
	{
		$data =
			[
				"nama_ibu" => $this->input->post('nama_ibu', true),
				"nik_ibu" => $this->input->post('nik_ibu', true),
				"tmpt_ibu" => $this->input->post('tmpt_ibu', true),
				"tgl_ibu" => $this->input->post('tgl_ibu', true),
				"pekerjaan_ibu" => $this->input->post('pekerjaan_ibu', true),
				"alamat_ibu" => $this->input->post('alamat_ibu', true),


				"nama_ayah" => $this->input->post('nama_ayah', true),
				"nik_ayah" => $this->input->post('nik_ayah', true),
				"tmpt_ayah" => $this->input->post('tmpt_ayah', true),
				"tgl_ayah" => $this->input->post('tgl_ayah', true),
				"pekerjaan_ayah" => $this->input->post('pekerjaan_ayah', true),
				"alamat_ayah" => $this->input->post('alamat_ayah', true),

				"nama_anak" => $this->input->post('nama_anak', true),
				"nik_anak" => $this->input->post('nik_anak', true),
				"jk_anak" => $this->input->post('jk_anak', true),
				"tmpt_anak" => $this->input->post('tmpt_anak', true),
				"tgl_anak" => $this->input->post('tgl_anak', true),
				"hari" => $this->input->post('hari', true),
				"jam" => $this->input->post('jam', true),
				"berat" => $this->input->post('berat', true),
				"panjang" => $this->input->post('panjang', true),
				"anak_ke" => $this->input->post('anak_ke', true),
				"alamat_anak" => $this->input->post('alamat_anak', true),
			];

		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('sk_kelahiran', $data);
	}

	public function delete_skKelahiran($id)
	{
		$this->db->delete('sk_kelahiran', ['id' => $id]);
	}





	// ================SURAT PERINTAH PERJALANAN TUGAS=================

	public function getSppd()
	{
		return $this->db->get("surat_ppd")->result_array();
	}

	public function getSppdById($id)
	{
		return $this->db->get_where('surat_ppd', ['id' => $id])->row_array();
	}

	public function post_sppd()
	{
		$data =
			[
				"nama_pegawai" => $this->input->post('nama_pegawai', true),
				"pangkat_golongan" => $this->input->post('pangkat_golongan', true),
				"jabatan" => $this->input->post('jabatan', true),
				"tingkat_penurut_peraturan_perjalanan" => $this->input->post('tingkat_penurut_peraturan_perjalanan', true),
				"maksud_perjalanan_dinas" => $this->input->post('maksud_perjalanan_dinas', true),
				"alat_angkut" => $this->input->post('alat_angkut', true),
				"berangkat" => $this->input->post('berangkat', true),
				"tujuan" => $this->input->post('tujuan', true),
				"lama_perjalanan" => $this->input->post('lama_perjalanan', true),
				"tanggal_perjalanan" => $this->input->post('tanggal_perjalanan', true),
				"tanggal_kembali" => $this->input->post('tanggal_kembali', true),
				"pengikut" => $this->input->post('pengikut', true),
				"pembebanan_anggaran" => $this->input->post('pembebanan_anggaran', true),
				"instansi" => $this->input->post('instansi', true),
				"mata_anggaran" => $this->input->post('mata_anggaran', true),
				"keterangan_lain" => $this->input->post('keterangan_lain', true),
				"no_sppd" => $this->input->post('no_sppd', true),
				"tempat_kedudukan" => $this->input->post('tempat_kedudukan', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];

		$this->db->insert('surat_ppd', $data);
		$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$message =
			[
				'user'=> $user['name'],
				'surat'=> 'SPPD'.'<br>'.  $this->input->post('nama_pegawai', true) .' - '. $this->input->post('pangkat_golongan', true) .'- Alasan Perjalanan: '.  $this->input->post('maksud_perjalanan_dinas', true),
				'date' => date('d-m-Y'),
				'url' => 'laporan/sppd',
				'eye'=>'0'
			];
		$this->db->insert('table_message', $message);
	}

	public function edite_sppd($id)
	{
		$data =
			[
				"nama_pegawai" => $this->input->post('nama_pegawai', true),
				"pangkat_golongan" => $this->input->post('pangkat_golongan', true),
				"jabatan" => $this->input->post('jabatan', true),
				"tingkat_penurut_peraturan_perjalanan" => $this->input->post('tingkat_penurut_peraturan_perjalanan', true),
				"maksud_perjalanan_dinas" => $this->input->post('maksud_perjalanan_dinas', true),
				"alat_angkut" => $this->input->post('alat_angkut', true),
				"berangkat" => $this->input->post('berangkat', true),
				"tujuan" => $this->input->post('tujuan', true),
				"lama_perjalanan" => $this->input->post('lama_perjalanan', true),
				"tanggal_perjalanan" => $this->input->post('tanggal_perjalanan', true),
				"tanggal_kembali" => $this->input->post('tanggal_kembali', true),
				"pengikut" => $this->input->post('pengikut', true),
				"pembebanan_anggaran" => $this->input->post('pembebanan_anggaran', true),
				"instansi" => $this->input->post('instansi', true),
				"mata_anggaran" => $this->input->post('mata_anggaran', true),
				"keterangan_lain" => $this->input->post('keterangan_lain', true),
				"no_sppd" => $this->input->post('no_sppd', true),
				"tempat_kedudukan" => $this->input->post('tempat_kedudukan', true),
				"rt" => $this->input->post('rt', true),
				"rw" => $this->input->post('rw', true)
			];

		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('surat_ppd', $data);
	}

	public function delete_sppd($id)
	{
		$this->db->delete('surat_ppd', ['id' => $id]);
	}





	// ================SURAT PENGANTAR================

	public function getsPengantar()
	{
		return $this->db->get("surat_pengantar")->result_array();
	}

	public function getsPengantarById($id)
	{
		return $this->db->get_where('surat_pengantar', ['id' => $id])->row_array();
	}

	public function post_sPengantar()
	{
		$data =
			[
				"jenis_surat" => $this->input->post('jenis_surat', true),
				"banyaknya" => $this->input->post('banyaknya', true),
				"keterangan" => $this->input->post('keterangan', true)
			];

		$this->db->insert('surat_pengantar', $data);
	}

	public function edite_sPengantar($id)
	{
		$data =
			[
				"jenis_surat" => $this->input->post('jenis_surat', true),
				"banyaknya" => $this->input->post('banyaknya', true),
				"keterangan" => $this->input->post('keterangan', true)
			];

		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('surat_pengantar', $data);
	}

	public function delete_sPengantar($id)
	{
		$this->db->delete('surat_pengantar', ['id' => $id]);
	}
}

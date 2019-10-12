<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persuratan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("surat_model", 'surat');
		is_logged_in();
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Buat Surat";
		$data['surat'] = $this->surat->getSurat();
		$surat = $this->surat->getSurat();
		foreach ($surat as $s) {
			if ($this->input->post('nama_surat') == $s['nama_surat']) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Surat Sudah pernah di buat.');
				redirect('Persuratan');
			}
		}
		$this->form_validation->set_rules('nama_surat', 'Nama Surat', 'required');
		$this->form_validation->set_rules('url', 'Url', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('persuratan/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$data = [
				'nama_surat' => $this->input->post('nama_surat'),
				'url' => $this->input->post('url')
			];
			$this->db->insert('surat', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Surat added</div>');
			redirect('persuratan');
		}
	}

	public function edite_surat($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Edite Surat";
		$data['suratId'] = $this->surat->getSuratById($id);

		$this->form_validation->set_rules('nama_surat', 'Nama Surat', 'required');
		$this->form_validation->set_rules('url', 'Url', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('persuratan/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$data = [
				'nama_surat' => $this->input->post('nama_surat'),
				'url' => $this->input->post('url')
			];
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('surat', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Surat Updated</div>');
			redirect('persuratan');
		}
	}

	// ================SURAT KETERANGAN HILANG=================
	public function skHilang()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "SK.HILANG";

		$sk = $this->surat->getSkHilang();
		foreach ($sk as $s) {
			if ($this->input->post('nik') == $s['nik']) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Sudah pernah di buat di Sk.Hilang</div>');
				redirect('Persuratan/skHilang');
			}
		}

		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('agama', 'Agama', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
		$this->form_validation->set_rules('hilang', 'Hilang apa', 'required|trim');
		$this->form_validation->set_rules('tgl_hilang', 'Tanggal hilang', 'required|trim');
		$this->form_validation->set_rules('antara', 'Antara', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('rt', 'Rt', 'required|trim');
		$this->form_validation->set_rules('rw', 'Rw', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-hilang/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->post_skHilang();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data berhasil di buat</div>');
			redirect('Persuratan/skHilang');
		}
	}

	public function edite_skHilang($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edite SK.HILANG";
		$data['skh'] = $this->surat->getSkHilangById($id);
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('agama', 'Agama', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
		$this->form_validation->set_rules('hilang', 'Hilang apa', 'required|trim');
		$this->form_validation->set_rules('tgl_hilang', 'Tanggal hilang', 'required|trim');
		$this->form_validation->set_rules('antara', 'Antara', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('rt', 'Rt', 'required|trim');
		$this->form_validation->set_rules('rw', 'Rw', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-hilang/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->edit_skHilang($id);
			$this->session->set_flashdata('message', 'di ubah');
			redirect('Laporan');
		}
	}

	public function delete_SkHilang($id)
	{
		$this->surat->delete_skHilang($id);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('Laporan');
	}


	// ================SURAT KETERANGAN IZIN NIKAH=================
	public function izinnikah()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "SK.IZIN NIKAH";

		$skin = $this->surat->getSkIzinNikah();
		foreach ($skin as $s) {
			if ($this->input->post('nik_suami') == $s['nik_suami']) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Sudah pernah di buat di Sk.Izin Nikah</div>');
				redirect('Persuratan/izinnikah');
			}
		}

		$this->form_validation->set_rules('nik_suami', 'Nik Suami', 'required|trim');
		$this->form_validation->set_rules('nik_istri', 'Nik Istri', 'required|trim');
		$this->form_validation->set_rules('nik_ayah', 'Nik Ayah', 'required|trim');
		$this->form_validation->set_rules('nik_ibu', 'Nik Ibu', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-izin-nikah/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->post_skIzinNikah();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data berhasil di buat</div>');
			redirect('Persuratan/izinnikah');
		}
	}


	public function edite_skIzinNikah($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit SK.IZIN NIKAH";
		$data['skin'] = $this->surat->getSkIzinNikahById($id);
		$this->form_validation->set_rules('nik_suami', 'Nik Suami', 'required|trim');
		$this->form_validation->set_rules('nik_istri', 'Nik Istri', 'required|trim');
		$this->form_validation->set_rules('nik_ayah', 'Nik Ayah', 'required|trim');
		$this->form_validation->set_rules('nik_ibu', 'Nik Ibu', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-izin-nikah/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->edite_skIzinNikah();
			$this->session->set_flashdata('message', 'di ubah');
			redirect('Laporan');
		}
	}

	public function delete_skIzinNikah($id)
	{
		$this->surat->delete_skIzinNikah($id);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('Laporan');
	}


	// ================SURAT IZIN RAMAI=================
	public function izinRamai()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "SK.IZIN RAMAI";



		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-izin-ramai/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->post_skIzinRamai();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data berhasil di buat</div>');
			redirect('Persuratan/izinRamai');
		}
	}

	public function edite_skIzinRamai($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edite SK.IZIN RAMAI";



		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$data['skir'] = $this->surat->getSkIzinRamaiById($id);
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-izin-ramai/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->edite_skIzinRamai($id);
			$this->session->set_flashdata('message', 'di ubah');
			redirect('Laporan');
		}
	}

	public function delete_skIzinRamai($id)
	{
		$this->surat->delete_skIzinRamai($id);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('Laporan');
	}

	// ================SURAT KETERANGAN USAHA=================
	public function skUsaha()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "SK.USAHA";

		$sk = $this->surat->getSkUsaha();
		foreach ($sk as $s) {
			if ($this->input->post('nik') == $s['nik']) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Sudah pernah di buat di Sk.Usaha</div>');
				redirect('Persuratan/skUsaha');
			}
		}
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('agama', 'Agama', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('bidang', 'Bidang Usaha', 'required|trim');
		$this->form_validation->set_rules('alamat_usaha', 'Alamat Usaha', 'required|trim');
		$this->form_validation->set_rules('rt', 'RT', 'required|trim');
		$this->form_validation->set_rules('rw', 'RW', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-usaha/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->post_skUsaha();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data berhasil di buat</div>');
			redirect('Persuratan/skUsaha');
		}
	}


	public function edite_skUsaha($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edite SK.USAHA";
		$data['skuId'] = $this->surat->getSkUsahaById($id);
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('agama', 'Agama', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('bidang', 'Bidang Usaha', 'required|trim');
		$this->form_validation->set_rules('alamat_usaha', 'Alamat Usaha', 'required|trim');
		$this->form_validation->set_rules('rt', 'RT', 'required|trim');
		$this->form_validation->set_rules('rw', 'RW', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-usaha/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->edite_skUsaha($id);
			$this->session->set_flashdata('message', 'di ubah');
			redirect('Laporan');
		}
	}

	public function delete_skUsaha($id)
	{
		$this->surat->delete_skUsaha($id);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('Laporan');
	}




	// ================SURAT KETERANGAN TIDAK MAMPU=================
	public function tidakMampu()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "SK.TIDAK MAMPU";

		$sk = $this->surat->getSkTidakMampu();
		foreach ($sk as $s) {
			if ($this->input->post('nik') == $s['nik']) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Sudah pernah di buat di Sk.Tidak Mampu</div>');
				redirect('Persuratan/tidakMampu');
			}
		}
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('agama', 'Agama', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		$this->form_validation->set_rules('warganegara', 'warganegara', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('rt', 'RT', 'required|trim');
		$this->form_validation->set_rules('rw', 'RW', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-tidak-mampu/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->post_skTidakMampu();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data berhasil di buat</div>');
			redirect('Persuratan/tidakMampu');
		}
	}


	public function edite_skTidakMampu($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edite SK.USAHA";
		$data['sktm'] = $this->surat->getSkTidakMampuById($id);
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('agama', 'Agama', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		$this->form_validation->set_rules('warganegara', 'warganegara', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('rt', 'RT', 'required|trim');
		$this->form_validation->set_rules('rw', 'RW', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-tidak-mampu/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->edite_skTidakMampu($id);
			$this->session->set_flashdata('message', 'di ubah');
			redirect('Laporan');
		}
	}

	public function delete_skTidakMampu($id)
	{
		$this->surat->delete_skTidakMampu($id);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('Laporan');
	}




	// ================SURAT KETERANGAN KEMATIAN=================
	public function skKematian()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "SK.KEMATIAN";

		$sk = $this->surat->getSkKematian();
		foreach ($sk as $s) {
			if ($this->input->post('nik') == $s['nik']) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Sudah pernah di buat di Sk.Kematian</div>');
				redirect('Persuratan/skKematian');
			}
		}
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('pada_hari', 'Pada Hari', 'required|trim');
		$this->form_validation->set_rules('pukul', 'Pukul', 'required|trim');
		$this->form_validation->set_rules('meninggal_di', 'Meninggal di', 'required|trim');
		$this->form_validation->set_rules('sebab', 'Sebab', 'required|trim');
		$this->form_validation->set_rules('rt', 'RT', 'required|trim');
		$this->form_validation->set_rules('rw', 'RW', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-kematian/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->post_skKematian();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data berhasil di buat</div>');
			redirect('Persuratan/skKematian');
		}
	}


	public function edite_skKematian($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edite SK.KEMATIAN";
		$data['skk'] = $this->surat->getSkKematianById($id);
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('pada_hari', 'Pada Hari', 'required|trim');
		$this->form_validation->set_rules('pukul', 'Pukul', 'required|trim');
		$this->form_validation->set_rules('meninggal_di', 'Meninggal di', 'required|trim');
		$this->form_validation->set_rules('sebab', 'Sebab', 'required|trim');
		$this->form_validation->set_rules('rt', 'RT', 'required|trim');
		$this->form_validation->set_rules('rw', 'RW', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-kematian/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->edite_skKematian($id);
			$this->session->set_flashdata('message', 'di ubah');
			redirect('Laporan');
		}
	}

	public function delete_skKematian($id)
	{
		$this->surat->delete_skKematian($id);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('Laporan');
	}




	// ================SURAT SANTUNAN KEMATIAN=================
	public function ssKematian()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "SURAT SANTUNAN KEMATIAN";

		$sk = $this->surat->getSsKematian();
		foreach ($sk as $s) {
			if ($this->input->post('nik') == $s['nik']) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Sudah pernah di buat di Surat Santunan Kamatian</div>');
				redirect('Persuratan/ssKematian');
			}
		}
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/surat-santunan-kematian/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->post_ssKematian();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data berhasil di buat</div>');
			redirect('Persuratan/ssKematian');
		}
	}


	public function edite_ssKematian($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edite SURAT SANTUNAN KEMATIAN";
		$data['ssk'] = $this->surat->getSsKematianById($id);
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/surat-santunan-kematian/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->edite_ssKematian($id);
			$this->session->set_flashdata('message', 'di ubah');
			redirect('Laporan');
		}
	}

	public function delete_ssKematian($id)
	{
		$this->surat->delete_ssKematian($id);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('Laporan');
	}







	// ================SURAT REKOMENDASI PERMOHONAN PINDAH=================
	public function srpermohonanPindah()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "SURAT REKOMENDASI PERMOHONAN PINDAH";

		$sk = $this->surat->getsrpermohonanPindah();
		foreach ($sk as $s) {
			if ($this->input->post('nik') == $s['nik']) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Sudah pernah di buat di Surat Permohonan Pindah</div>');
				redirect('Persuratan/srpermohonanPindah');
			}
		}
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/surat-rekomendasi-permohonan-pindah/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->post_srpermohonanPindah();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data berhasil di buat</div>');
			redirect('Persuratan/srpermohonanPindah');
		}
	}


	public function edite_srpermohonanPindah($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edite SURAT REKOMENDASI PERMOHONAN PINDAH";
		$data['srpp'] = $this->surat->getsrpermohonanPindahById($id);
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/surat-rekomendasi-permohonan-pindah/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->edite_srpermohonanPindah($id);
			$this->session->set_flashdata('message', 'di ubah');
			redirect('Laporan');
		}
	}

	public function delete_srpermohonanPindah($id)
	{
		$this->surat->delete_srpermohonanPindah($id);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('Laporan');
	}








	// ================SURAT KETERANGAN KELAHIRAN=================
	public function skKelahiran()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "SURAT KETERANGAN KELAHIRAN";

		$sk = $this->surat->getSkKelahiran();
		foreach ($sk as $s) {
			if ($this->input->post('nik_anak') == $s['nik_anak']) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Sudah pernah di buat di Surat Keterangan Kelahiran</div>');
				redirect('Persuratan/skKelahiran');
			}
		}
		$this->form_validation->set_rules('nik_ibu', 'Nik Ibu', 'required|trim');
		$this->form_validation->set_rules('nik_ayah', 'Nik Ayah', 'required|trim');
		$this->form_validation->set_rules('nik_anak', 'Nik Anak', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-kelahiran/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->post_skKelahiran();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data berhasil di buat</div>');
			redirect('Persuratan/skKelahiran');
		}
	}


	public function edite_skKelahiran($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edite SURAT KETERANGAN KELAHIRAN";
		$data['skk'] = $this->surat->getSkKelahiranById($id);
		$this->form_validation->set_rules('nik_ibu', 'Nik Ibu', 'required|trim');
		$this->form_validation->set_rules('nik_ayah', 'Nik Ayah', 'required|trim');
		$this->form_validation->set_rules('nik_anak', 'Nik Anak', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/sk-kelahiran/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->edite_skKelahiran($id);
			$this->session->set_flashdata('message', 'di ubah');
			redirect('Laporan');
		}
	}

	public function delete_skKelahiran($id)
	{
		$this->surat->delete_skKelahiran($id);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('Laporan');
	}





	// ================SURAT PERINTAH PERJALANAN DINAS=================
	public function sppd()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "SURAT PERINTAH PERJALANAN DINAS";

		$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/surat-ppd/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->post_sppd();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data berhasil di buat</div>');
			redirect('Persuratan/sppd');
		}
	}


	public function edite_sppd($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edite SURAT PERINTAH PERJALANAN DINAS";
		$data['sppd'] = $this->surat->getSppdById($id);
		$this->form_validation->set_rules('nama', 'Nama Pegawai', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/surat-ppd/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->edite_sppd($id);
			$this->session->set_flashdata('message', 'di ubah');
			redirect('Laporan');
		}
	}

	public function delete_sppd($id)
	{
		$this->surat->delete_sppd($id);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('Laporan');
	}




	// ================SURAT PENGANTAR=================
	public function suratpengantar()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "SURAT PENGANTAR";
		$this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'required|trim');
		$this->form_validation->set_rules('banyaknya', 'Banyak', 'required|trim');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/surat-pengantar/index', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->post_sPengantar();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data berhasil di buat</div>');
			redirect('Persuratan/suratpengantar');
		}
	}


	public function edite_sPengantar($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edite SURAT PENGANTAR";
		$data['sp'] = $this->surat->getsPengantarById($id);
		$this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'required|trim');
		$this->form_validation->set_rules('banyaknya', 'Banyak', 'required|trim');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('/templates/sidebar', $data);
			$this->load->view('/templates/topbar', $data);
			$this->load->view('persuratan/surat-pengantar/edite', $data);
			$this->load->view('templates/footer_user');
		} else {
			$this->surat->edite_sPengantar($id);
			$this->session->set_flashdata('message', 'di ubah');
			redirect('Laporan');
		}
	}

	public function delete_sPengantar($id)
	{
		$this->surat->delete_sPengantar($id);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('Laporan');
	}





	// ================SURAT MASUK=================
	public function suratMasuk()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Surat Masuk";
		$data['surat'] = $this->surat->getSuratMasuk();
		$this->load->view('templates/header_user', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('surat/surat-masuk/index', $data);
		$this->load->view('templates/footer_user');
	}

	public function tambahSuratMasuk()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Surat Masuk";
		$data['surat'] = $this->surat->getSuratMasuk();
		$this->form_validation->set_rules('no_surat', 'No Surat', 'required|trim');
		$this->form_validation->set_rules('dari', 'Dari', 'required|trim');
		$this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required|trim');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');
		$this->form_validation->set_rules('scan', 'Scan', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('surat/surat-masuk/tambah-surat-masuk', $data);
			$this->load->view('templates/footer_user');
		} else {
			$data =
				[
					'no_surat' => $this->input->post('no_surat', true),
					'dari' => $this->input->post('dari', true),
					'tgl_masuk' => $this->input->post('tgl_masuk', true),
					'perihal' => $this->input->post('perihal', true),
					'scan' => $this->input->post('scan', true)
				];

			$this->db->insert('surat_masuk', $data);

			$this->session->set_flashdata('message', 'di tambahkan');
			redirect('persuratan/suratMasuk');
		}
	}

	public function edite_suratMasuk($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Edite Surat Masuk";
		$data['surat'] = $this->surat->getSuratMasukById($id);
		$this->form_validation->set_rules('no_surat', 'No Surat', 'required|trim');
		$this->form_validation->set_rules('dari', 'Dari', 'required|trim');
		$this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required|trim');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');
		$this->form_validation->set_rules('scan', 'Scan', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('surat/surat-masuk/edite-surat-masuk', $data);
			$this->load->view('templates/footer_user');
		} else {
			$data =
				[
					'no_surat' => $this->input->post('no_surat', true),
					'dari' => $this->input->post('dari', true),
					'tgl_masuk' => $this->input->post('tgl_masuk', true),
					'perihal' => $this->input->post('perihal', true),
					'scan' => $this->input->post('scan', true)
				];

			$this->db->where('id', $this->input->post('id', true));
			$this->db->update('surat_masuk', $data);

			$this->session->set_flashdata('message', 'di ubah');
			redirect('persuratan/suratMasuk');
		}
	}

	public function delete_suratMasuk($id)
	{
		$this->db->delete('surat_masuk', ['id' => $id]);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('persuratan/suratMasuk');
	}



	// ================SURAT KELUAR=================
	public function suratKeluar()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Surat Keluar";
		$data['surat'] = $this->surat->getSuratKeluar();
		$this->load->view('templates/header_user', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('surat/surat-keluar/index', $data);
		$this->load->view('templates/footer_user');
	}

	public function tambahSuratKeluar()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Surat Keluar";
		$data['surat'] = $this->surat->getSuratMasuk();
		$this->form_validation->set_rules('no_surat', 'No Surat', 'required|trim');
		$this->form_validation->set_rules('dari', 'Dari', 'required|trim');
		$this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required|trim');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');
		$this->form_validation->set_rules('scan', 'Scan', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('surat/surat-keluar/tambah-surat-keluar', $data);
			$this->load->view('templates/footer_user');
		} else {
			$data =
				[
					'no_surat' => $this->input->post('no_surat', true),
					'dari' => $this->input->post('dari', true),
					'tgl_masuk' => $this->input->post('tgl_masuk', true),
					'perihal' => $this->input->post('perihal', true),
					'scan' => $this->input->post('scan', true)
				];

			$this->db->insert('surat_keluar', $data);

			$this->session->set_flashdata('message', 'di tambahkan');
			redirect('persuratan/suratKeluar');
		}
	}

	public function edite_suratKeluar($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Edite Surat Keluar";
		$data['surat'] = $this->surat->getSuratKeluarById($id);
		$this->form_validation->set_rules('no_surat', 'No Surat', 'required|trim');
		$this->form_validation->set_rules('dari', 'Dari', 'required|trim');
		$this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required|trim');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required|trim');
		$this->form_validation->set_rules('scan', 'Scan', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header_user', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('surat/surat-keluar/edite-surat-keluar', $data);
			$this->load->view('templates/footer_user');
		} else {
			$data =
				[
					'no_surat' => $this->input->post('no_surat', true),
					'dari' => $this->input->post('dari', true),
					'tgl_masuk' => $this->input->post('tgl_masuk', true),
					'perihal' => $this->input->post('perihal', true),
					'scan' => $this->input->post('scan', true)
				];

			$this->db->where('id', $this->input->post('id', true));
			$this->db->update('surat_keluar', $data);

			$this->session->set_flashdata('message', 'di ubah');
			redirect('persuratan/suratKeluar');
		}
	}


	public function delete_suratKeluar($id)
	{
		$this->db->delete('surat_keluar', ['id' => $id]);
		$this->session->set_flashdata('message', 'di hapus');
		redirect('persuratan/suratKeluar');
	}
}

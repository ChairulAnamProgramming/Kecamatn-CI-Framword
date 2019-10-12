<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Word extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("surat_model", 'surat');
		$this->load->model("karyawan_model", 'karyawan');
	}
	public function skHilang($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['skh'] = $this->surat->getSkHilangById($id);
		$data['kades'] = $this->karyawan->getKades();
		$this->load->view('persuratan/sk-hilang/word', $data);
	}

	public function skIzinNikah($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['skin'] = $this->surat->getSkIzinNikahById($id);
		$data['kades'] = $this->karyawan->getKades();
		$this->load->view('persuratan/sk-izin-nikah/word', $data);
	}

	public function skIzinRamai($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['sir'] = $this->surat->getSkIzinRamaiById($id);
		$data['kades'] = $this->karyawan->getKades();
		$this->load->view('persuratan/sk-izin-ramai/word', $data);
	}

	public function skUsaha($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['sku'] = $this->surat->getSkUsahaById($id);
		$data['kades'] = $this->karyawan->getKades();
		$this->load->view('persuratan/sk-usaha/word', $data);
	}

	public function skTidakMampu($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['sktm'] = $this->surat->getSkTidakMampuById($id);
		$data['kades'] = $this->karyawan->getKades();
		$this->load->view('persuratan/sk-tidak-mampu/word', $data);
	}

	public function skKematian($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['skk'] = $this->surat->getSkKematianById($id);
		$data['kades'] = $this->karyawan->getKades();
		$this->load->view('persuratan/sk-kematian/word', $data);
	}

	public function ssKematian($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['ssk'] = $this->surat->getSsKematianById($id);
		$data['camat'] = $this->karyawan->getCamat();
		$data['kades'] = $this->karyawan->getKades();
		$this->load->view('persuratan/surat-santunan-kematian/word', $data);
	}

	public function srPermohonanPindah($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['srpp'] = $this->surat->getsrpermohonanPindahById($id);
		$data['camat'] = $this->karyawan->getCamat();
		$data['kades'] = $this->karyawan->getKades();
		$this->load->view('persuratan/surat-rekomendasi-permohonan-pindah/word', $data);
	}

	public function skKelahiran($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['skk'] = $this->surat->getSkKelahiranById($id);
		$data['camat'] = $this->karyawan->getCamat();
		$data['kades'] = $this->karyawan->getKades();
		$this->load->view('persuratan/sk-kelahiran/word', $data);
	}

	public function sppd($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['sppd'] = $this->surat->getSppdById($id);
		$data['camat'] = $this->karyawan->getCamat();
		$data['kades'] = $this->karyawan->getKades();
		$this->load->view('persuratan/surat-ppd/word', $data);
	}


	public function sPengantar($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['sp'] = $this->surat->getsPengantarById($id);
		$data['camat'] = $this->karyawan->getCamat();
		$data['kades'] = $this->karyawan->getKades();
		$this->load->view('persuratan/surat-pengantar/word', $data);
	}
}

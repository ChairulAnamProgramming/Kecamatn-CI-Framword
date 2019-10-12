<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model("surat_model", 'surat');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Semua Surat";
        $data['surat'] = $this->surat->getSurat();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function izinNikah()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Surat Izin Nikah";
        $data['skIzinNikah'] = $this->surat->getSkIzinNikah();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/surat-izin-nikah/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function skusaha()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Surat Keterangan Usaha";
        $data['sku'] = $this->surat->getSkUsaha();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/sk-usaha/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function tidakmampu()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Surat Keterangan Tidak Mampu";
        $data['sktm'] = $this->surat->getSkTidakMampu();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/sk-tidak-mampu/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function izinramai()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Surat Keterangan Izin Ramai";
        $data['sir'] = $this->surat->getSkIzinRamai();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/surat-izin-ramai/index', $data);
        $this->load->view('templates/footer_user');
    }


    public function skhilang()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Surat Keterangan Hilang";
        $data['skh'] = $this->surat->getSkHilang();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/sk-hilang/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function skkelahiran()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Surat Keterangan Kelahiran";
        $data['skl'] = $this->surat->getSkKelahiran();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/sk-lahir/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function sppd()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Surat Perintah Perjalanan Dinas";
        $data['sppd'] = $this->surat->getSppd();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/surat-ppd/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function skkematian()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Surat Keterangan Kematian";
        $data['skk'] = $this->surat->getSkKematian();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/sk-kematian/index', $data);
        $this->load->view('templates/footer_user');
    }


    public function ssKematian()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Surat Santuan Kematian";
        $data['ssk'] = $this->surat->getSsKematian();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/ss-kematian/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function srpermohonanPindah()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Surat Rekomendasi Permohonan Pindah";
        $data['srppindah'] = $this->surat->getsrpermohonanPindah();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/sr-permohonan-pindah/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function suratpengantar()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laporan Surat Pengantar";
        $data['sPengantar'] = $this->surat->getsPengantar();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/surat-pengantar/index', $data);
        $this->load->view('templates/footer_user');
    }
}

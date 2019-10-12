<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
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
		$this->load->view('templates/header_user', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('surat/index', $data);
		$this->load->view('templates/footer_user');
	}

	public function in()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Surat Masuk";
		$data['surat'] = $this->surat->geSurat();
		$surat = $this->surat->getSurat();
		$this->load->view('templates/header_user', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('surat/index', $data);
		$this->load->view('templates/footer_user');
	}
}

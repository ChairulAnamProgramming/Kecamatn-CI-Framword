<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Print_pdf extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model("surat_model", 'surat');	

	}

	public function skin(){
    	   $data['surat'] = $this->surat->getSkIzinNikah();
    	   $data['title'] = "Lapora Surat Keterangan Izin Nikah";
	       $this->load->view('laporan/surat-izin-nikah/dompdf',$data);
	}
	public function sku(){
    	   $data['surat'] = $this->surat->getSkUsaha();
    	   $data['title'] = "Lapora Surat Keterangan Usaha";
	       $this->load->view('laporan/sk-usaha/dompdf',$data);
	}

	public function sktm(){
    	   $data['surat'] = $this->surat->getSkTidakMampu();
    	   $data['title'] = "Lapora Surat Keterangan Tidak Mampu";
	       $this->load->view('laporan/sk-tidak-mampu/dompdf',$data);
	}

	public function skir(){
    	   $data['surat'] = $this->surat->getSkIzinRamai();
    	   $data['title'] = "Lapora Surat Keterangan Izin Ramai";
	       $this->load->view('laporan/surat-izin-ramai/dompdf',$data);
	}

	public function skh(){
    	   $data['surat'] = $this->surat->getskHilang();
    	   $data['title'] = "Lapora Surat Keterangan Hilang";
	       $this->load->view('laporan/sk-hilang/dompdf',$data);
	}

	public function skk(){
    	   $data['surat'] = $this->surat->getSkKelahiran();
    	   $data['title'] = "Lapora Surat Keterangan Kelahiran";
	       $this->load->view('laporan/sk-lahir/dompdf',$data);
	}

	public function sppd(){
    	   $data['surat'] = $this->surat->getSppd();
    	   $data['title'] = "Lapora Surat Perintah Perjalanan Dinas";
	       $this->load->view('laporan/surat-ppd/dompdf',$data);
	}

	public function skkm(){
    	   $data['surat'] = $this->surat->getSkKematian();
    	   $data['title'] = "Lapora Surat Keterangan Kematian";
	       $this->load->view('laporan/sk-kematian/dompdf',$data);
	}

	public function sskm(){
    	   $data['surat'] = $this->surat->getSsKematian();
    	   $data['title'] = "Lapora Surat Santunan Kematian";
	       $this->load->view('laporan/ss-kematian/dompdf',$data);
	}

	public function srpp(){
    	   $data['surat'] = $this->surat->getsrpermohonanPindah();
    	   $data['title'] = "Lapora Surat Rekomendasi Permohonan Pindah";
	       $this->load->view('laporan/sr-permohonan-pindah/dompdf',$data);
	}

	public function sp(){
    	   $data['surat'] = $this->surat->getsPengantar();
    	   $data['title'] = "Lapora Surat Pengantar";
	       $this->load->view('laporan/surat-pengantar/dompdf',$data);
	}


}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model("bip_model", 'bip');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Data Bip";

		$data['bip'] = $this->bip->getBip();
		$this->load->view('templates/header_user', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('data/index', $data);
		$this->load->view('templates/footer_user');
	}
 
	public function deleteBip($id)
	{
		$this->db->delete('table_bip', ['nik' => $id]);
		$this->session->set_flashdata('message', 'di hapus');
		redirect("Data");
	}

	public function profile($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Profile Data" . date('Y');

		$data['bip'] = $this->bip->getBipById($id);
		$this->load->view('templates/header_user', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('data/profile', $data);
		$this->load->view('templates/footer_user');
	}



	public function searchSurat()
	{
		$value1 = $_GET['search'];

		$this->db->like('nama_surat', $value1);
		$val = $this->db->get('surat')->result_array();
		$i = 1;
		foreach ($val as $key) {

			echo "
						<tr>
							<td>" . $i . "</td>
							<td><a href='" . $key['url_laporan'] . "'>" . $key['nama_surat'] . "</a></td>
							<td><a href='" . base_url("persuratan/edite_surat/") . $key['id'] . "'><i class='far fa-edit'></i></a></td>
						</tr>";
			$i++;
		}
	}


	public function dataSurat()
	{
		$val = $this->db->get('surat')->result_array();
		$i = 1;
		foreach ($val as $key) {

			echo "
						<tr>
							<td>" . $i . "</td>
							<td><a href='" . $key['url_laporan'] . "'>" . $key['nama_surat'] . "</a></td>
							<td><a href='" . base_url("persuratan/edite_surat/") . $key['id'] . "'><i class='far fa-edit'></i></a></td>
		</tr>";
			$i++;
		}
	}


	public function importBip()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Import Buku Induk Penduduk";
		$this->load->view('templates/header_user', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('data/import', $data);
		$this->load->view('templates/footer_user');
	}

	public function import()
	{
		$this->load->library('excel');


		$file = $_FILES['file']['name'];
		$ekstensi =  explode(".", $file);
		$file_name = "file-" . round(microtime(true)) . "." . end($ekstensi);
		$sumber = $_FILES['file']['tmp_name'];
		$target_dir = 'assets/data/file/';
		$target_file = $target_dir . $file_name;
		move_uploaded_file($sumber, $target_file);

		$obj = PHPExcel_IOFactory::load($target_file);

		$all_data = $obj->getActiveSheet()->toArray(null, true, true, true);

		$sql = "INSERT INTO table_bip (nik,nama,jk,tmpt_lhr,tgl_lhr,gdr,agama,status,shdk,shdrt,pddk_akhir,pekerjaan,nama_ibu,nama_ayah,no_kk,nama_kep_kel,alamat,nama_prop,kab_kota,nama_kab,nama_kec,no_kel,nama_kel,rw,rt) VALUES";
		for ($i = 2; $i <= count($all_data); $i++) {
			$nik = $all_data[$i]['A'];
			$nama = $all_data[$i]['B'];
			$jk = $all_data[$i]['C'];
			$tmpt_lhr = $all_data[$i]['D'];
			$tgl_lhr = $all_data[$i]['E'];
			$gdr = $all_data[$i]['F'];
			$agama = $all_data[$i]['G'];
			$stats = $all_data[$i]['H'];
			$shdk = $all_data[$i]['I'];
			$shdrt = $all_data[$i]['J'];
			$pddk_akhir = $all_data[$i]['K'];
			$pekerjaan = $all_data[$i]['L'];
			$nama_ibu = $all_data[$i]['M'];
			$nama_ayah = $all_data[$i]['N'];
			$no_kk = $all_data[$i]['O'];
			$nama_kep_kel = $all_data[$i]['P'];
			$alamat = $all_data[$i]['Q'];
			$nama_prop = $all_data[$i]['R'];
			$kab_kota = $all_data[$i]['S'];
			$nama_kab = $all_data[$i]['T'];
			$nama_kec = $all_data[$i]['U'];
			$no_kel = $all_data[$i]['V'];
			$nama_kel = $all_data[$i]['W'];
			$rw = $all_data[$i]['X'];
			$rt = $all_data[$i]['Y'];
			$sql .= "('$nik','$nama','$jk','$tmpt_lhr','$tgl_lhr','$gdr','$agama','$stats','$shdk','$shdrt','$pddk_akhir','$pekerjaan','$nama_ibu','$nama_ayah','$no_kk','$nama_kep_kel','$alamat','$nama_prop','$kab_kota','$nama_kab','$nama_kec','$no_kel','$nama_kel','$rw','$rt'),";
		}
		$sql = substr($sql, 0, -1);
		$this->db->query($sql);
		unlink($target_file);
		$this->session->set_flashdata('message', 'di Import');
		redirect('data');
	}
}

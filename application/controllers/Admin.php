<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Karyawan_model','karyawan');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Dashboard";
		$l = $this->db->get_where('table_bip',['jk'=> 'L'])->num_rows();
		$data['laki'] = json_encode($l);
		$p = $this->db->get_where('table_bip',['jk'=> 'P'])->num_rows();
		$data['perempuan'] = json_encode($p);

		$islam = $this->db->get_where('table_bip',['agama'=> 'Islam'])->num_rows();
		$data['islam'] = json_encode($islam);
		$kristen = $this->db->get_where('table_bip',['agama'=> 'Kristen'])->num_rows();
		$data['kristen'] = json_encode($kristen);
		$katolik = $this->db->get_where('table_bip',['agama'=> 'Katolik'])->num_rows();
		$data['katolik'] = json_encode($katolik);
		$hindu = $this->db->get_where('table_bip',['agama'=> 'Hindu'])->num_rows();
		$data['hindu'] = json_encode($hindu);
		$buddha = $this->db->get_where('table_bip',['agama'=> 'Buddha'])->num_rows();
		$data['buddha'] = json_encode($buddha);
		$Kong_Hu_Cu = $this->db->get_where('table_bip',['agama'=> 'Kong Hu Cu'])->num_rows();
		$data['Kong_Hu_Cu'] = json_encode($Kong_Hu_Cu);

		$belum_bekerja = $this->db->get_where('table_bip',['pekerjaan'=> 'Belum/Tidak Bekerja'])->num_rows();
		$data['belum_bekerja'] = json_encode($belum_bekerja);

	    $this->db->where('pekerjaan','Pedagang');
		$pedagang = $this->db->get_where('table_bip')->num_rows();
		$data['pedagang'] = json_encode($pedagang);

		$this->db->where('pekerjaan','Perdagangan');
		$perdagangan = $this->db->get_where('table_bip')->num_rows();
		$data['perdagangan'] = json_encode($perdagangan);

		$this->db->where('pekerjaan','Pelajar/Mahasiswa');
		$pelajar = $this->db->get_where('table_bip')->num_rows();
		$data['pelajar'] = json_encode($pelajar);

		$this->db->where('pekerjaan','Buruh Harian Lepas');
		$buruh = $this->db->get_where('table_bip')->num_rows();
		$data['buruh'] = json_encode($buruh);

		$this->db->where('pekerjaan','Karyawan Swasta');
		$karyawan_swasta = $this->db->get_where('table_bip')->num_rows();
		$data['karyawan_swasta'] = json_encode($karyawan_swasta);

		$this->db->where('pekerjaan','Pegawai Negeri Sipil');
		$pns = $this->db->get_where('table_bip')->num_rows();
		$data['pns'] = json_encode($pns);

		$this->db->where('pekerjaan','Wiraswasta');
		$wiraswasta = $this->db->get_where('table_bip')->num_rows();
		$data['wiraswasta'] = json_encode($wiraswasta);

		$this->db->where('status','Belum Kawin');
		$belum_kawin = $this->db->get_where('table_bip')->num_rows();
		$data['belum_kawin'] = json_encode($belum_kawin);

		$this->db->where('status','Kawin');
		$kawin = $this->db->get_where('table_bip')->num_rows();
		$data['kawin'] = json_encode($kawin);

		$this->db->where('status','Cerai Mati');
		$carai_mati = $this->db->get_where('table_bip')->num_rows();
		$data['carai_mati'] = json_encode($carai_mati);

		$this->db->where('status','Cerai Hidup');
		$cerai_hidup = $this->db->get_where('table_bip')->num_rows();
		$data['cerai_hidup'] = json_encode($cerai_hidup);

		$this->load->view('templates/header_user',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('templates/footer_user');
	}

	public function role()
	{
		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Role";
		$this->load->view('templates/header_user',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/role',$data);
		$this->load->view('templates/footer_user');
	}

	public function roleAccess($role_id)
	{
		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get_where('user_role',['id'=> $role_id])->row_array();

		$this->db->where('id !=',1);
		$data['menu'] = $this->db->get('user_menu')->result_array();
		
		// var_dump($data['role']['role']);die;
		$data['title'] = "Role";
		$this->load->view('templates/header_user',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/role-access',$data);
		$this->load->view('templates/footer_user');
	}

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = 
		[
			'role_id'=> $role_id,
			'menu_id'=> $menu_id
		];

		$result = $this->db->get_where('user_access_menu',$data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu',$data);
		}else{
			$this->db->delete('user_access_menu',$data);

		}
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Access Changed!</div>');
	}

	public function employee()
	{

		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
		$data['title'] = "Karyawan";
		$data['employee']  = $this->karyawan->employee();
		$this->load->view('templates/header_user',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/karyawan',$data);
		$this->load->view('templates/footer_user');
	}

	public function edite_employee($id)
	{

		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
		$data['title'] = "Karyawan";
		$data['employee']  = $this->karyawan->employeeById($id);

		$this->form_validation->set_rules('name', 'Full Name', 'trim|required');
		
		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header_user',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('admin/edite_employee',$data);
			$this->load->view('templates/footer_user');
		}else{
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$nik = $this->input->post('nik');
			$nip = $this->input->post('nip');
			$tmpt_lhr = $this->input->post('tmpt_lhr');
			$tgl_lhr = $this->input->post('tgl_lhr');
			$telp = $this->input->post('telp');
			$alamat = $this->input->post('alamat');
			$jabatan = $this->input->post('jabatan');
			$role_id = $this->input->post('role_id');
			
			// cek jika ada gambar yang di upload
			$upload_image = $_FILES['image']['name'];
			
			if ($upload_image) {
				$config['upload_path'] = './assets/img/profile/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '3000';
				$this->load->library('upload', $config);

				if($this->upload->do_upload('image'))
				{
					$old_image =$data['user']['image'];
					if($old_image != 'default.jpg')
					{
						unlink(FCPATH . 'assets/img/profile/'. $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image',$new_image);
				}else{
					echo $this->upload->display_errors();
				}
			}
			$this->db->set('name',$name);
			$this->db->set('nik',$nik);
			$this->db->set('nip',$nip);
			$this->db->set('tmpt_lhr',$tmpt_lhr);
			$this->db->set('tgl_lhr',$tgl_lhr);
			$this->db->set('telp',$telp);
			$this->db->set('alamat',$alamat);
			$this->db->set('jabatan',$jabatan);
			$this->db->set('role_id',$role_id);
			$this->db->where('id',$id);
			$this->db->update('users');
			$this->session->set_flashdata('message','di update');
					redirect('admin/employee');
		}

	}

	public function delete_employee($id)
	{
	 $this->db->delete('users',['id'=>$id]);
        $this->session->set_flashdata('message','di hapus');
          redirect('admin/employee');
	}
	
}
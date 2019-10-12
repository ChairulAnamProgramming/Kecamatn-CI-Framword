<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{	
		if($this->session->userdata('email'))
		{
			redirect('user');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) 
		{
			$data['title'] = 'Halaman Login';
			// $this->load->view('templates/header_auth',$data);
			$this->load->view('templates/header_auth',$data);
			$this->load->view('auth/login');
			$this->load->view('templates/footer_auth');
			// $this->load->view('templates/footer_auth',$data);
		}else{
			$this->_login();
		}
		
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('users',['email'=> $email])->row_array();
		
		if ($user != null) {

			if ($user['is_active'] == 1) {
				if (password_verify($password, $user['password'])) {
						$data =
						[
							'email' =>$user['email'],
							'role_id' =>$user['role_id']
						];

						$this->session->set_userdata($data);
						if ($user['role_id'] == 1){
							redirect('admin');
						}else{
						redirect('user');							
						}
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					  Password salah!
					</div>');
					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			  Email belum di aktivasi.harap tunggu!
			</div>');
			redirect('auth');
			}
			
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			  Email belum pernah teregistrasi. <a class="small" href="'. base_url().'auth/registration">Registrasi!</a>
			</div>');
			redirect('auth');
		}

	}

	public function registration()
	{	
		if($this->session->userdata('email'))
		{
			redirect('user');
		}
		
		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]',
			[
				'is_unique' => 'email ini sudah terdaftar'
			]);
		$this->form_validation->set_rules('password1','Email','required|trim|min_length[8]|matches[password2]',
			[
				'matches' => 'password tidak sama!',
				'min_length' => 'password terlalu pendek'
			]);
		$this->form_validation->set_rules('password2','Email','required|trim|matches[password1]');
		
		if ($this->form_validation->run() ==false) 
		{
			$data['title'] = 'Registrasi User';
			$this->load->view('templates/header_auth',$data);
			$this->load->view('auth/registration',$data);
			$this->load->view('templates/footer_auth',$data);
		}else{
			$data = 
			[	
				'nik' => '-',
				'nip' => '-',
				'tmpt_lhr' => '-',
				'name' => htmlspecialchars($this->input->post('name',true)),
				'tgl_lhr' => '-',
				'telp' => '-',
				'alamat' => '-',
				'jabatan' => '-',
				'email' => htmlspecialchars($this->input->post('email',true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' =>2,
				'is_active'=> 1,
				'date_created' => time()
			];

			// Siapkan Token
			// $token = base64_encode(random_bytes(32));
			// $user_token = 
			// [
			// 	'email'=>$this->input->post('email',true),
			// 	'token'=>$token,
			// 	'date_created' =>time()
			// ];
			$this->db->insert('users',$data);
			// $this->db->insert('users_token',$user_token);

			// $this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Your account has been created. Please <a href="https://mail.google.com/mail/">activate</a> your Account 
			</div>');
			redirect('auth');
		}
	}

		private function _sendEmail($token, $type)
		{
			$config = [
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_user' => 'timcode709@gmail.com',
				'smtp_pass' => '085754529757',
				'smtp_port' => 465,
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'newline' => "\r\n",

			];

			$this->email->initialize($config);

			$this->email->from('timcode709@gmail.com', 'SIMPELDES TAMBAK BITIN');
			$this->email->to($this->input->post('email'));

			if($type == 'verify')
			{
				$this->email->subject("Account Verification");
				$this->email->message('Click this link to virify yout account : <a href="'. base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token='. urlencode($token) . '"> Activate </a>');
			}else if($type == 'forgot'){
				$this->email->subject("Reset Password");
				$this->email->message('Click this link to reset your password : <a href="'. base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token='. urlencode($token) . '"> Reset Password </a>');
			}

			if ($this->email->send()) {
				return true;
			}else{
				echo $this->email->print_debugger();
				die;
			}
		}

	public function verify()
	{
		$email  = $this->input->get('email');
		$token  = $this->input->get('token');

		$user = $this->db->get_where('users', ['email'=>$email])->row_array();

		if($user)
		{
			$user_token = $this->db->get_where('users_token',['token'=> $token])->row_array();
			if ($user_token) {
				if (time() - $user_token['date_created'] < (60*60*24)) {
					$this->db->set('is_active',1);
					$this->db->where('email',$email);
					$this->db->update('users');

					$this->db->delete('users_token',['email'=>$email]);

					$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">'.$email.'has been activated! Please login.</div>');
					redirect('auth');
				}else{
					$this->db->delete('users',['email'=>$email]);
					$this->db->delete('users_token',['email'=>$email]);

					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					Account activation failed! Token expired.</div>');
					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Account activation failed! Wrong token.</div>');
				redirect('auth');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			  Account activation failed! Wrong email.</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			  Kamu berhasil logout
			</div>');
			redirect('auth');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
		// echo "blocked access";
	}

	public function forgotPassword()
	{		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			if ($this->form_validation->run() == false) {
				$data['title'] = 'Forgot Password';
				$this->load->view('templates/header_auth',$data);
				$this->load->view('auth/forgot-password',$data);
				$this->load->view('templates/footer_auth',$data);
			}else{
				$email = $this->input->post('email');

				$user = $this->db->get_where('users',['email'=>$email,'is_active'=> 1])->row_array();

				if ($user) 
				{
					$token = base64_encode(random_bytes(32));
					$user_token = 
					[
						'email'=>$this->input->post('email',true),
						'token'=>$token,
						'date_created' =>time()
					];
					$this->db->insert('users_token',$user_token);
					$this->_sendEmail($token,'forgot');
					$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
					Please check your email to reset your password</div>');
					redirect('auth');
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					Email is not registered or activated!</div>');
					redirect('auth/forgotPassword');
				}
			}
	}

	public function resetpassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('users',['email'=>$email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('users_token',['token'=>$token])->row_array();
			// var_dump($user_token);die;
			if ($user_token) {
				
				$this->session->set_userdata('reset_email',$email);
				$this->changePassword();
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Reset password failed!Worng token</div>');
				redirect('auth/forgotPassword');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Reset password failed!Worng email</div>');
			redirect('auth/forgotPassword');
		}
	}

	public function changePassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('auth');
		}
		$this->form_validation->set_rules('password1', 'New Password', 'trim|required|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Conferm New Password', 'trim|required|min_length[8]|matches[password1]');
		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Change Password';
		$this->load->view('templates/header_auth',$data);
		$this->load->view('auth/change-password',$data);
		$this->load->view('templates/footer_auth',$data);
		}else{
			$password = password_hash($this->input->post('password1'),PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('password',$password );
			$this->db->where('email',$email);
			$this->db->update('users');

			$this->session->unset_userdata('reset_email');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Password has been changed! Please login.</div>');
			redirect('auth');
		}
	}
}
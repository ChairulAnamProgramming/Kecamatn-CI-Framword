<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get('user_role')->result_array();
		$data['title'] = "All Notification";
						$this->db->order_by('id','DESC');
		$data['notif'] = $this->db->get('table_message')->result_array();
		$this->load->view('templates/header_user',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/message',$data);
		$this->load->view('templates/footer_user');
	}

	public function eye()
	{
		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
		$id = $_GET['id'];

		$data=[
			'eye'=>'1'
		];
		$this->db->where('id',$id);
		$this->db->update('table_message',$data);
		
	}

}
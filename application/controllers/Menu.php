<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model','menu');
        is_logged_in();
    }
	public function index()
	{
        $data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        
        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if($this->form_validation->run() == false)
        {
            $data['title'] = "Menu Management";
            $this->load->view('templates/header_user',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/index',$data);
            $this->load->view('templates/footer_user');
        }else{
            $this->db->insert('user_menu',['menu'=> $this->input->post('menu')]);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			  New menu added
			</div>');
			redirect('menu');
        }

		// echo "Selamat datang ",$data['user']['name'];
		
    }

    public function edite_Menu($id)
    {
        $data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
        $data['menu']= $this->menu->getMenuById($id);    

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if($this->form_validation->run() == false)
        {
            $data['title'] = "Edite Menu Management";
            $this->load->view('templates/header_user',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/edite-menu',$data);
            $this->load->view('templates/footer_user');
        }else{
            $data = [
                'menu'=> $this->input->post('menu')
            ];
            $this->db->where('id',$this->input->post('id',true));
            $this->db->update('user_menu',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
              Menu updated
            </div>');
            redirect('menu');
        }
    }

    public function subMenu()
    { 
        $data['title'] = "Submenu Management";
        $data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['subMenu']= $this->menu->getSubMenu();
        // $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header_user',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/submenu',$data);
            $this->load->view('templates/footer_user');
        }else{
            $data = [
                'title'=> $this->input->post('title'),
                'menu_id'=> $this->input->post('menu_id'),
                'url'=> $this->input->post('url'),
                'icon'=> $this->input->post('icon'),               
                'is_active'=> $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            New Submenu added
          </div>');
          redirect('menu/subMenu');
            
        }
            
    }

    public function delete_sub($id)
    {
        $this->db->delete('user_sub_menu',['id'=>$id]);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
           Submenu berhasil di hapus
          </div>');
          redirect('menu/subMenu');
    }

    public function update_sub($id)
    {
        $data['title'] = "Update Submenu";
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
        $data['subMenu']= $this->menu->getSubMenuById($id);

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header_user',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('menu/update_sub',$data);
            $this->load->view('templates/footer_user');
        }else{
            $data = [
                'title'=> $this->input->post('title'),
                'menu_id'=> $this->input->post('menu_id'),
                'url'=> $this->input->post('url'),
                'icon'=> $this->input->post('icon'),               
                'is_active'=> $this->input->post('is_active')
            ];
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('user_sub_menu',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Submenu Updated
          </div>');
          redirect('menu/subMenu');
            
        }
    }
    
}
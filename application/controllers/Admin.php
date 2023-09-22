<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('M_admin', 'model');
		date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		$var['title'] = 'Home';
		$this->load->view('admin/dashboard', $var);
	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function action_login()
	{
		$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$this->form_validation->set_rules('username', 'username', 'required|trim', ['required' => 'username harus diisi']);
		$this->form_validation->set_rules('password', 'password', 'required|trim', ['required' => 'password harus diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login');
        } else {
			$cek_data = $this->db->get_where('authentication', ['username' => $username])->row_array();
			
			if($cek_data) {
				if(password_verify($password, $cek_data['password'])) {

					$session = [
						'id' => $cek_data['id'],
						'username'	=> $cek_data['username'],
						'name'	=> $cek_data['name']
					];
					$this->session->set_userdata($session);
					redirect('Admin');
	
				} else {
					$this->session->set_flashdata('password_salah', true);
					redirect('Admin/login');
				}
	
			} else {
				$this->session->set_flashdata('username_salah', true);
				redirect('Admin/login');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('name');
		$this->session->set_flashdata('logout', true);
		redirect('Admin/login');
	}

	public function gambar_slider()
	{
		if(empty($this->session->userdata('id'))) {
			$this->session->set_flashdata('login_dulu', true);
			redirect('Admin/login');
		}
		$var['title'] = 'Gambar Slider';
		$var['gambar'] = $this->db->order_by('id', 'desc')->get('image_slider')->result();
		$this->load->view('admin/gambar_slider', $var);
	}

	public function simpan_gambar()
	{
		$this->model->simpan_gambar();
		$this->session->set_flashdata('success_simpan', true);
		redirect('Admin/gambar_slider');
	}

	public function ubah_gambar()
	{
		$this->model->ubah_gambar();
		$this->session->set_flashdata('success_ubah', true);
		redirect('Admin/gambar_slider');
	}

	public function hapus_gambar($id)
	{
		$this->hapus_file_gambar($id);
		$this->db->delete('image_slider', array("id" => $id));
		$this->session->set_flashdata('success_hapus', true);
		redirect('Admin/gambar_slider');
	}

	private function hapus_file_gambar($id)
	{
		$gambar = $this->db->get_where('image_slider', ['id' => $id])->row();
        if ($gambar->image != "01.jpg") {
            $filename = explode(".", $gambar->image)[0];
            array_map('unlink', glob(FCPATH . "/assets/image/slider/$filename.*"));
        }
	}

	public function visi_misi()
	{
		$var['title'] = 'Visi Misi';
		$var['data'] = $this->db->order_by('id', 'desc')->get('visi_misi')->row();
		$this->load->view('admin/visi_misi', $var);
	}

}

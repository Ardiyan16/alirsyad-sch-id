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
		if(empty($this->session->userdata('id'))) {
			$this->session->set_flashdata('login_dulu', true);
			redirect('Admin/login');
		}
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
		if(empty($this->session->userdata('id'))) {
			$this->session->set_flashdata('login_dulu', true);
			redirect('Admin/login');
		}
		$var['title'] = 'Visi Misi';
		$var['data'] = $this->db->order_by('id', 'desc')->get('visi_misi')->row();
		$this->load->view('admin/visi_misi', $var);
	}

	public function tambah_visi_misi()
	{
		$var['title'] = 'Tambah Visi Misi';
		$var['data'] = $this->db->order_by('id', 'desc')->get('visi_misi')->row();
		$this->load->view('admin/tambah_visimisi', $var);
	}

	public function simpan_visimisi()
	{
		$this->form_validation->set_rules('visi', 'visi', 'required|trim', ['required' => 'visi harus diisi']);
		$this->form_validation->set_rules('misi', 'misi', 'required|trim', ['required' => 'misi harus diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/tambah_visi_misi');
        } else {
			$this->model->simpan_visimisi();
			$this->session->set_flashdata('success_simpan', true);
			redirect('Admin/visi_misi');
		}
	}

	public function ubah_visimisi()
	{
		$this->form_validation->set_rules('visi', 'visi', 'required|trim', ['required' => 'visi harus diisi']);
		$this->form_validation->set_rules('misi', 'misi', 'required|trim', ['required' => 'misi harus diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/tambah_visi_misi');
        } else {
			$this->model->ubah_visimisi();
			$this->session->set_flashdata('success_ubah', true);
			redirect('Admin/visi_misi');
		}
	}

	public function kuota_pendaftaran()
	{
		if(empty($this->session->userdata('id'))) {
			$this->session->set_flashdata('login_dulu', true);
			redirect('Admin/login');
		}
		$var['title'] = 'Kuota Pendaftaran';
		$var['data'] = $this->db->order_by('id', 'desc')->get('quota_registration')->row();
		$this->load->view('admin/kuota_pendaftaran', $var);
	}

	public function update_kuota()
	{
		$this->model->update_kuota();
		$this->session->set_flashdata('success_ubah', true);
		redirect('Admin/kuota_pendaftaran');
	}

	public function prestasi()
	{
		$var['title'] = 'Prestasi Siswa';
		$var['prestasi'] = $this->db->order_by('id', 'desc')->get('archievement')->result();
		$this->load->view('admin/prestasi/index', $var);
	}

	public function tambah_prestasi()
	{
		$var['title'] = 'Tambah Prestasi';
		$this->load->view('admin/prestasi/tambah', $var);
	}

	public function simpan_prestasi()
	{
		$this->form_validation->set_rules('student_name', 'student name', 'required|trim', ['required' => 'nama siswa wajib diisi']);
		$this->form_validation->set_rules('type_contest', 'type contest', 'required|trim', ['required' => 'jenis lomba wajib diisi']);
		$this->form_validation->set_rules('archievement', 'archievement', 'required|trim', ['required' => 'prestasi wajib diisi']);
        if ($this->form_validation->run() == false) {
			$this->tambah_prestasi();
        } else {
			$this->model->simpan_prestasi();
			$this->session->set_flashdata('success_simpan', true);
			redirect('Admin/prestasi');
		}
	}

	public function edit_prestasi($id)
	{
		$var['title'] = 'Edit Prestasi';
		$var['edit'] = $this->db->get_where('archievement', ['id' => $id])->row();
		$this->load->view('admin/prestasi/edit', $var);
	}

	public function update_prestasi()
	{
		$id = $this->input->post('id');
		$this->form_validation->set_rules('student_name', 'student name', 'required|trim', ['required' => 'nama siswa wajib diisi']);
		$this->form_validation->set_rules('type_contest', 'type contest', 'required|trim', ['required' => 'jenis lomba wajib diisi']);
		$this->form_validation->set_rules('archievement', 'archievement', 'required|trim', ['required' => 'prestasi wajib diisi']);
        if ($this->form_validation->run() == false) {
			$this->edit_prestasi($id);
        } else {
			$this->model->update_prestasi();
			$this->session->set_flashdata('success_ubah', true);
			redirect('Admin/prestasi');
		}
	}

	public function hapus_prestasi($id)
	{
		$this->db->delete('archievement', ['id' => $id]);
		$this->session->set_flashdata('success_hapus', true);
		redirect('Admin/prestasi');
	}

	public function testimoni()
	{
		$var['title'] = 'Testimoni';
		$var['testimony'] = $this->db->order_by('id', 'desc')->get('testimony')->result();
		$this->load->view('admin/testimony', $var);
	}

	public function simpan_testimoni()
	{
		$this->model->simpan_testimoni();
		$this->session->set_flashdata('success_simpan', true);
		redirect('Admin/testimoni');
	}

	public function update_testimoni()
	{
		$this->model->update_testimoni();
		$this->session->set_flashdata('success_ubah', true);
		redirect('Admin/testimoni');
	}

	public function hapus_testimoni($id)
	{
		$this->db->delete('testimony', ['id' => $id]);
		$this->session->set_flashdata('success_hapus', true);
		redirect('Admin/testimoni');
	}

	public function berita()
	{
		$var['title'] = 'Berita';
		$var['berita'] = $this->db->order_by('id', 'desc')->get('news')->result();
		$this->load->view('admin/berita/index', $var);
	}

	public function tambah_berita()
	{
		$var['title'] = 'Tambah Berita';
		$this->load->view('admin/berita/tambah', $var);
	}

	public function simpan_berita()
	{
		$this->form_validation->set_rules('title', 'title', 'required|trim', ['required' => 'judul wajib diisi']);
		$this->form_validation->set_rules('date', 'date', 'required|trim', ['required' => 'tanggal wajib diisi']);
		$this->form_validation->set_rules('writer', 'writer', 'required|trim', ['required' => 'penulis wajib diisi']);
		$this->form_validation->set_rules('content', 'content', 'required|trim', ['required' => 'isi berita wajib diisi']);
		if (empty($_FILES['image']['name']))
		{
			$this->form_validation->set_rules('image', 'Document', 'required', ['required' => 'gambar berita wajib diisi']);
		}
		$this->form_validation->set_rules('tag', 'tag', 'required|trim', ['required' => 'tagar wajib diisi']);
        if ($this->form_validation->run() == false) {
			$this->tambah_berita();
        } else {
			$this->model->simpan_berita();
			$this->session->set_flashdata('success_simpan', true);
			redirect('Admin/berita');
		}
	}

	public function edit_berita($slug)
	{
		$var['title'] = 'Edit Berita';
		$var['edit'] = $this->db->get_where('news', ['slug' => $slug])->row();
		$this->load->view('admin/berita/edit', $var);
	}

	public function update_berita()
	{
		$slug = $this->input->post('slug');
		$this->form_validation->set_rules('title', 'title', 'required|trim', ['required' => 'judul wajib diisi']);
		$this->form_validation->set_rules('date', 'date', 'required|trim', ['required' => 'tanggal wajib diisi']);
		$this->form_validation->set_rules('writer', 'writer', 'required|trim', ['required' => 'penulis wajib diisi']);
		$this->form_validation->set_rules('content', 'content', 'required|trim', ['required' => 'isi berita wajib diisi']);
		$this->form_validation->set_rules('tag', 'tag', 'required|trim', ['required' => 'tagar wajib diisi']);
        if ($this->form_validation->run() == false) {
			$this->edit_berita($slug);
        } else {
			$this->model->update_berita();
			$this->session->set_flashdata('success_ubah', true);
			redirect('Admin/berita');
		}
	}

	public function hapus_berita($id)
	{
		$this->hapus_gambar_berita($id);
		$this->db->delete('news', ['id' => $id]);
		$this->session->set_flashdata('success_hapus', true);
		redirect('Admin/berita');
	}

	private function hapus_gambar_berita($id)
	{
		$gambar = $this->db->get_where('news', ['id' => $id])->row();
        if ($gambar->image != "01.jpg") {
            $filename = explode(".", $gambar->image)[0];
            array_map('unlink', glob(FCPATH . "/assets/image/news/$filename.*"));
        }
	}

	public function struktur_pc()
	{
		$var['title'] = 'Struktur Organisasi Pimpinan Cabang';
		$var['struktur'] = $this->db->order_by('id', 'desc')->get('structure_pc')->row();
		$this->load->view('admin/struktur/struktur_pc', $var);
	}

	public function edit_struktur_pc()
	{
		$var['title'] = 'Edit Struktur Organisasi Pimpinan Cabang';
		$var['struktur'] = $this->db->order_by('id', 'desc')->get('structure_pc')->row();
		$this->load->view('admin/struktur/edit_struktur_pc', $var);
	}

	public function ubah_struktur_pc()
	{

		$this->form_validation->set_rules('chief', 'chief', 'required|trim', ['required' => 'ketua harus diisi']);
		$this->form_validation->set_rules('secretary', 'secretary', 'required|trim', ['required' => 'sekretaris harus diisi']);
		$this->form_validation->set_rules('treasurer', 'treasurer', 'required|trim', ['required' => 'bendahara harus diisi']);
		$this->form_validation->set_rules('chief_lpp', 'chief_lpp', 'required|trim', ['required' => 'ketua lajnah pendidikan harus diisi']);
		$this->form_validation->set_rules('chief_dakwah', 'chief_dakwah', 'required|trim', ['required' => 'ketua lajnah dakwah harus diisi']);
		$this->form_validation->set_rules('chief_sosek', 'chief_sosek', 'required|trim', ['required' => 'ketua lajnah sosial & ekonomi harus diisi']);
		$this->form_validation->set_rules('chief_pcw', 'chief_pcw', 'required|trim', ['required' => 'ketua pc wanita harus diisi']);
		$this->form_validation->set_rules('chief_pemuda', 'chief_pemuda', 'required|trim', ['required' => 'ketua pc pemuda harus diisi']);
		if ($this->form_validation->run() == false) {
			$this->edit_struktur_pc();
        } else {
			$this->model->ubah_struktur_pc();
			$this->session->set_flashdata('success_ubah', true);
			redirect('Admin/struktur_pc');
		}	
	}

	public function struktur_lpp()
	{
		$var['title'] = 'Struktur Lajnah Pendidikan & Pengajaran';
		$var['struktur'] = $this->db->order_by('id', 'desc')->get('structure_lpp')->row();
		$this->load->view('admin/struktur/struktur_lpp', $var);
	}

	public function edit_struktur_lpp()
	{

	}

	public function unit()
	{
		$var['title'] = 'Unit';
		$var['unit'] = $this->db->order_by('id', 'desc')->get('unit')->result();
		$this->load->view('admin/unit/index', $var);
	}

	public function tambah_unit()
	{
		$var['title'] = 'Tambah Unit';
		$this->load->view('admin/unit/tambah', $var);
	}

	public function simpan_unit()
	{
		$this->form_validation->set_rules('name_unit', 'name unit', 'required|trim', ['required' => 'nama unit wajib diisi']);
		if (empty($_FILES['unit_logo']['name']))
		{
			$this->form_validation->set_rules('unit_logo', 'unit logo', 'required', ['required' => 'logo unit wajib diisi']);
		}
		$this->form_validation->set_rules('unit_profile', 'unit profile', 'required|trim', ['required' => 'profile unit wajib diisi']);
		$this->form_validation->set_rules('name_head_school', 'kepala sekolah', 'required|trim', ['required' => 'nama kepala sekolah wajib diisi']);
		$this->form_validation->set_rules('quote_head_school', 'kutipan', 'required|trim', ['required' => 'kutipan kepala sekolah wajib diisi']);
		if (empty($_FILES['image_head_school']['name']))
		{
			$this->form_validation->set_rules('image_head_school', 'foto kepala sekolah', 'required', ['required' => 'foto kepala sekolah wajib diisi']);
		}
		if ($this->form_validation->run() == false) {
			$this->tambah_unit();
        } else {
			$this->model->simpan_unit();
			$this->session->set_flashdata('success_simpan', true);
			redirect('Admin/unit');
		}	
	}

	public function detail_unit($id)
	{
		$var['title'] = 'Detail Unit';
		$var['value'] = $this->db->get_where('unit', ['id' => $id])->row();
		$this->load->view('admin/unit/detail', $var);
	}

	public function edit_unit($id)
	{
		$var['title'] = 'Edit Unit';
		$var['edit'] = $this->db->get_where('unit', ['id' => $id])->row();
		$this->load->view('admin/unit/edit', $var);
	}

	public function update_unit()
	{
		$id = $this->input->post('id');
		$this->form_validation->set_rules('name_unit', 'name unit', 'required|trim', ['required' => 'nama unit wajib diisi']);
		$this->form_validation->set_rules('unit_profile', 'unit profile', 'required|trim', ['required' => 'profile unit wajib diisi']);
		$this->form_validation->set_rules('name_head_school', 'kepala sekolah', 'required|trim', ['required' => 'nama kepala sekolah wajib diisi']);
		$this->form_validation->set_rules('quote_head_school', 'kutipan', 'required|trim', ['required' => 'kutipan kepala sekolah wajib diisi']);
		if ($this->form_validation->run() == false) {
			$this->edit_unit($id);
        } else {
			$this->model->update_unit();
			$this->session->set_flashdata('success_ubah', true);
			redirect('Admin/unit');
		}	
	}

	public function hapus_unit($id)
	{
		$this->hapus_gambar_logo_unit($id);
		$this->hapus_gambar_kepala_sekolah($id);
		$this->db->delete('unit', ['id' => $id]);
		$this->session->set_flashdata('success_hapus', true);
		redirect('Admin/unit');
	}

	private function hapus_gambar_logo_unit($id)
	{
		$gambar = $this->db->get_where('unit', ['id' => $id])->row();
        if ($gambar->unit_logo != "01.jpg") {
            $filename = explode(".", $gambar->unit_logo)[0];
            array_map('unlink', glob(FCPATH . "/assets/image/unit/$filename.*"));
        }
	}

	private function hapus_gambar_kepala_sekolah($id)
	{
		$gambar = $this->db->get_where('unit', ['id' => $id])->row();
        if ($gambar->image_head_school != "01.jpg") {
            $filename = explode(".", $gambar->image_head_school)[0];
            array_map('unlink', glob(FCPATH . "/assets/image/unit/$filename.*"));
        }
	}

	public function fasilitas_unit()
	{
		$var['title'] = 'Fasilitas Unit';
		$var['fasilitas'] = $this->db->select('unit_fasility.*, unit.name_unit')
							->from('unit_fasility')
							->join('unit', 'unit.id = unit_fasility.unit_id')
							->order_by('id', 'desc')
							->get()->result();
		$var['unit'] = $this->db->get('unit')->result();
		$this->load->view('admin/unit/index_fasilitas', $var);
	}

	public function simpan_fasilitas()
	{
		$this->model->simpan_fasilitas();
		$this->session->set_flashdata('success_simpan', true);
		redirect('Admin/fasilitas_unit');
	}

	public function ubah_fasilitas()
	{
		$this->model->ubah_fasilitas();
		$this->session->set_flashdata('success_ubah', true);
		redirect('Admin/fasilitas_unit');
	}

	public function hapus_fasilitas($id)
	{
		$this->hapus_gambar_fasilitas($id);
		$this->db->delete('unit_fasility', ['id' => $id]);
		$this->session->set_flashdata('success_hapus', true);
		redirect('Admin/fasilitas_unit');
	}

	private function hapus_gambar_fasilitas($id)
	{
		$gambar = $this->db->get_where('unit_fasility', ['id' => $id])->row();
        if ($gambar->image_fasility != "01.jpg") {
            $filename = explode(".", $gambar->image_fasility)[0];
            array_map('unlink', glob(FCPATH . "/assets/image/unit/fasility/$filename.*"));
        }
	}

	public function aktivitas_unit()
	{
		$var['title'] = 'Aktivitas Unit';
		$var['aktivitas'] = $this->db->select('galery_activity_unit.*, unit.name_unit')
							->from('galery_activity_unit')
							->join('unit', 'unit.id = galery_activity_unit.unit_id')
							->order_by('galery_activity_unit.id', 'desc')
							->get()->result();
		$var['unit'] = $this->db->get('unit')->result();
		$this->load->view('admin/unit/index_aktivitas', $var);
	}

	public function simpan_aktivitas()
	{
		$this->model->simpan_aktivitas();
		$this->session->set_flashdata('success_simpan', true);
		redirect('Admin/aktivitas_unit');
	}

	public function ubah_aktivitas()
	{
		$this->model->ubah_aktivitas();
		$this->session->set_flashdata('success_ubah', true);
		redirect('Admin/aktivitas_unit');
	}

	public function hapus_aktivitas($id)
	{
		$this->hapus_gambar_aktivitas($id);
		$this->db->delete('galery_activity_unit', ['id' => $id]);
		$this->session->set_flashdata('success_hapus', true);
		redirect('Admin/aktivitas_unit');
	}

	private function hapus_gambar_aktivitas($id)
	{
		$gambar = $this->db->get_where('galery_activity_unit', ['id' => $id])->row();
        if ($gambar->image != "01.jpg") {
            $filename = explode(".", $gambar->image)[0];
            array_map('unlink', glob(FCPATH . "/assets/image/unit/activity/$filename.*"));
        }
	}

	public function ekstrakulikuler()
	{
		$var['title'] = 'Ekstrakulikuler';
		$var['ekstrakulikuler'] = $this->db->order_by('id', 'desc')->get('extracurricular')->result();
		$this->load->view('admin/ekstrakulikuler', $var);
	}

	public function simpan_ekstrakulikuler()
	{
		$this->model->simpan_ekstrakulikuler();
		$this->session->set_flashdata('success_simpan', true);
		redirect('Admin/ekstrakulikuler');
	}

	public function hapus_ekstrakulikuler($id)
	{
		$this->hapus_gambar_ekstrakulikuler($id);
		$this->db->delete('extracurricular', ['id' => $id]);
		$this->session->set_flashdata('success_hapus', true);
		redirect('Admin/ekstrakulikuler');
	}

	private function hapus_gambar_ekstrakulikuler($id)
	{
		$gambar = $this->db->get_where('extracurricular', ['id' => $id])->row();
        if ($gambar->image != "01.jpg") {
            $filename = explode(".", $gambar->image)[0];
            array_map('unlink', glob(FCPATH . "/assets/image/extracurricular/$filename.*"));
        }
	}

}

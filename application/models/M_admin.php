<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_admin extends CI_Model
{

	public function simpan_gambar()
	{
		$this->image = $this->upload_gambarSlider();
		// var_dump($this);die;
		$this->db->insert('image_slider', $this);
	}

	public function ubah_gambar()
	{
		$id = $this->input->post('id');
		if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->upload_gambarSlider();
        } else {
            $this->image = $this->input->post('old_image');
        }
		$this->db->update('image_slider', $this, ['id' => $id]);
	}

	private function upload_gambarSlider()
	{
		$config['upload_path']          = './assets/image/slider/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['image']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
	}

	public function simpan_visimisi()
	{
		$this->visi = $this->input->post('visi');
		$this->misi = $this->input->post('misi');
		$this->db->insert('visi_misi', $this);
	}

	public function ubah_visimisi()
	{
		$id = $this->input->post('id');
		$this->visi = $this->input->post('visi');
		$this->misi = $this->input->post('misi');
		$this->db->update('visi_misi', $this, ['id' => $id]);
	}

	public function update_kuota()
	{
		date_default_timezone_set('Asia/Jakarta');
		$post = $this->input->post();
		$id = $this->input->post('id');
		$this->year = $post['year'];
		$this->home_schooling = $post['home_schooling'];
		$this->tpq = $post['tpq'];
		$this->sd = $post['sd'];
		$this->smp = $post['smp'];
		$this->updated_at = date('Y-m-d');
		$this->db->update('quota_registration', $this, ['id' => $id]);
	}

	public function simpan_prestasi()
	{
		$post = $this->input->post();
		$this->student_name = $post['student_name'];
		$this->type_contest = $post['type_contest'];
		$this->archievement = $post['archievement'];
		$this->level = $post['level'];
		$this->organizer_contest = $post['organizer_contest'];
		$this->information = $post['information'];
		$this->date_contest = $post['date_contest'];
		$this->db->insert('archievement', $this);
	}

	public function update_prestasi()
	{
		$post = $this->input->post();
		$id = $this->input->post('id');
		$this->student_name = $post['student_name'];
		$this->type_contest = $post['type_contest'];
		$this->archievement = $post['archievement'];
		$this->level = $post['level'];
		$this->organizer_contest = $post['organizer_contest'];
		$this->information = $post['information'];
		$this->date_contest = $post['date_contest'];
		$this->db->update('archievement', $this, ['id' => $id]);
	}

	public function simpan_testimoni()
	{
		$post = $this->input->post();
		$this->parent_name = $post['parent_name'];
		$this->testi = $post['testi'];
		$this->work = $post['work'];
		$this->db->insert('testimony', $this);
	}

	public function update_testimoni()
	{
		$post = $this->input->post();
		$id = $this->input->post('id');
		$this->parent_name = $post['parent_name'];
		$this->testi = $post['testi'];
		$this->work = $post['work'];
		$this->db->update('testimony', $this, ['id' => $id]);
	}

	public function simpan_berita()
	{
		$post = $this->input->post();
		$this->title = $post['title'];
		$this->slug = $post['slug'];
		$this->date = $post['date'];
		$this->writer = $post['writer'];
		$this->content = $post['content'];
		$this->image = $this->upload_imageBerita();
		$this->tag = $post['tag'];
		$this->db->insert('news', $this);
	}

	public function update_berita()
	{
		$post = $this->input->post();
		$id = $post['id'];
		$this->title = $post['title'];
		$this->slug = $post['slug'];
		$this->date = $post['date'];
		$this->writer = $post['writer'];
		$this->content = $post['content'];
		if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->upload_imageBerita();
        } else {
            $this->image = $this->input->post('old_image');
        }
		$this->tag = $post['tag'];
		$this->db->update('news', $this, ['id' => $id]);
	}

	private function upload_imageBerita()
	{
		$config['upload_path']          = './assets/image/news/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['image']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
	}

	public function ubah_struktur_pc()
	{
		$post = $this->input->post();
		$id =$this->input->post('id');
		$this->chief = $post['chief'];
		$this->secretary = $post['secretary'];
		$this->treasurer = $post['treasurer'];
		$this->chief_lpp = $post['chief_lpp'];
		$this->chief_dakwah = $post['chief_dakwah'];
		$this->chief_sosek = $post['chief_sosek'];
		$this->chief_pcw = $post['chief_pcw'];
		$this->chief_pemuda = $post['chief_pemuda'];
		if (!empty($_FILES["image"]["name"])) {
			$this->image = $this->image_Struktur();
        } else {
            $this->image = $this->input->post('old_image');
        }
		if (!empty($_FILES["image_chart"]["name"])) {
			$this->image_chart = $this->image_BaganStruktur();
        } else {
            $this->image_chart = $this->input->post('old_bagan');
        }
		$this->db->update('structure_pc', $this, ['id' => $id]);
	}

	private function image_Struktur()
	{
		$config['upload_path']          = './assets/image/struktur/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['image']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
	}

	private function image_BaganStruktur()
	{
		$config['upload_path']          = './assets/image/struktur/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['image_chart']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image_chart')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
	}

	public function simpan_unit()
	{
		$post = $this->input->post();
		$this->name_unit = $post['name_unit'];
		$this->unit_logo = $this->upload_imageUnit('unit_logo');
		$this->unit_profile = $post['unit_profile'];
		$this->name_head_school = $post['name_head_school'];
		$this->quote_head_school = $post['quote_head_school'];
		$this->image_head_school = $this->upload_imageUnit('image_head_school');
		$this->instagram = $post['instagram'];
		$this->facebook = $post['facebook'];
		$this->youtube = $post['youtube'];
		$this->db->insert('unit', $this);
	}
	
	public function update_unit()
	{
		$id = $this->input->post('id');
		$post = $this->input->post();
		$this->name_unit = $post['name_unit'];
		if (!empty($_FILES["unit_logo"]["name"])) {
			$this->unit_logo = $this->upload_imageUnit('unit_logo');
        } else {
            $this->unit_logo = $this->input->post('old_logo');
        }
		$this->unit_profile = $post['unit_profile'];
		$this->name_head_school = $post['name_head_school'];
		$this->quote_head_school = $post['quote_head_school'];
		if (!empty($_FILES["unit_logo"]["name"])) {
			$this->image_head_school = $this->upload_imageUnit('image_head_school');
        } else {
            $this->image_head_school = $this->input->post('old_image_head_school');
        }
		$this->instagram = $post['instagram'];
		$this->facebook = $post['facebook'];
		$this->youtube = $post['youtube'];
		$this->db->update('unit', $this, ['id' => $id]);
	}

	private function upload_imageUnit($params)
	{
		$config['upload_path']          = './assets/image/unit/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES[$params]['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($params)) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
	}

	public function simpan_fasilitas()
	{
		$this->unit_id = $this->input->post('unit_id');
		$this->name_fasility = $this->input->post('name_fasility');
		$this->image_fasility = $this->upload_imageFasility();
		$this->db->insert('unit_fasility', $this);
	}

	public function ubah_fasilitas()
	{
		$id = $this->input->post('id');
		$this->unit_id = $this->input->post('unit_id');
		$this->name_fasility = $this->input->post('name_fasility');
		if (!empty($_FILES["image_fasility"]["name"])) {
			$this->image_fasility = $this->upload_imageFasility();
        } else {
            $this->image_fasility = $this->input->post('old_image');
        }
		$this->db->update('unit_fasility', $this, ['id' => $id]);
	}

	private function upload_imageFasility()
	{
		$config['upload_path']          = './assets/image/unit/fasility';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['image_fasility']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image_fasility')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
	}

	public function simpan_aktivitas()
	{
		$this->unit_id = $this->input->post('unit_id');
		$this->image = $this->upload_imageActivity();
		$this->db->insert('galery_activity_unit', $this);
	}

	public function ubah_aktivitas()
	{
		$id = $this->input->post('id');
		$this->unit_id = $this->input->post('unit_id');
		if (!empty($_FILES["image"]["name"])) {
			$this->image = $this->upload_imageActivity();
        } else {
            $this->image = $this->input->post('old_image');
        }
		$this->db->update('galery_activity_unit', $this, ['id' => $id]);
	}

	private function upload_imageActivity()
	{
		$config['upload_path']          = './assets/image/unit/activity';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['image']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
	}

	public function simpan_ekstrakulikuler()
	{
		$this->name_extra = $this->input->post('name_extra');
		$this->profile_extra = $this->input->post('profile_extra');
		$this->image = $this->upload_imageEkstra();
		$this->db->insert('extracurricular', $this);
	}

	private function upload_imageEkstra()
	{
		$config['upload_path']          = './assets/image/extracurricular';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['image']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
	}
}

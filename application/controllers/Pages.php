<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$var['title'] = 'Home';
		$var['gambar'] = $this->db->get('image_slider')->result();
		$var['kuota'] = $this->db->order_by('id', 'desc')->get('quota_registration')->row();
		$var['testimoni'] = $this->db->order_by('id', 'desc')->get('testimony')->result();
		$var['berita'] = $this->db->order_by('id', 'desc')->get('news')->row();
		$this->load->view('pages/home', $var);
	}

	public function selayang_pandang()
	{
		$var['title'] = 'Selayang Pandang';
		$this->load->view('pages/selayang_pandang', $var);
	}

	public function visi_misi()
	{
		$var['title'] = 'Visi Misi';
		$var['visimisi'] = $this->db->get('visi_misi')->row();
		$this->load->view('pages/visi_misi', $var);
	}

	public function struktur_organisasi()
	{
		$var['title'] = 'Struktur Organisasi';
		$var['struktur_pc'] = $this->db->get('structure_pc')->row();
		$this->load->view('pages/struktur_organisasi', $var);
	}

	public function sekolah_dasar()
	{
		$var['title'] = 'Unit SD';
		$var['value'] = $this->db->get_where('unit', ['id' => '3'])->row();
		$var['fasilitas'] = $this->db->get_where('unit_fasility', ['unit_id' => '3'])->result();
		$var['kegiatan'] = $this->db->get_where('galery_activity_unit', ['unit_id' => '3'])->result();
		$this->load->view('pages/unit/sd', $var);
	}

	public function sekolah_menengah_pertama()
	{
		$var['title'] = 'Unit SD';
		$var['value'] = $this->db->get_where('unit', ['id' => '4'])->row();
		$var['fasilitas'] = $this->db->get_where('unit_fasility', ['unit_id' => '4'])->result();
		$var['kegiatan'] = $this->db->get_where('galery_activity_unit', ['unit_id' => '4'])->result();
		$this->load->view('pages/unit/smp', $var);
	}

	public function inklusi()
	{
		$var['title'] = 'Inklusi';
		$var['value'] = $this->db->get_where('unit', ['id' => '6'])->row();
		$var['fasilitas'] = $this->db->get_where('unit_fasility', ['unit_id' => '6'])->result();
		$var['kegiatan'] = $this->db->get_where('galery_activity_unit', ['unit_id' => '6'])->result();
		$this->load->view('pages/unit/inklusi', $var);
	}

	public function taman_pendidikan_quran()
	{
		$var['title'] = 'Inklusi';
		$var['value'] = $this->db->get_where('unit', ['id' => '7'])->row();
		$var['fasilitas'] = $this->db->get_where('unit_fasility', ['unit_id' => '7'])->result();
		$var['kegiatan'] = $this->db->get_where('galery_activity_unit', ['unit_id' => '7'])->result();
		$this->load->view('pages/unit/tpq', $var);
	}

	public function pendaftaran()
	{
		$var['title'] = 'Pendaftaran';
		$this->load->view('pages/informasi/pendaftaran', $var);
	}

	public function pembayaran()
	{
		$var['title'] = 'Pembayaran';
		$this->load->view('pages/informasi/pembayaran', $var);
	}

	public function pengumuman()
	{
		$var['title'] = 'Pengumuman';
		$this->load->view('pages/informasi/pengumuman', $var);
	}

	public function berita()
	{
		$var['title'] = 'Berita';
		$var['berita'] = $this->db->order_by('id', 'desc')->get('news')->result();
		$this->load->view('pages/berita', $var);
	}

	public function full_berita($slug)
	{
		$var['berita'] = $this->db->get_where('news', ['slug' => $slug])->row();
		$news_view = [
			'news_id' => $var['berita']->id
		];
		$this->db->insert('news_view', $news_view);
		$var['title'] = $var['berita']->slug;
		$var['new_news'] = $this->db->order_by('id', 'desc')->limit(3)->get('news')->result();
		$var['dilihat'] = $this->db->from('news_view')->where('news_id', $var['berita']->id)->count_all_results();
		$this->load->view('pages/fullpage_berita', $var);
	}

	public function kontak()
	{
		$var['title'] = 'Kontak';
		$this->load->view('pages/kontak', $var);
	}

	public function elearning()
	{
		// $var['title'] = 'Kontak';
		$this->load->view('pages/elearning');
	}
}

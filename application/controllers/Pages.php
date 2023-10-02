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
}

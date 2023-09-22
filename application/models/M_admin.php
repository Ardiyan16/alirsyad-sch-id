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

	

}

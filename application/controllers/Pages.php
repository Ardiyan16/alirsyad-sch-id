<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$var['title'] = 'Home';
		$this->load->view('pages/home', $var);
	}
}

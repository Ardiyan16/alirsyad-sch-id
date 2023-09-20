<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$var['title'] = 'Home';
		$this->load->view('pages/home', $var);
	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	
}

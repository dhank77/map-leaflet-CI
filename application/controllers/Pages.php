<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('pages/index');
		$this->load->view('layouts/js');
	}
}

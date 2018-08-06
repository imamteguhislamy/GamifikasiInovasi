<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_user');		
	}
	
	public function index()
	{
		$data['user'] = $this->model_user->tampil_data();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/dashboard');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class materi extends CI_Controller {
	// public function __construct() {
	// 	parent::__construct();
	// 	$this->load->model('model_user');
	// }
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('home');
	}

	public function inovasi() {
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('materi_inovasi');
	}
}
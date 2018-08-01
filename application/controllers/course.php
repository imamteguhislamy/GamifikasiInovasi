<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course extends CI_Controller {
	// public function __construct() {
	// 	parent::__construct();
	// 	$this->load->model('model_user');
	// }
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('course');
	}

	public function materi_inovasi() {
		$this->load->view('header');
		$this->load->view('materi_inovasi');
	}

	public function quiz_inovasi() {
		$this->load->view('header');
		$this->load->view('quiz_inovasi');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	// public function __construct() {
	// 	parent::__construct();
	// 	$this->load->model('model_user');
	// }
	
	public function index()
	{
		$data['user'] = $this->model_user->tampil_data()->result();
		$this->load->view('header', $data);
		$this->load->view('home');
	}


}

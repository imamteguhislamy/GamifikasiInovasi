<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_user extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_user');
	}
	
	public function index()
	{
		$data['err_message'] = "";
		$this->load->view('login', $data);
	}

	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$isLogin = $this->model_user->login_authen($username, $password);
		if ($isLogin == true) {
			$this->home();
		}
		else{
			$data['err_message'] = "gagal login";
			$this->load->view('login', $data);
		}
	}

	public function home() {
		$this->load->view('home', $data);
	}
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	// public function __construct() {
	// 	parent::__construct();
	// 	$this->load->model('model_user');
	// }
	
	public function index()
	{
		$data['err_message'] = "";
		$this->load->view('login', $data);
	}

	public function login() {
		$nopeg = $this->input->post('nopeg');
		$password = $this->input->post('password');
		$isLogin = $this->model_user->login_authen($nopeg, $password);
		if ($isLogin == true) {
			$this->home();
		}
		else{
			$data['err_message'] = "Nomor Pegawai atau Password Salah";
			$this->load->view('login', $data);
		}
	}

	public function regis_user() {
		$this->load->view('register');
	}

	public function register() {
		$data = array(
			'nopeg' => $this->input->post('nopeg'),
			'unit' => $this->input->post('unit'),
			'nama' => $this->input->post('nama'),
			'password' => $this->input->post('password')
			);
		$this->model_user->addData($data);
		$this->index();
	}

	public function home() {
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('home');
	}
}


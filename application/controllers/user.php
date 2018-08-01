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
			$data_session = array(
 				'nama' => $nopeg,
 				'status' => 'login'
 				);
 			$this->session->set_userdata($data_session);
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
		//$this->load->view('sidebar');
		$this->load->view('home');
	}

	function admin() {
		$data['err_message'] = "";
		$this->load->view('loginadmin', $data);
	}

	public function loginadmin() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$isLogin = $this->model_user->login_authenadmin($username, $password);
		if ($isLogin == true) {
			$data_session = array(
 				'nama' => $username,
 				'status' => 'login'
 				);
 			$this->session->set_userdata($data_session);
			$this->homeadmin();
		}
		else{
			$data['err_message'] = "Username atau Password Salah";
			$this->load->view('loginadmin', $data);
		}
	}

	public function homeadmin() {
		$data['user'] = $this->model_user->tampil_data()->result();
		$this->load->view('headeradmin');
		$this->load->view('sidebaradmin');
		$this->load->view('tables', $data);
	}
}


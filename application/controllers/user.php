<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_user');
	}
	
	//VIEW LOGIN USER
	public function index()
	{
		$data['err_message'] = "";
		$this->load->view('login', $data);
	}

	// LOGIN USER
	public function login_user() {
		$nopeg = $this->input->post('nopeg');
		$password = $this->input->post('password');

		$where = array(
			'nopeg' => $nopeg,
			'password' => $password
			);

		$cek = $this->model_user->tampil_data2('user',$where)->num_rows();
        if($cek > 0){
 
			$data_session = array(
				'nopeg' => $nopeg,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 			$this->home();
 
		}else{
			$data['err_message'] = "Nomor Pegawai atau Password Salah";
			$this->load->view('login', $data);
		}
	}

	//REGIS USER
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

	//HOME USER
	public function home(){
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();		
		$this->load->view('header', $data);
		$this->load->view('home',  $data);
	}

	//VIEW LOGIN ADMIN
	public function admin() {
		$data['err_message'] = "";
		$this->load->view('loginadmin', $data);
	}

	//LOGIN ADMIN
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

	//HOME ADMIN
	public function homeadmin() {
		$data['user'] = $this->model_user->tampil_data()->result();
		$this->load->view('headeradmin');
		$this->load->view('sidebaradmin');
		$this->load->view('tables', $data);
	}

	public function logout() {
		session_destroy();
		redirect("user/index");
	}
}


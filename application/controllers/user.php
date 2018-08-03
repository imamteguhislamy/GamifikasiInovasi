<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function __construct() {
		parent::__construct();
		 $this->load->helper(array('form'));
		$this->load->model('model_user');
		$this->load->library('upload');
        $this->load->helper("file");		
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
 			redirect('home/user');
 
		}else{
			$data['err_message'] = "Nomor Pegawai atau Password Salah";
			$this->load->view('login', $data);
		}
	}

	//REGIS USER
	public function new_user() {
		$this->load->view('register');
	}

	//PAKE UPLOAD
	// public function register() {
 //        $fileUpload = array();
 //        $isUpload = FALSE;
 //        $config = array (
 //                'upload_path' => './images/',
 //                'allowed_types' => 'gif|jpg|png',
 //                'max_size' => 100000
 //        );
 //        $this->upload->initialize($config);
 //        if($this->upload->do_upload('picture')) {
 //            $fileUpload = $this->upload->data();
 //            $isUpload = TRUE;
 //    	} if($isUpload) {
	// 		$data = array(
	// 			'nopeg' => $this->input->post('nopeg'),
	// 			'unit' => $this->input->post('unit'),
	// 			'nama_lengkap' => $this->input->post('nama_lengkap'),
	// 			'nama_panggilan' => $this->input->post('nama_panggilan'),
	// 			'password' => $this->input->post('password')
	// 			'file_faktur' => $fileUpload['file_name']
	// 			);
	// 		$this->model_user->addData($data);
	// 		$this->index();
	// 	}
		
	// }

	//TIDAK PAKE UPLOAD
	public function register() {

		$picture =  basename($_FILES["foto"]["name"]);

		$data = array(
			'nopeg' => $this->input->post('nopeg'),
			'unit' => $this->input->post('unit'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'nama_panggilan' => $this->input->post('nama_panggilan'),
			'picture' => $picture,
			'password' => $this->input->post('password')
			);
		$this->model_user->addData($data);
		$config['upload_path']          = './images/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 100000;
 
		// load library upload
		$this->upload->initialize($config);
        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
           		$this->index();
        }
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
			redirect('admin/index');
		}
		else{
			$data['err_message'] = "Username atau Password Salah";
			$this->load->view('loginadmin', $data);
		}
	}

	public function logout() {
		session_destroy();
		redirect("user/index");
	}
}


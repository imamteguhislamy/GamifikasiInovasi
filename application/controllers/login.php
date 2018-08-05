<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
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
		$this->load->view('user/login', $data);
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
 			// redirect('user/home');
 
		}else{
			$data['err_message'] = "Nomor Pegawai atau Password Salah";
			$this->load->view('login', $data);
		}
	}

	public function home() {
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$data['leaderboard'] = $this->model_user->tampil_data_leaderboard()->result();
		$data['rank'] = $this->model_user->rank()->result();				
		$this->load->view('user/header', $data);
		$this->load->view('user/home',  $data);
	}

	//REGIS USER
	public function new_user() {
		$this->load->view('user/register');
	}

	public function update_profile() {
		$pict =  basename($_FILES['foto']["name"]);

		$nopeg = $_POST['nopeg'];
        $nama_panggilan = $_POST['nama_panggilan'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $unit = $_POST['unit'];
        $picture = $pict;
        $password = $_POST['password'];
        $data_update = array(
            'nama_lengkap' => $nama_lengkap,
            'nama_panggilan' => $nama_panggilan,
			'unit' => $unit,
			'picture' => $picture,
            'password' => $password
        );

		$config['upload_path']          = './images/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 100000;

		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
			$where = array('nopeg'=>$nopeg);
        	$upd = $this->model_user->edit_data('user', $data_update, $where);
	        if($upd>=1) {
	            redirect("user/home");
	        }
        }       
	}

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
		$this->load->view('admin/login', $data);
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
			$this->load->view('admin/login', $data);
		}
	}

	public function homeadmin() {
		$data['user'] = $this->model_user->tampil_data();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/tables', $data);
	}

	public function logout() {
		session_destroy();
		redirect("login");
	}
}


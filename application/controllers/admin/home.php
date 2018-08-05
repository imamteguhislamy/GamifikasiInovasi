<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		 $this->load->helper(array('form'));
		$this->load->model('model_user');
		$this->load->library('upload');
        $this->load->helper("file");		
	}
	
	public function index()
	{
		$data['user'] = $this->model_user->tampil_data();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/tables', $data);
	}

	public function edit($nopeg){
		$krywn = $this->model_user->GetKrywn("where nopeg = '$nopeg'");
		$data = array(
			"nopeg"=>$krywn[0]['nopeg'],
			"nama_lengkap"=>$krywn[0]['nama_lengkap'],
			"nama_panggilan"=>$krywn[0]['nama_panggilan'],
			"unit"=>$krywn[0]['unit'],
			"password"=>$krywn[0]['password']
		);
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit', $data);
	}

	public function update() {
        $nopeg = $_POST['nopeg'];
        $nama = $_POST['nama_panggilan'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $unit = $_POST['unit'];
        $password = $_POST['password'];
        $data_update = array(
            'nama_lengkap' => $nama_lengkap,
            'nama_panggilan' => $nama_panggilan,
			'unit' => $unit,
            'password' => $password
        );
        $where = array('nopeg'=>$nopeg);
        $upd = $this->model_user->edit_data('user', $data_update, $where);
        if($upd>=1) {
            redirect("admin/home");
        }
    }

    public function delete($nopeg) {
    	$where = array('nopeg' => $nopeg);
    	$del = $this->model_user->delete('user', $where);
    	if ($del>=1) {
    		redirect("admin/home"); 	
    	}
    }

    public function quiz() {
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/materi');
    }

    public function addquiz() {
    	$this->load->view('admin/header');
    	$this->load->view('admin/sidebar');
    	$this->load->view('admin/formquiz');
    }

    public function addQ(){
		$id = $_POST['id'];
		$soal = $_POST['soal'];
		$jwba = $_POST['jwba'];
		$jwbb = $_POST['jwbb'];
		$jwbc = $_POST['jwbc'];
		$jwbd = $_POST['jwbd'];
		$add = array(
			'id' => $id,
			'soal' => $soal,
			'jwba' => $jwba,
			'jwbb' => $jwbb,
			'jwbc' => $jwbc,
			'jwbd' => $jwbd
		);
           	$ins = $this->model_user->addQuiz('quiz', $add);
			if ($ins >= 1) {
				redirect('admin/home');
			} else {
				echo "Gagal";
			}
        }

    public function logout() {
    	session_start();
    	session_destroy();
    	redirect("admin");
    }

}
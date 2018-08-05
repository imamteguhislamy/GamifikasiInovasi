<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_user');
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
            redirect("admin/home/index");
        }
    }

    public function delete($nopeg) {
    	$where = array('nopeg' => $nopeg);
    	$del = $this->model_user->delete('user', $where);
    	if ($del>=1) {
    		redirect("admin/home/index"); 	
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

    public function logout() {
    	session_start();
    	session_destroy();
    	redirect("admin");
    }

}
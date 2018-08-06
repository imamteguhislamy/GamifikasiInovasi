<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		 $this->load->helper(array('form'));
		$this->load->model('model_user');
		$this->load->library('upload');
        $this->load->helper("file");
        $this->load->model('model_admin');		
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
    
    public function logout() {
    	session_start();
    	session_destroy();
    	redirect("admin");
    }

    // ====================================================================================================================
    // =====================================================QUIZ & MATERI==================================================
    // ====================================================================================================================

    public function quiz() {
    	$data['materi'] = $this->model_admin->data_materi();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/materi', $data);
    }

    public function addquiz($id) {
    	$quiz = $this->model_admin->quiz("where materi.id = $id");
    	$data = array(
    		"id_quiz"=>$quiz[0]['id_quiz'],
    		"id_materi"=>$quiz[0]['id_materi'],
			"soal"=>$quiz[0]['soal'],
			"jwba"=>$quiz[0]['jwba'],
			"jwbb"=>$quiz[0]['jwbb'],
			"jwbc"=>$quiz[0]['jwbc'],
			"jwbd"=>$quiz[0]['jwbd']
		);
		$data['quiz'] = $this->model_admin->quiz("where materi.id = $id");
		$this->load->view('admin/header');
    	$this->load->view('admin/sidebar');
    	$this->load->view('admin/formquiz', $data);
    }

    public function addQ(){
    	$id_quiz = $_POST['id_quiz'];
		$id_materi = $_POST['id_materi'];
		$soal = $_POST['soal'];
		$jwba = $_POST['jwba'];
		$jwbb = $_POST['jwbb'];
		$jwbc = $_POST['jwbc'];
		$jwbd = $_POST['jwbd'];
		$add = array(
			'id_quiz' => $id_quiz,
			'id_materi' => $id_materi,
			'soal' => $soal,
			'jwba' => $jwba,
			'jwbb' => $jwbb,
			'jwbc' => $jwbc,
			'jwbd' => $jwbd
		);
           	$ins = $this->model_user->addQuiz('quiz', $add);
			if ($ins >= 1) {
				redirect('admin/home/addquiz/'.$id_materi);
			} else {
				echo "Gagal";
			}
        }

        public function editQ($id_quiz){
        $edt = $this->model_admin->data_quiz("where id_quiz = '$id_quiz'");
		$data = array(			
			"id_quiz"=>$edt[0]['id_quiz'],
			"id_materi"=>$edt[0]['id_materi'],
			"soal"=>$edt[0]['soal'],
			"jwba"=>$edt[0]['jwba'],
			"jwbb"=>$edt[0]['jwbb'],
			"jwbc"=>$edt[0]['jwbc'],
			"jwbd"=>$edt[0]['jwbd']
		);
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/editquiz', $data);
        }

        public function updQ() {
        $id_materi = $_POST['id_materi'];
        $id_quiz = $_POST['id_quiz'];
        $soal = $_POST['soal'];
        $jwba = $_POST['jwbb'];
        $jwbb = $_POST['jwbb'];
        $jwbc = $_POST['jwbc'];
        $jwbd = $_POST['jwbd'];
        $edtQ = array(
            'id_quiz' => $id_quiz,
            'soal' => $soal,
			'jwba' => $jwba,
			'jwbb' => $jwbb,
			'jwbc' => $jwbc,
			'jwbd' => $jwbd
        );
        $where = array('id_quiz'=>$id_quiz);
        $upd = $this->model_admin->edit_quiz('quiz', $edtQ, $where);
        if($upd>=1) {
            redirect("admin/home/addquiz/".$id_materi);
        }
    }

}
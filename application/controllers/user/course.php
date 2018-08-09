<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_user');
		$this->load->model('model_admin');
	}
	
	public function index()
	{
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$data['materi'] = $this->model_admin->data_materi();
		$this->load->view('user/header', $data);
		$this->load->view('user/course', $data);
	}

	public function quiz_inovasi($id) {
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$i = 1;
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$datas['quiz'] = $this->model_admin->quiz("where materi.id = $id and id_quiz = ".$i);
		$this->load->view('user/header', $data);
		$this->load->view('user/quiz', $datas, $i);
	}

	public function show_materi($id) {
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$this->load->view('user/header', $data);
		
		$materi = $this->model_admin->show_materi("where id = '$id'");
		$data = array(
			"id"=>$materi[0]['id'],
			"judul"=>$materi[0]['judul'],
			"link_video"=>$materi[0]['link_video'],
			"pdf"=>$materi[0]['pdf'],
			"tipe"=>$materi[0]['tipe']
		);
		$this->load->view('user/materi', $data);
	}

	public function cek_quiz($i) {
		$answer = $_POST['radios'];
		$jawaban = $_POST['jwbn'];
		if ($answer == $jawaban) {          
		    echo 'Correct'; 
		}
		else {
		    echo 'Incorrect';
		}        
	}
}
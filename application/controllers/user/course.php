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
		$update = $this->model_user->skorawalnol("WHERE `user`.`nopeg` = '$nopeg'");
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$data['materi'] = $this->model_admin->data_materi();
		$this->load->view('user/header', $data);
		$this->load->view('user/course', $data);
	}

	public function quiz($id) {
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$i = 1;
		// $update = $this->model_user->editskorawal($skorawal, "WHERE `user`.`nopeg` = '$nopeg'");
		$data['materi'] = $this->model_admin->data_materi2("where judul = '$id'");
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$datas['quiz'] = $this->model_admin->quiz("where materi.judul = '$id' and id_quiz = ".$i);
		$this->load->view('user/header', $data);
		$this->load->view('user/quiz', $datas, $i);
	}

	public function materi($id) {
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$this->load->view('user/header', $data);
		
		$materi = $this->model_admin->show_materi("where judul = '$id'");
		$data = array(
			"id"=>$materi[0]['id'],
			"judul"=>$materi[0]['judul'],
			"link_video"=>$materi[0]['link_video'],
			"pdf"=>$materi[0]['pdf'],
			"tipe"=>$materi[0]['tipe']
		);
		$this->load->view('user/materi', $data);
	}

	public function quizz($id, $i) {
		$nopeg = $this->session->userdata('nopeg');				
		$where = array(
            	'nopeg' => $nopeg
         		);		
		$skorawal = $_POST['skorawal'];
		$answer = $_POST['radios'];
		$jawaban = $_POST['jwbBenar'];
		$skor = $_POST['skor'];
		$jmlSoal = $_POST['jmlSoal'];
		$jmlSoal = ($jmlSoal + 1);
		$i += 1;
		if ($answer == $jawaban) {	
			$skorawal += 1;	    
		    $skor += 10;
			$update = $this->model_user->editskor($skor, "WHERE `user`.`nopeg` = '$nopeg'");
			$update = $this->model_user->editskorawal($skorawal, "WHERE `user`.`nopeg` = '$nopeg'");
			$data['materi'] = $this->model_admin->data_materi2("where judul = '$id'");	    
			$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
			$datas['quiz'] = $this->model_admin->quiz("where judul = '$id' and id_quiz = ".$i);
			$this->load->view('user/header', $data);
			$this->load->view('user/quiz', $datas, $i, $jmlSoal);
		} else {
			$skorawal += 0;
			$skor += 0;
			$update = $this->model_user->editskor($skor, "WHERE `user`.`nopeg` = '$nopeg'");
			$data['materi'] = $this->model_admin->data_materi2("where judul = '$id'");	    
			$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
			$datas['quiz'] = $this->model_admin->quiz("where judul = '$id' and id_quiz = ".$i);
			$this->load->view('user/header', $data);
			$this->load->view('user/quiz', $datas, $i, $jmlSoal);
		} 
		if ($i >= $jmlSoal ){
			redirect('user/course/hasil_quiz/'. $id);
			// echo $skorawal;
			// $skorawal = 0;
			// $update = $this->model_user->editskorawal($skorawal, "WHERE `user`.`nopeg` = '$nopeg'");
			// redirect('user/home');	    
		}
	}

	public function hasil_quiz($id){
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		// $skorawal = 0;
		// $update = $this->model_user->editskorawal($skorawal, "WHERE `user`.`nopeg` = '$nopeg'");
		$data['materi'] = $this->model_admin->data_materi2("where judul = '$id'");
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$data['rank'] = $this->model_user->rank()->result();				
		$this->load->view('user/header', $data);
		$this->load->view('user/result',  $data);
	}
}
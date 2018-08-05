<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course extends CI_Controller {
	// public function __construct() {
	// 	parent::__construct();
	// 	$this->load->model('model_user');
	// }
	
	public function index()
	{
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$this->load->view('user/header', $data);
		$this->load->view('user/course');
	}

	public function materi_inovasi() {
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$this->load->view('user/header', $data);
		$this->load->view('user/materi_inovasi');
	}

	public function quiz_inovasi() {
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$this->load->view('user/header', $data);
		$this->load->view('user/quiz_inovasi');
	}

	
}
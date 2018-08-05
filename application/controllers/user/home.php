<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_user');
	}
	
	public function index(){
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

	public function personalize() {
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$this->load->view('user/header', $data);
		$this->load->view('user/personalize',  $data);
	}
}

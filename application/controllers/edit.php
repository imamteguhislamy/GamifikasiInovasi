<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit extends CI_Controller {

	public function index() {
		$nopeg = $this->session->userdata('nopeg');
		$where = array(
                'nopeg' => $nopeg
                );
		$data['user'] = $this->model_user->tampil_data2('user',$where)->result();
		$this->load->view('header', $data);
		$this->load->view('form',  $data);
	}



}
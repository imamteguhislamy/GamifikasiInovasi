<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_user');
		$this->load->model('model_admin');		
	}
	
	public function index()
	{
		$data['user'] = $this->model_user->tampil_data();
		
		// JKTDZ
		$data['JKTDZ'] = $this->model_admin->show_unit_JKTDZ()->result();

		// JKTDI
		$data['JKTID'] = $this->model_admin->show_unit_JKTID()->result();
		$data['JKTIB'] = $this->model_admin->show_unit_JKTIB()->result();
		$data['JKTVZ'] = $this->model_admin->show_unit_JKTVZ()->result();
		$data['JKTIG'] = $this->model_admin->show_unit_JKTIG()->result();
		$data['JKTPG'] = $this->model_admin->show_unit_JKTPG()->result();

		// JKTDF
		$data['JKTWL'] = $this->model_admin->show_unit_JKTWL()->result();
		$data['JKTWF'] = $this->model_admin->show_unit_JKTWF()->result();
		$data['JKTWA'] = $this->model_admin->show_unit_JKTWA()->result();
		$data['JKTWR'] = $this->model_admin->show_unit_JKTWR()->result();

		// JKTDE
		$data['JKTML'] = $this->model_admin->show_unit_JKTML()->result();
		$data['JKTMQ'] = $this->model_admin->show_unit_JKTMQ()->result();

		// JKTDO
		$data['JKTOF'] = $this->model_admin->show_unit_JKTOF()->result();
		$data['JKTOS'] = $this->model_admin->show_unit_JKTOS()->result();
		$data['JKTPN'] = $this->model_admin->show_unit_JKTPN()->result();

		// JKTDC
		$data['JKTCG'] = $this->model_admin->show_unit_JKTCG()->result();
		$data['JKTCI'] = $this->model_admin->show_unit_JKTCI()->result();
		$data['JKTCC'] = $this->model_admin->show_unit_JKTCC()->result();
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/dashboard', $data);
	}
}
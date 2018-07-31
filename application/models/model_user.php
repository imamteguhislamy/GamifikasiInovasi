<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model {

	public function addData($data) {
		$this->db->insert('user', $data);
	}

	public function getData() {
		$data = $this->db->get('user');
		return $data->result_array();
	}

	public function login_authen($nopeg, $password) {
		$this->db->select('*');
		$this->db->where('nopeg', $nopeg);
		$this->db->where('password', $password);
		$this->db->from('user');

		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return true;
		}
		else {
			return false;
		}
	}

	public function login_authenadmin($username, $password) {
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('admin');

		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return true;
		}
		else {
			return false;
		}
	}
}
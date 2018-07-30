<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function getData() {
		$data = $this->db->get('user');
		return $data->result_array();
	}

	public function login_authen($username, $password) {
		$this->db->select('*');
		$this->db->where('username', $username);
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
}
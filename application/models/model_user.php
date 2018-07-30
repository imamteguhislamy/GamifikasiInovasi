<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model {
	public function login_authen() {
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
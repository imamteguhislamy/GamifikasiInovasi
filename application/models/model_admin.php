<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_admin extends CI_Model {
	public function __construct() {
        $this->load->database();
    }

	public function data_materi() {
		$data = $this->db->get('materi');
		return $data->result();
	}

	public function data_quiz($where="") {
		$data = $this->db->query('SELECT * FROM quiz '. $where);
		return $data->result_array();
	}

	public function quiz($where="") {
		$data = $this->db->query('SELECT * FROM quiz RIGHT JOIN materi ON quiz.id_materi = materi.id '. $where);
		return $data->result_array();
	}

	public function tampil_materi($table, $where) {
		return $this->db->get_where($table,$where);
	}

	public function tambah_materi($data) {
		$this->db->insert('materi', $data);
	}

	public function hapus_materi($table, $where) {
		$del = $this->db->delete($table, $where);
		return $del;
	}

	public function edit_materi($table,$data,$where){		
		$upd = $this->db->update($table,$data,$where);
		return $upd;
	}

	public function edit_quiz($table,$data,$where){		
		$upd = $this->db->update($table,$data,$where);
		return $upd;
	}

	public function show_materi($where="") {
		$data = $this->db->query('select * from materi '. $where);
		return $data->result_array();
	}
    	
}
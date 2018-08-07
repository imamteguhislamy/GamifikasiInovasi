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

	// DASHBOARD

	// JKTDZ
	public function show_unit_JKTDZ($where="") {
		return $this->db->query('select * from user where unit like "JKTDZ%" order by skor desc');
	}

	// JKTDI
	public function show_unit_JKTID($where="") {
		return $this->db->query('select * from user where unit like "JKTID%" order by skor desc');
	}
    
    public function show_unit_JKTIB($where="") {
		return $this->db->query('select * from user where unit like "JKTIB%" order by skor desc');
	}

    public function show_unit_JKTVZ($where="") {
		return $this->db->query('select * from user where unit like "JKTVZ%" order by skor desc');
	}

    public function show_unit_JKTIG($where="") {
		return $this->db->query('select * from user where unit like "JKTIG%" order by skor desc');
	}

	public function show_unit_JKTPG($where="") {
		return $this->db->query('select * from user where unit like "JKTPG%" order by skor desc');
	}		

	// JKTDF
	public function show_unit_JKTWL($where="") {
		return $this->db->query('select * from user where unit like "JKTWL%" order by skor desc');
	}

	public function show_unit_JKTWF($where="") {
		return $this->db->query('select * from user where unit like "JKTWF%" order by skor desc');
	}

	public function show_unit_JKTWA($where="") {
		return $this->db->query('select * from user where unit like "JKTWA%" order by skor desc');
	}

	public function show_unit_JKTWR($where="") {
		return $this->db->query('select * from user where unit like "JKTWR%" order by skor desc');
	}

	// JKTDE
	public function show_unit_JKTML($where="") {
		return $this->db->query('select * from user where unit like "JKTML%" order by skor desc');
	}

	public function show_unit_JKTMQ($where="") {
		return $this->db->query('select * from user where unit like "JKTMQ%" order by skor desc');
	}

	// JKTDO
	public function show_unit_JKTOF($where="") {
		return $this->db->query('select * from user where unit like "JKTOF%" order by skor desc');
	}

	public function show_unit_JKTOS($where="") {
		return $this->db->query('select * from user where unit like "JKTOS%" order by skor desc');
	}

	public function show_unit_JKTPN($where="") {
		return $this->db->query('select * from user where unit like "JKTPN%" order by skor desc');
	}

	// JKTDC
	public function show_unit_JKTCG($where="") {
		return $this->db->query('select * from user where unit like "JKTCG%" order by skor desc');
	}

	public function show_unit_JKTCI($where="") {
		return $this->db->query('select * from user where unit like "JKTCI%" order by skor desc');
	}

	public function show_unit_JKTCC($where="") {
		return $this->db->query('select * from user where unit like "JKTCC%" order by skor desc');
	}

}
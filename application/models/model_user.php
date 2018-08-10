<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model {

	public function __construct() {
        $this->load->database();
    }

	public function addData($data) {
		$this->db->insert('user', $data);
	}

	public function addC($nopeg) {
		$this->db->query("ALTER TABLE `materi` ADD `". $nopeg . "` INT NOT NULL AFTER `gambar`");
	}

	public function tampil_data_leaderboard() {
		return $this->db->query('select nama_lengkap, unit, skor from user order by skor desc');
	}

	public function rank() {
		return $this->db->query('select rank from user');
	}

	public function tampil_data2($table, $where) {
		return $this->db->get_where($table,$where);
	}


	public function GetKrywn($where="") {
		$data = $this->db->query('select * from user '. $where);
		return $data->result_array();
	}

	public function getData($nopeg) {
		$data = $this->db->get('user');
		return $data->result_array();
	}

	public function tampil_data() {
		$data = $this->db->get('user');
		return $data->result();
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

	public function edit_data($table,$data,$where){		
		$upd = $this->db->update($table,$data,$where);
		return $upd;
	}

	public function editskor($skor, $where=""){
		$upd = $this->db->query("UPDATE `user` SET `skor` = "."'".$skor."'"." ".$where);
	}	

	public function editskorawal($skorawal, $where=""){
		$upd = $this->db->query("UPDATE `user` SET `skorawal` = "."'".$skorawal."'"." ".$where);
	}

	public function skorawalnol($where=""){
		$update = $this->db->query("UPDATE `user` SET `skorawal` = 0 " . $where);
	}

	public function delete($table, $where) {
		$del = $this->db->delete($table, $where);
		return $del;
	}

	public function addQuiz($tblname, $data){
		$ins = $this->db->insert($tblname, $data);
		return $ins;
	}

}
// UPDATE `user` SET `skor` = '10' WHERE `user`.`nopeg` = '14';
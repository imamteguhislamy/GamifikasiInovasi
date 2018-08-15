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

	public function data_materi2($where="") {
		$data = $this->db->query('SELECT * FROM materi '. $where);
		return $data->result();
	}

	public function data_quiz($where="") {
		$data = $this->db->query('SELECT * FROM quiz '. $where);
		return $data->result_array();
	}

	public function quiz($where="") {
		$data = $this->db->query('SELECT * FROM quiz RIGHT JOIN materi ON quiz.id_materi = materi.id '. $where . ' ORDER BY quiz.id_quiz ASC');
		return $data->result_array();
	}

	// public function quiz2($where="") {
	// 	$data = $this->db->query('SELECT * FROM quiz JOIN materi ON quiz.id_materi = materi.id '. $where);
	// 	return $data->result_array();
	// }

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

	public function hapus_soal($table, $where) {
		$delSoal = $this->db->delete($table, $where);
		return $delSoal;
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


	public function show_quiz($where="") {
		$data = $this->db->query('SELECT * FROM quiz '. $where);
		return $data->result_array();
	}


    	
	// DASHBOARD

	// JKTDZ
	public function show_unit_JKTDH($where="") {
		return $this->db->query('select * from user where unit like "JKTDH%" order by skor desc');
	}

	public function show_unit_JKTDV($where="") {
		return $this->db->query('select * from user where unit like "JKTDV%" order by skor desc');
	}

	public function show_unit_JKTDS($where="") {
		return $this->db->query('select * from user where unit like "JKTDS%" order by skor desc');
	}

	public function show_unit_JKTDK($where="") {
		return $this->db->query('select * from user where unit like "JKTDK%" order by skor desc');
	}

	public function show_unit_JKTDA($where="") {
		return $this->db->query('select * from user where unit like "JKTDA%" order by skor desc');
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

	public function show_unit_JKTOG($where="") {
		return $this->db->query('select * from user where unit like "JKTOG%" order by skor desc');
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

	// JKTDG
	public function show_unit_JKTGC($where="") {
		return $this->db->query('select * from user where unit like "JKTGC%" order by skor desc');
	}

	public function show_unit_JKTGO($where="") {
		return $this->db->query('select * from user where unit like "JKTGO%" order by skor desc');
	}

	public function show_unit_JKTGI($where="") {
		return $this->db->query('select * from user where unit like "JKTGI%" order by skor desc');
	}

	public function show_unit_LONDM($where="") {
		return $this->db->query('select * from user where unit like "LONDM%" order by skor desc');
	}

	public function show_unit_JEDDM($where="") {
		return $this->db->query('select * from user where unit like "JEDDM%" order by skor desc');
	}

	public function show_unit_AMSDM($where="") {
		return $this->db->query('select * from user where unit like "AMSDM%" order by skor desc');
	}

	public function show_unit_SINDM($where="") {
		return $this->db->query('select * from user where unit like "SINDM%" order by skor desc');
	}

	public function show_unit_KULDM($where="") {
		return $this->db->query('select * from user where unit like "KULDM%" order by skor desc');
	}

	public function show_unit_BKKDM($where="") {
		return $this->db->query('select * from user where unit like "BKKDM%" order by skor desc');
	}

	public function show_unit_TYODM($where="") {
		return $this->db->query('select * from user where unit like "TYODM%" order by skor desc');
	}

	public function show_unit_OSADM($where="") {
		return $this->db->query('select * from user where unit like "OSADM%" order by skor desc');
	}

	public function show_unit_NGODM($where="") {
		return $this->db->query('select * from user where unit like "NGODM%" order by skor desc');
	}

	public function show_unit_SELDM($where="") {
		return $this->db->query('select * from user where unit like "SELDM%" order by skor desc');
	}

	public function show_unit_SHADM($where="") {
		return $this->db->query('select * from user where unit like "MELDM%" order by skor desc');
	}

	public function show_unit_HKGDM($where="") {
		return $this->db->query('select * from user where unit like "HKGDM%" order by skor desc');
	}

	public function show_unit_BJSDM($where="") {
		return $this->db->query('select * from user where unit like "BJSDM%" order by skor desc');
	}

	public function show_unit_CANDM($where="") {
		return $this->db->query('select * from user where unit like "CANDM%" order by skor desc');
	}

	public function show_unit_SYDDM($where="") {
		return $this->db->query('select * from user where unit like "SYDDM%" order by skor desc');
	}

	public function show_unit_MELDM($where="") {
		return $this->db->query('select * from user where unit like "MELDM%" order by skor desc');
	}

	public function show_unit_PERDM($where="") {
		return $this->db->query('select * from user where unit like "MELDM%" order by skor desc');
	}

	// JKTDQ
	public function show_unit_JKTRN($where="") {
		return $this->db->query('select * from user where unit like "JKTRN%" order by skor desc');
	}

	public function show_unit_JKTDB($where="") {
		return $this->db->query('select * from user where unit like "JKTDB%" order by skor desc');
	}

	public function show_unit_JKTMX($where="") {
		return $this->db->query('select * from user where unit like "JKTMX%" order by skor desc');
	}

	// JKTDN
	public function show_unit_JKTCM($where="") {
		return $this->db->query('select * from user where unit like "JKTCM%" order by skor desc');
	}

	public function show_unit_JKTRZ($where="") {
		return $this->db->query('select * from user where unit like "JKTRZ%" order by skor desc');
	}

	public function show_unit_JKTEC($where="") {
		return $this->db->query('select * from user where unit like "JKTEC%" order by skor desc');
	}

	public function show_unit_JKTDU($where="") {
		return $this->db->query('select * from user where unit like "JKTDU%" order by skor desc');
	}

	public function show_unit_JKTNL($where="") {
		return $this->db->query('select * from user where unit like "JKTNL%" order by skor desc');
	}

	public function show_unit_JKTNH($where="") {
		return $this->db->query('select * from user where unit like "JKTNH%" order by skor desc');
	}

	public function show_unit_JKTCD($where="") {
		return $this->db->query('select * from user where unit like "JKTCD%" order by skor desc');
	}

	public function show_unit_MESDM($where="") {
		return $this->db->query('select * from user where unit like "MESDM%" order by skor desc');
	}

	public function show_unit_BTJDM($where="") {
		return $this->db->query('select * from user where unit like "BTJDM%" order by skor desc');
	}

	public function show_unit_PDGDM($where="") {
		return $this->db->query('select * from user where unit like "PDGDM%" order by skor desc');
	}

	public function show_unit_BTHDM($where="") {
		return $this->db->query('select * from user where unit like "BTHDM%" order by skor desc');
	}

	public function show_unit_PKUDM($where="") {
		return $this->db->query('select * from user where unit like "PKUDM%" order by skor desc');
	}

	public function show_unit_PLMDM($where="") {
		return $this->db->query('select * from user where unit like "PLMDM%" order by skor desc');
	}

	public function show_unit_TKGDM($where="") {
		return $this->db->query('select * from user where unit like "TKGDM%" order by skor desc');
	}

	public function show_unit_DJBDM($where="") {
		return $this->db->query('select * from user where unit like "DJBDM%" order by skor desc');
	}

	public function show_unit_PGKDM($where="") {
		return $this->db->query('select * from user where unit like "PGKDM%" order by skor desc');
	}

	public function show_unit_TNJDM($where="") {
		return $this->db->query('select * from user where unit like "TNJDM%" order by skor desc');
	}

	public function show_unit_TJQDM($where="") {
		return $this->db->query('select * from user where unit like "TJQDM%" order by skor desc');
	}

	public function show_unit_BKSDM($where="") {
		return $this->db->query('select * from user where unit like "BKSDM%" order by skor desc');
	}

	public function show_unit_FLZDM($where="") {
		return $this->db->query('select * from user where unit like "FLZDM%" order by skor desc');
	}

	public function show_unit_GNSDM($where="") {
		return $this->db->query('select * from user where unit like "GNSDM%" order by skor desc');
	}

	public function show_unit_LSWDM($where="") {
		return $this->db->query('select * from user where unit like "LSWDM%" order by skor desc');
	}

	public function show_unit_SBGDM($where="") {
		return $this->db->query('select * from user where unit like "SBGDM%" order by skor desc');
	}

	public function show_unit_DTBDM($where="") {
		return $this->db->query('select * from user where unit like "DTBDM%" order by skor desc');
	}

	public function show_unit_JKTDM($where="") {
		return $this->db->query('select * from user where unit like "JKTDM%" order by skor desc');
	}

	public function show_unit_BDODM($where="") {
		return $this->db->query('select * from user where unit like "BDODM%" order by skor desc');
	}

	public function show_unit_SUBDM($where="") {
		return $this->db->query('select * from user where unit like "SUBDM%" order by skor desc');
	}

	public function show_unit_DPSDM($where="") {
		return $this->db->query('select * from user where unit like "DPSDM%" order by skor desc');
	}

	public function show_unit_LOPDM($where="") {
		return $this->db->query('select * from user where unit like "LOPDM%" order by skor desc');
	}

	public function show_unit_YOGDM($where="") {
		return $this->db->query('select * from user where unit like "YOGDM%" order by skor desc');
	}

	public function show_unit_SOCDM($where="") {
		return $this->db->query('select * from user where unit like "YOGDM%" order by skor desc');
	}

	public function show_unit_SRGDM($where="") {
		return $this->db->query('select * from user where unit like "YOGDM%" order by skor desc');
	}

	public function show_unit_MLGDM($where="") {
		return $this->db->query('select * from user where unit like "MLGDM%" order by skor desc');
	}

	public function show_unit_KOEDM($where="") {
		return $this->db->query('select * from user where unit like "KOEDM%" order by skor desc');
	}

	public function show_unit_LBJDM($where="") {
		return $this->db->query('select * from user where unit like "LBJDM%" order by skor desc');
	}

	public function show_unit_TMCDM($where="") {
		return $this->db->query('select * from user where unit like "TMCDM%" order by skor desc');
	}

	public function show_unit_ENEDM($where="") {
		return $this->db->query('select * from user where unit like "ENEDM%" order by skor desc');
	}

	public function show_unit_BMUDM($where="") {
		return $this->db->query('select * from user where unit like "BMUDM%" order by skor desc');
	}

	public function show_unit_JBBDM($where="") {
		return $this->db->query('select * from user where unit like "JBBDM%" order by skor desc');
	}

	public function show_unit_BWXDM($where="") {
		return $this->db->query('select * from user where unit like "BWXDM%" order by skor desc');
	}

	public function show_unit_SWQDM($where="") {
		return $this->db->query('select * from user where unit like "SWQDM%" order by skor desc');
	}

	public function show_unit_MOFDM($where="") {
		return $this->db->query('select * from user where unit like "MOFDM%" order by skor desc');
	}

	public function show_unit_UPGDM($where="") {
		return $this->db->query('select * from user where unit like "UPFDM%" order by skor desc');
	}

	public function show_unit_BDJDM($where="") {
		return $this->db->query('select * from user where unit like "BDJDM%" order by skor desc');
	}

	public function show_unit_MDCDM($where="") {
		return $this->db->query('select * from user where unit like "MDCDM%" order by skor desc');
	}

	public function show_unit_BPNDM($where="") {
		return $this->db->query('select * from user where unit like "BPNDM%" order by skor desc');
	}

	public function show_unit_BIKDM($where="") {
		return $this->db->query('select * from user where unit like "BIKDM%" order by skor desc');
	}

	public function show_unit_PNKDM($where="") {
		return $this->db->query('select * from user where unit like "PNKDM%" order by skor desc');
	}

	public function show_unit_PKYDM($where="") {
		return $this->db->query('select * from user where unit like "PYKDM%" order by skor desc');
	}

	public function show_unit_DJJDM($where="") {
		return $this->db->query('select * from user where unit like "DJJDM%" order by skor desc');
	}

	public function show_unit_TIMDM($where="") {
		return $this->db->query('select * from user where unit like "TIMDM%" order by skor desc');
	}

	public function show_unit_TTEDM($where="") {
		return $this->db->query('select * from user where unit like "TTEDM%" order by skor desc');
	}

	public function show_unit_PLWDM($where="") {
		return $this->db->query('select * from user where unit like "PLWDM%" order by skor desc');
	}

	public function show_unit_KDIDM($where="") {
		return $this->db->query('select * from user where unit like "KDIDM%" order by skor desc');
	}

	public function show_unit_GTODM($where="") {
		return $this->db->query('select * from user where unit like "GTODM%" order by skor desc');
	}

	public function show_unit_AMQDM($where="") {
		return $this->db->query('select * from user where unit like "AMQDM%" order by skor desc');
	}

	public function show_unit_MJUDM($where="") {
		return $this->db->query('select * from user where unit like "MJUDM%" order by skor desc');
	}

	public function show_unit_TRKDM($where="") {
		return $this->db->query('select * from user where unit like "TRKDM%" order by skor desc');
	}

	public function show_unit_BEJDM($where="") {
		return $this->db->query('select * from user where unit like "BEJDM%" order by skor desc');
	}

	public function show_unit_SOQDM($where="") {
		return $this->db->query('select * from user where unit like "SOQDM%" order by skor desc');
	}

	public function show_unit_MKWDM($where="") {
		return $this->db->query('select * from user where unit like "MKWDM%" order by skor desc');
	}

	public function show_unit_MKQDM($where="") {
		return $this->db->query('select * from user where unit like "MKQDM%" order by skor desc');
	}

	public function show_unit_LUWDM($where="") {
		return $this->db->query('select * from user where unit like "LUWDM%" order by skor desc');
	}

	public function show_unit_BUWDM($where="") {
		return $this->db->query('select * from user where unit like "BUWDM%" order by skor desc');
	}

	public function show_unit_LUVDM($where="") {
		return $this->db->query('select * from user where unit like "LUVDM%" order by skor desc');
	}

	public function show_unit_SXKDM($where="") {
		return $this->db->query('select * from user where unit like "SXKDM%" order by skor desc');
	}

	public function show_unit_PSUDM($where="") {
		return $this->db->query('select * from user where unit like "PSUDM%" order by skor desc');
	}

	public function show_unit_KTGDM($where="") {
		return $this->db->query('select * from user where unit like "KTGDM%" order by skor desc');
	}

	public function show_unit_PKNDM($where="") {
		return $this->db->query('select * from user where unit like "PKNDM%" order by skor desc');
	}

}
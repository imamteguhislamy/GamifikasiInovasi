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

		// JKTDG
		$data['JKTGC'] = $this->model_admin->show_unit_JKTGC()->result();
		$data['JKTGO'] = $this->model_admin->show_unit_JKTGO()->result();
		$data['JKTGI'] = $this->model_admin->show_unit_JKTGI()->result();
		$data['LONDM'] = $this->model_admin->show_unit_LONDM()->result();
		$data['JEDDM'] = $this->model_admin->show_unit_JEDDM()->result();
		$data['AMSDM'] = $this->model_admin->show_unit_AMSDM()->result();
		$data['SINDM'] = $this->model_admin->show_unit_SINDM()->result();
		$data['KULDM'] = $this->model_admin->show_unit_KULDM()->result();
		$data['BKKDM'] = $this->model_admin->show_unit_BKKDM()->result();
		$data['TYODM'] = $this->model_admin->show_unit_TYODM()->result();
		$data['OSADM'] = $this->model_admin->show_unit_OSADM()->result();
		$data['NGODM'] = $this->model_admin->show_unit_NGODM()->result();
		$data['SELDM'] = $this->model_admin->show_unit_SELDM()->result();
		$data['SHADM'] = $this->model_admin->show_unit_SHADM()->result();
		$data['HKGDM'] = $this->model_admin->show_unit_HKGDM()->result();
		$data['BJSDM'] = $this->model_admin->show_unit_HKGDM()->result();
		$data['CANDM'] = $this->model_admin->show_unit_CANDM()->result();
		$data['SYDDM'] = $this->model_admin->show_unit_SYDDM()->result();
		$data['MELDM'] = $this->model_admin->show_unit_MELDM()->result();
		$data['PERDM'] = $this->model_admin->show_unit_PERDM()->result();

		// JKTRN
		$data['JKTRN'] = $this->model_admin->show_unit_JKTRN()->result();
		$data['JKTRG'] = $this->model_admin->show_unit_JKTRG()->result();

		// JKTDN
		$data['JKTCM'] = $this->model_admin->show_unit_JKTCM()->result();
		$data['JKTRZ'] = $this->model_admin->show_unit_JKTRZ()->result();
		$data['JKTEC'] = $this->model_admin->show_unit_JKTRZ()->result();
		$data['JKTMX'] = $this->model_admin->show_unit_JKTMX()->result();
		$data['JKTNL'] = $this->model_admin->show_unit_JKTNL()->result();
		$data['JKTNH'] = $this->model_admin->show_unit_JKTNH()->result();
		$data['JKTCD'] = $this->model_admin->show_unit_JKTCD()->result();
		$data['MESDM'] = $this->model_admin->show_unit_MESDM()->result();
		$data['BTJDM'] = $this->model_admin->show_unit_BTHDM()->result();
		$data['PDGDM'] = $this->model_admin->show_unit_PDGDM()->result();
		$data['BTHDM'] = $this->model_admin->show_unit_BTHDM()->result();
		$data['PKUDM'] = $this->model_admin->show_unit_PKUDM()->result();
		$data['PLMDM'] = $this->model_admin->show_unit_PLMDM()->result();
		$data['TKGDM'] = $this->model_admin->show_unit_TKGDM()->result();
		$data['DJBDM'] = $this->model_admin->show_unit_DJBDM()->result();
		$data['PGKDM'] = $this->model_admin->show_unit_PGKDM()->result();
		$data['TNJDM'] = $this->model_admin->show_unit_TNJDM()->result();
		$data['TJQDM'] = $this->model_admin->show_unit_TJQDM()->result();
		$data['BKSDM'] = $this->model_admin->show_unit_BKSDM()->result();
		$data['FLZDM'] = $this->model_admin->show_unit_FLZDM()->result();
		$data['GNSDM'] = $this->model_admin->show_unit_GNSDM()->result();
		$data['LSWDM'] = $this->model_admin->show_unit_LSWDM()->result();
		$data['SBGDM'] = $this->model_admin->show_unit_SBGDM()->result();
		$data['DTBDM'] = $this->model_admin->show_unit_DTBDM()->result();
		$data['JKTDM'] = $this->model_admin->show_unit_JKTDM()->result();
		$data['BDODM'] = $this->model_admin->show_unit_BDODM()->result();
		$data['SUBDM'] = $this->model_admin->show_unit_SUBDM()->result();
		$data['DPSDM'] = $this->model_admin->show_unit_DPSDM()->result();
		$data['LOPDM'] = $this->model_admin->show_unit_LOPDM()->result();
		$data['YOGDM'] = $this->model_admin->show_unit_YOGDM()->result();
		$data['SOCDM'] = $this->model_admin->show_unit_SOCDM()->result();
		$data['SRGDM'] = $this->model_admin->show_unit_SRGDM()->result();
		$data['MLGDM'] = $this->model_admin->show_unit_MLGDM()->result();
		$data['KOEDM'] = $this->model_admin->show_unit_KOEDM()->result();
		$data['LBJDM'] = $this->model_admin->show_unit_LBJDM()->result();
		$data['TMCDM'] = $this->model_admin->show_unit_TMCDM()->result();
		$data['ENEDM'] = $this->model_admin->show_unit_ENEDM()->result();
		$data['BMUDM'] = $this->model_admin->show_unit_BMUDM()->result();
		$data['JBBDM'] = $this->model_admin->show_unit_JBBDM()->result();
		$data['BWXDM'] = $this->model_admin->show_unit_BWXDM()->result();
		$data['SWQDM'] = $this->model_admin->show_unit_SWQDM()->result();
		$data['MOFDM'] = $this->model_admin->show_unit_MOFDM()->result();
		$data['UPGDM'] = $this->model_admin->show_unit_UPGDM()->result();
		$data['BDJDM'] = $this->model_admin->show_unit_BDJDM()->result();
		$data['MDCDM'] = $this->model_admin->show_unit_MDCDM()->result();
		$data['BPNDM'] = $this->model_admin->show_unit_BPNDM()->result();
		$data['BIKDM'] = $this->model_admin->show_unit_BIKDM()->result();
		$data['PNKDM'] = $this->model_admin->show_unit_PNKDM()->result();
		$data['PKYDM'] = $this->model_admin->show_unit_PKYDM()->result();
		$data['DJJDM'] = $this->model_admin->show_unit_DJJDM()->result();
		$data['TIMDM'] = $this->model_admin->show_unit_TIMDM()->result();
		$data['TTEDM'] = $this->model_admin->show_unit_TTEDM()->result();
		$data['PLWDM'] = $this->model_admin->show_unit_PLWDM()->result();
		$data['KDIDM'] = $this->model_admin->show_unit_KDIDM()->result();
		$data['GTODM'] = $this->model_admin->show_unit_GTODM()->result();
		$data['AMQDM'] = $this->model_admin->show_unit_AMQDM()->result();
		$data['MJUDM'] = $this->model_admin->show_unit_MJUDM()->result();
		$data['TRKDM'] = $this->model_admin->show_unit_TRKDM()->result();
		$data['BEJDM'] = $this->model_admin->show_unit_BEJDM()->result();
		$data['SOQDM'] = $this->model_admin->show_unit_SOQDM()->result();
		$data['MKWDM'] = $this->model_admin->show_unit_MKWDM()->result();
		$data['MKQDM'] = $this->model_admin->show_unit_MKQDM()->result();
		$data['LUWDM'] = $this->model_admin->show_unit_LUWDM()->result();
		$data['BUWDM'] = $this->model_admin->show_unit_BUWDM()->result();
		$data['LUVDM'] = $this->model_admin->show_unit_LUVDM()->result();
		$data['SXKDM'] = $this->model_admin->show_unit_SXKDM()->result();
		$data['PSUDM'] = $this->model_admin->show_unit_PSUDM()->result();
		$data['KTGDM'] = $this->model_admin->show_unit_KTGDM()->result();
		$data['PKNDM'] = $this->model_admin->show_unit_PKNDM()->result();

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/dashboard', $data);
	}
}
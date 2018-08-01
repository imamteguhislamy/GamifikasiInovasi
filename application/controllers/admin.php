<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_user');
	}
	
	public function index()
	{
		$data['user'] = $this->model_user->tampil_data()->result();
		$this->load->view('headeradmin');
		$this->load->view('sidebaradmin');
		$this->load->view('tables', $data);
	}

	public function edit($nopeg){
		$krywn = $this->model_user->GetKrywn("where nopeg = '$nopeg'");
		$data = array(
			"nopeg"=>$krywn[0]['nopeg'],
			"nama"=>$krywn[0]['nama'],
			"unit"=>$krywn[0]['unit'],
			"password"=>$krywn[0]['password']
		);
		
		$this->load->view('headeradmin');
		$this->load->view('sidebaradmin');
		$this->load->view('edit',$data);
	}

	public function update() {
        $nopeg = $_POST['nopeg'];
        $nama = $_POST['nama'];
        $unit = $_POST['unit'];
        $password = $_POST['password'];
        $data_update = array(
            'nama' => $nama,
			'unit' => $unit,
            'password' => $password
        );
        $where = array('nopeg'=>$nopeg);
        $upd = $this->model_user->edit_data('user', $data_update, $where);
        if($upd>=1) {
            redirect("admin/index");
        }
    }

    public function delete($nopeg) {
    	$where = array('nopeg' => $nopeg);
    	$del = $this->model_user->delete('user', $where);
    	if ($del>=1) {
    		redirect("admin/index"); 	
    	}
    }

}
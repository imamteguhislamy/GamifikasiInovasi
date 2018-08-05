<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class materi extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_admin');
	}
	
	public function index() {
		$data['materi'] = $this->model_admin->data_materi();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/materi/tabel', $data);
	}

	public function tambah() {
		$data = array(
			'judul' => $this->input->post('judul'),
			'link_video' => $this->input->post('link_video')
			);
		$this->model_admin->tambah_materi($data);
		$this->index();
	}

	public function edit($id){
		$materi = $this->model_admin->show_materi("where id = '$id'");
		$data = array(
			"id"=>$materi[0]['id'],
			"judul"=>$materi[0]['judul'],
			"link_video"=>$materi[0]['link_video'],
			//"gambar"=>$materi[0]['gambar']
		);
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/materi/edit', $data);
	}

	public function update() {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $link_video = $_POST['link_video'];
        //$gambar = $_POST['gambar'];
        
        $data_update = array(
            'judul' => $judul,
            'link_video' => $link_video
			//'gambar' => $gambar,
        );
        $where = array('id'=>$id);
        $upd = $this->model_admin->edit_materi('materi', $data_update, $where);
        if($upd>=1) {
            redirect("admin/materi");
        }
    }

	public function hapus($id) {
    	$where = array('id' => $id);
    	$del = $this->model_admin->hapus_materi('materi', $where);
    	if ($del>=1) {
    		redirect("admin/materi"); 	
    	}
    }
}
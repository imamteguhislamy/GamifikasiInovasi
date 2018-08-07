<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class materi extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_admin');
		$this->load->library('upload');
        $this->load->helper("file");
        $this->load->helper(array('form'));
	}
	
	public function index() {
		$data['materi'] = $this->model_admin->data_materi();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/materi/tabel', $data);
	}


	public function tambah() {
		if(basename($_FILES["gambar"]["name"])==NULL){
			$picture = 'no-image.png';
			$data = array(
				'judul' => $this->input->post('judul'),
				'link_video' => $this->input->post('link_video'),
				'gambar' => $picture
			);
			$this->model_admin->tambah_materi($data);
			$this->index();
		} else {
			$picture =  basename($_FILES["gambar"]["name"]);
			$data = array(
				'judul' => $this->input->post('judul'),
				'link_video' => $this->input->post('link_video'),
				'gambar' => $picture
			);
			$config['upload_path']          = './images/materi/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 100000;
	 
			// load library upload
			$this->upload->initialize($config);
	        if (!$this->upload->do_upload('gambar')) {
	            $error = $this->upload->display_errors();
	            // menampilkan pesan error
	            print_r($error);
	        } else {
	           	$this->model_admin->tambah_materi($data);
				$this->index();
	        }
		}

		
	}

	public function edit($id){
		$materi = $this->model_admin->show_materi("where id = '$id'");
		$data = array(
			"id"=>$materi[0]['id'],
			"judul"=>$materi[0]['judul'],
			"link_video"=>$materi[0]['link_video'],
			"gambar"=>$materi[0]['gambar']
		);
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/materi/edit', $data);
	}

	public function update() {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $link_video = $_POST['link_video'];
        $gambar = $_POST['gambar'];

        if($gambar == NULL) {
        	$data_update = array(
	            'judul' => $judul,
	            'link_video' => $link_video
        	);
        } else { 
        	$data_update = array(
	            'judul' => $judul,
	            'link_video' => $link_video,
				'gambar' => $gambar
	        );
        }
       
        $where = array('id'=>$id);
        $upd = $this->model_admin->edit_materi('materi', $data_update, $where);
        if($upd>=1) {
            redirect("admin/materi");
        }
    }

	public function hapus($id) {
    	$where = array('id' => $id);
    	$whereS = array('id_materi' => $id);
    	$del = $this->model_admin->hapus_materi('materi', $where);
    	$delSoal = $this->model_admin->hapus_soal('quiz', $whereS);
    	if ($del>=1) {
    		redirect("admin/materi"); 	
    	}
    }
}
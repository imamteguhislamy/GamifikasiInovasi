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

//============================================================================== TAMBAH
	public function tambah() {

		//=====================================TAMBAH TANPA FILE

		if(basename($_FILES["gambar"]["name"]) == NULL && basename($_FILES["pdf"]["name"]) == NULL && basename($_FILES["video"]["name"]) == NULL){
			$picture = 'no-image.png';
			$data = array(
				'judul' => $this->input->post('judul'),
				'jmlSoal' => $this->input->post('jmlSoal'),
				'tipe' => $this->input->post('tipe'),				
				'gambar' => $picture
			);
	           	$this->model_admin->tambah_materi($data);
				$this->index();
		} 

		//=====================================TAMBAH DENGAN FILE PDF TANPA VIDEO DAN GAMBAR

		if(basename($_FILES["gambar"]["name"]) == NULL && basename($_FILES["video"]["name"]) == NULL){
			$picture = 'no-image.png';
			$pdf = basename($_FILES["pdf"]["name"]);
			$data = array(
				'judul' => $this->input->post('judul'),
				'jmlSoal' => $this->input->post('jmlSoal'),
				'tipe' => $this->input->post('tipe'),
				'pdf' => $pdf,
				'gambar' => $picture
			);
			$config['upload_path']          = './course-source/documents/';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 10000000000;
	 
			// load library upload
			$this->upload->initialize($config);
	        if (!$this->upload->do_upload('pdf')) {
	            $error = $this->upload->display_errors();
	            // menampilkan pesan error
	            print_r($error);
	        } else {
	           	$this->model_admin->tambah_materi($data);
				$this->index();
	        }
		} 

		//=====================================TAMBAH DENGAN FILE PDF DAN GAMBAR TANPA VIDEO 

		if(basename($_FILES["video"]["name"]) == NULL){
			$picture = basename($_FILES["gambar"]["name"]);
			$pdf = basename($_FILES["pdf"]["name"]);
			$data = array(
				'judul' => $this->input->post('judul'),
				'jmlSoal' => $this->input->post('jmlSoal'),
				'tipe' => $this->input->post('tipe'),
				'pdf' => $pdf,
				'gambar' => $picture
			);
			$config['upload_path']          = './course-source/documents/';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 10000000000;
	 
			// load library upload
			$this->upload->initialize($config);
	        if (!$this->upload->do_upload('pdf')) {
	            $error = $this->upload->display_errors();
	            // menampilkan pesan error
	            print_r($error);
	        } else {
	        	unset($config);
	        	$config['upload_path']          = './images/materi/';
				$config['allowed_types']        = 'jpg|png';
				$config['max_size']             = 100000;
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

		//=====================================TAMBAH DENGAN FILE VIDEO DAN GAMBAR TANPA PDF 

		if(basename($_FILES["pdf"]["name"]) == NULL){
			$picture = basename($_FILES["gambar"]["name"]);
			$video = basename($_FILES["video"]["name"]);
			$data = array(
				'judul' => $this->input->post('judul'),
				'jmlSoal' => $this->input->post('jmlSoal'),
				'tipe' => $this->input->post('tipe'),
				'link_video' => $video,				
				'gambar' => $picture
			);
			$config['upload_path']          = './videos/';
			$config['allowed_types']        = 'mp4';
			$config['max_size']             = 10000000000;
	 
			// load library upload
			$this->upload->initialize($config);
	        if (!$this->upload->do_upload('video')) {
	            $error = $this->upload->display_errors();
	            // menampilkan pesan error
	            print_r($error);
	        } else {
	        	unset($config);
	        	$config['upload_path']          = './images/materi/';
				$config['allowed_types']        = 'jpg|png';
				$config['max_size']             = 100000;
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

		//=====================================TAMBAH DENGAN FILE VIDEO DAN PDF TANPA GAMBAR 

		// if(basename($_FILES["gambar"]["name"]) == NULL){
		// 	$picture = 'no-image.png';
		// 	$video = basename($_FILES["video"]["name"]);
		// 	$pdf = basename($_FILES["pdf"]["name"]);
		// 	$data = array(
		// 		'judul' => $this->input->post('judul'),
		// 		'jmlSoal' => $this->input->post('jmlSoal'),
		// 		'tipe' => $this->input->post('tipe'),
		// 		'link_video' => $video,		
		// 		'pdf' => $pdf,			
		// 		'gambar' => $picture
		// 	);
		// 	$config['upload_path']          = './videos/';
		// 	$config['allowed_types']        = 'mp4';
		// 	$config['max_size']             = 10000000000;
	 
		// 	// load library upload
		// 	$this->upload->initialize($config);
	 //        if (!$this->upload->do_upload('video')) {
	 //            $error = $this->upload->display_errors();
	 //            // menampilkan pesan error
	 //            print_r($error);
	 //        } else {
	 //        	unset($config);
	 //        	$config['upload_path']          = './course-source/documents/';
		// 		$config['allowed_types']        = 'pdf';
		// 		$config['max_size']             = 10000000;
		// 		$this->upload->initialize($config);
		// 		if (!$this->upload->do_upload('pdf')) {
		//             $error = $this->upload->display_errors();
		//             // menampilkan pesan error
		//             print_r($error);		           	
		// 		} else {
		// 			$this->model_admin->tambah_materi($data);
		// 			$this->index();
		// 		}
	 //        }
		// } 

		//======================================TAMBAH TANPA PDF DAN VIDEO DENGAN GAMBAR 

		if(basename($_FILES["pdf"]["name"])==NULL && basename($_FILES["video"]["name"]) == NULL){			
			$picture = basename($_FILES["gambar"]["name"]);			
			$data = array(
				'judul' => $this->input->post('judul'),
				'jmlSoal' => $this->input->post('jmlSoal'),
				'tipe' => $this->input->post('tipe'),
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

	    //======================================TAMBAH TANPA PDF DAN GAMBAR DENGAN VIDEO 

		if(basename($_FILES["pdf"]["name"])==NULL && basename($_FILES["gambar"]["name"]) == NULL){			
			$picture = 'no-image.png';		
			$data = array(
				'judul' => $this->input->post('judul'),
				'jmlSoal' => $this->input->post('jmlSoal'),
				'tipe' => $this->input->post('tipe'),
				'link_video' => basename($_FILES["video"]["name"]),
				'gambar' => $picture
			);
			$config['upload_path']          = './videos/';
			$config['allowed_types']        = 'mp4|avi|3gp|mkv';
			$config['max_size']             = 10000000000000000;
	 
			// load library upload
			$this->upload->initialize($config);
	        if (!$this->upload->do_upload('video')) {
	            $error = $this->upload->display_errors();
	            // menampilkan pesan error
	            print_r($error);
	        } else {
	           	$this->model_admin->tambah_materi($data);
				$this->index();
	        }
	    } 

	    //===========================================TAMBAH DENGAN SEMUA FILE

	//     else {
	// 		$picture = basename($_FILES["gambar"]["name"]);
	// 		$pdf = basename($_FILES["pdf"]["name"]);
	// 		$video = basename($_FILES["video"]["name"]);
	// 		$data = array(
	// 			'judul' => $this->input->post('judul'),
	// 			'jmlSoal' => $this->input->post('jmlSoal'),
	// 			'tipe' => $this->input->post('tipe'),
	// 			'link_video' => $video,
	// 			'pdf' => $pdf,
	// 			'gambar' => $picture
	// 		);
	// 		$config['upload_path']          = './images/materi/';
	// 		$config['allowed_types']        = 'jpg|png';
	// 		$config['max_size']             = 100000;
	 
	// 		// load library upload
	// 		$this->upload->initialize($config);
	//         if (!$this->upload->do_upload('gambar')) {
	//             $error = $this->upload->display_errors();
	//             // menampilkan pesan error tidak bisa upload gambar
	//             print_r($error);
	//         } else if ($this->upload->do_upload('gambar')){
	//         	unset($config);
	//         	$config['upload_path']          = './course-source/documents/';
	// 			$config['allowed_types']        = 'pdf';
	// 			$config['max_size']             = 10000000;
	// 			$this->upload->initialize($config);
	// 			if (!$this->upload->do_upload('pdf')) {
	// 	            $error = $this->upload->display_errors();
	// 	            // menampilkan pesan error tidak bisa upload pdf
	// 	            print_r($error);
	// 	        	} else {
	// 	        		unset($config);
	//         			$config['upload_path']          = './videos/';
	// 					$config['allowed_types']        = 'mp4|3gp|mkv|avi';
	// 					$config['max_size']             = 1000000000;
	// 					$this->upload->initialize($config);
	// 					if(!$this->upload->do_upload('video')){
	// 						$error = $this->upload->display_errors();
	// 	            		// menampilkan pesan error tidak bisa upload video
	// 	            		print_r($error);
	// 					} else {
	// 			           	$this->model_admin->tambah_materi($data);
	// 						$this->index();
	// 	        	}
	// 		}		
	// 	}
	// }
}
	
//============================================================================EDIT

	public function edit($id){
		$materi = $this->model_admin->show_materi("where id = '$id'");
		$data = array(
			"id"=>$materi[0]['id'],
			"judul"=>$materi[0]['judul'],
			'jmlSoal' => $materi[0]['jmlSoal'],
			"tipe"=>$materi[0]['tipe'],
			"link_video"=>$materi[0]['link_video'],
			"pdf"=>$materi[0]['pdf'],
			"gambar"=>$materi[0]['gambar']
		);
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/materi/edit', $data);
	}

//==========================================================================UPDATE

	public function update() {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $jmlSoal = $_POST['jmlSoal'];
        $tipe = $_POST['tipe'];
        $link_video = basename($_FILES["video"]["name"]);
        $gambar =  basename($_FILES["gambar"]["name"]);
		$pdf = basename($_FILES["pdf"]["name"]);

		//=============================EDIT TIDAK ADA SEMUA

        if($pdf == NULL && $gambar == NULL && $link_video == NULL) {
        	$data_update = array(
	            'judul' => $judul,
	            'jmlSoal' => $jmlSoal,
	            'tipe' => $tipe,
        	);
	           	$where = array('id'=>$id);
        		$upd = $this->model_admin->edit_materi('materi', $data_update, $where);
        		if($upd>=1) {
            	redirect("admin/materi");
        		}	
	    }

	    //=============================EDIT PDF TANPA GAMBAR DAN VIDEO

	    if($gambar == NULL && $link_video == NULL) {
        	$data_update = array(
	            'judul' => $judul,
	            'jmlSoal' => $jmlSoal,
	            'tipe' => $tipe,
	            'pdf' => $pdf
        	);
        	$config['upload_path']          = './course-source/documents/';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 10000000000;
	 
			// load library upload
			$this->upload->initialize($config);
	        if (!$this->upload->do_upload('pdf')) {
	            $error = $this->upload->display_errors();
	            // menampilkan pesan error
	            print_r($error);
	        } else {
	           	$where = array('id'=>$id);
        		$upd = $this->model_admin->edit_materi('materi', $data_update, $where);
        		if($upd>=1) {
            	redirect("admin/materi");
        		}	
	        }
        }

        //=============================EDIT VIDEO TANPA GAMBAR DAN PDF

	    if($gambar == NULL && $pdf == NULL) {
        	$data_update = array(
	            'judul' => $judul,
	            'jmlSoal' => $jmlSoal,
	            'tipe' => $tipe,
	            'link_video' => $link_video
        	);
        	$config['upload_path']          = './videos/';
			$config['allowed_types']        = 'mp4|avi';
			$config['max_size']             = 10000000000000;
	 
			// load library upload
			$this->upload->initialize($config);
	        if (!$this->upload->do_upload('video')) {
	            $error = $this->upload->display_errors();
	            // menampilkan pesan error
	            print_r($error);
	        } else {
	           	$where = array('id'=>$id);
        		$upd = $this->model_admin->edit_materi('materi', $data_update, $where);
        		if($upd>=1) {
            	redirect("admin/materi");
        		}	
	        }
        }

        //==============================EDIT GAMBAR TANPA PDF DAN VIDEO

        if($pdf == NULL && $link_video == NULL) {
        	$data_update = array(
	            'judul' => $judul,
	            'jmlSoal' => $jmlSoal,
	            'tipe' => $tipe,
	            'gambar' => $gambar
        	);
        	$config['upload_path']          = './images/materi/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 10000000000;
	 
			// load library upload
			$this->upload->initialize($config);
	        if (!$this->upload->do_upload('gambar')) {
	            $error = $this->upload->display_errors();
	            // menampilkan pesan error
	            print_r($error);
	        } else {
	           	$where = array('id'=>$id);
        		$upd = $this->model_admin->edit_materi('materi', $data_update, $where);
        		if($upd>=1) {
            	redirect("admin/materi");
        		}	
	        }
	    }

	    //=================================EDIT PDF DAN GAMBAR TANPA VIDEO

	    if ($link_video == NULL){ 
        	$data_update = array(
	            'judul' => $judul,
	            'jmlSoal' => $jmlSoal,
	            'tipe' => $tipe,
	            'pdf' => $pdf,
				'gambar' => $gambar
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
	        	unset($config);
	        	$config['upload_path']          = './course-source/documents/';
				$config['allowed_types']        = 'pdf';
				$config['max_size']             = 10000000;
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('pdf')) {
	            	$error = $this->upload->display_errors();
		            // menampilkan pesan error
		            print_r($error);
		        	} else {
		           	$where = array('id'=>$id);
	        		$upd = $this->model_admin->edit_materi('materi', $data_update, $where);
	        			if($upd>=1) {
	            			redirect("admin/materi");
	        		}
		        }
			}
        }

        //=================================EDIT VIDEO DAN GAMBAR TANPA PDF

	    if ($pdf == NULL){ 
        	$data_update = array(
	            'judul' => $judul,
	            'jmlSoal' => $jmlSoal,
	            'tipe' => $tipe,
	            'link_video' => $link_video,
				'gambar' => $gambar
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
	        	unset($config);
	        	$config['upload_path']          = './videos/';
				$config['allowed_types']        = 'mp4|3gp|avi';
				$config['max_size']             = 1000000000;
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('video')) {
	            	$error = $this->upload->display_errors();
		            // menampilkan pesan error
		            print_r($error);
		        	} else {
		           	$where = array('id'=>$id);
	        		$upd = $this->model_admin->edit_materi('materi', $data_update, $where);
	        			if($upd>=1) {
	            			redirect("admin/materi");
	        		}
		        }
			}
        }
       
        
    }

//=============================================================HAPUS

	public function hapus($id) {
    	$where = array('id' => $id);
    	$whereS = array('id_materi' => $id);
    	$del = $this->model_admin->hapus_materi('materi', $where);
    	$delSoal = $this->model_admin->hapus_soal('quiz', $whereS);
    	if ($del>=1) {
    		redirect("admin/materi"); 	
    	}
    }

    public function hapusQ($soal) {    	
    	$where = array('soal' => $soal);
    	$del = $this->model_admin->hapus_soal('quiz', $where);
    	if ($del>=1) {
    		redirect("admin/home/quiz/");
    	}
    }
}
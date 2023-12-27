<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    function __construct(){ 
        parent::__construct(); 
		$this->load->model('user'); 
		$this->load->model('belmawa');
		$this->load->model('daftar_bel');
		$this->load->model('komunitas');
		$this->load->model('daftar_kom'); 
		$this->load->model('webinar');
		$this->load->model('daftar_web'); 
		$this->load->model('mitra_webinar');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->library('upload');
    } 

	public function login(){
		
		// if(isset($_SESSION['checklogin'])){
		// 	redirect('dashboard_admin');
		// }
		// $check=$this->user->check_user($data['username'], $data['password']);
		// if($check){
		// 	#create session
        //     session_start();
        //     $_SESSION['username'] = $check['username'];
        //     $_SESSION['nama'] = $check['nama'];
        //     $_SESSION['prodi'] = $check['prodi'];
        //     $_SESSION['email'] = $check['email'];

		// 	$_SESSION['checklogin'] = true;
        //     $this->session->set_userdata('username', $data['username']);
        //     #redirect
        //     redirect('dashboard_user');
        // } 
		
		//echo password_hash("yani", PASSWORD_DEFAULT);
		$this->load->view('login');
	}

	public function logout(){
		$this->session->sess_destroy();
        redirect('login');
	}

	public function checklogin() {	
		//session_start();

		$data=$this->input->post();
        #Cek ke database
        $check=$this->user->check_user($data['username'], $data['password']);
		if($check){
			#create session
            session_start();
            $_SESSION['username'] = $check['username'];
            $_SESSION['nama'] = $check['nama'];
            $_SESSION['prodi'] = $check['prodi'];
            $_SESSION['email'] = $check['email'];

			$_SESSION['checklogin'] = true;
            $this->session->set_userdata('username', $data['username']);
            #redirect
            redirect('dashboard_user');
        } 

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			//session_start();
			//Mengambil data dari form
			$username = $_POST["username"];
			$password = $_POST["password"];
			
			$_SESSION['checklogin'] = true;
			//Cek username dan password
			if($username == "yani" || $username == "tian" && $password == "yani123" || $password == "tian123"){
				redirect ('dashboard_admin');
			} else {
				$this->session->set_flashdata('message', 
				'
				<div class="alert alert-danger pastel alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Username / NIM dan Password salah.
				</div>');
				$this->load->view('login');
			}
		}
	}

	public function change_pass(){
        $password = $this->input->post('password');
        $new_password = $this->input->post('password_baru');
        $new_password_2 = $this->input->post('rpw');

        if($password == NULL or $new_password == NULL or $new_password_2 == NULL){
            $this->session->set_flashdata('change_pass', 'data kosong');
            redirect('profile');
        }

        if($new_password != $new_password_2){
            $this->session->set_flashdata('change_pass', 'tidak sama');
            redirect('profile');
        }

        $data = array(
            'username' => $_SESSION['username']=$check['username'],
            'password' => $new_password
        );

        var_dump($data);
		$this->session->set_flashdata('message', 'Password behasil diubah');
		redirect('profile');
        // $this->user->update($data);
        // $this->session->set_flashdata('change_pass', 'sukses');
        // redirect('profile');
    }

// ===================================     ADMIN     ============================================
	public function dashboard_admin(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
		$this->load->view('admin/layout/header_db');
		$this->load->view('admin/layout/sidebar_db');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/layout/footer');
	}

	public function event_belmawa(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['belmawaArr']=$this->belmawa->get_belmawa();

		$this->load->view('admin/layout/header_event');
		$this->load->view('admin/layout/sidebar_eventbel');
		$this->load->view('admin/event/belmawa', $data);
		$this->load->view('admin/layout/footer');
	}

	public function save_bel(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$id_belmawa		= $this->input->post('id_belmawa');
		$nama_belmawa	= $this->input->post('nama_belmawa');
		$deskripsi		= $this->input->post('deskripsi');
		$tgl_pelaksanaan= $this->input->post('tgl_pelaksanaan');
		$batas			= $this->input->post('batas');
		$lampiran		= $_FILES['lampiran'];
		if ($lampiran=''){
		} else {
			$config['upload_path']		= './assets/lampiran';
			$config['allowed_types']	= 'gif|jpg|png|JPG|PNG|JPEG';

			$this->upload->initialize($config);
			#$this->load->library('upload', $config);
			if (!$this->upload->do_upload('lampiran')){
				$this->session->set_flashdata('error', 'Data Belmawa gagal ditambahkan');
				redirect ('event_belmawa');
			} else {
				$lampiran=$this->upload->data('file_name');
			}
		}

		if($batas >= $tgl_pelaksanaan){
			$this->session->set_flashdata('error_tgl', 'Batas pendaftaran tidak boleh melebihi waktu pelaksanaan!');
			redirect ('event_belmawa');
		}

		if($this->belmawa->is_idbelmawa_exists($id_belmawa)){
				$this->session->set_flashdata('error', 'Data Belmawa gagal ditambahkan');
				redirect('event_belmawa');
			}else{
				$data = array(
					'id_belmawa' 		=> $id_belmawa,
					'nama_belmawa' 		=> $nama_belmawa,
					'deskripsi'			=> $deskripsi,
					'tgl_pelaksanaan' 	=> $tgl_pelaksanaan,
					'lampiran' 			=> $lampiran,
					'batas' 			=> $batas
				);
				$this->db->insert('belmawa', $data);
				$this->session->set_flashdata('message', 'Data Belmawa berhasil ditambahkan');
				redirect('event_belmawa');
			}
	}

	public function update_bel($id_belmawa){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$config['upload_path']		= './assets/lampiran';
		$config['allowed_types']	= 'gif|jpg|png|JPG|PNG|JPEG';

		$this->upload->initialize($config);
			if ($this->upload->do_upload('lampiran')){

				//Upload file baru
				$namaLampiran = $this->upload->data('file_name');

				//Hapus file lama
				$belmawa = $this->belmawa->getBelmawaById($id_belmawa);
				unlink ('./assets/lampiran/' . $belmawa->lampiran);
			}

			if (empty($namaLampiran) && !empty($_POST['lampiranLama'])){
				//Memanggil file lama jika tidak diubah
				$namaLampiran = $_POST['lampiranLama'];
			}

		$data = array(
			'id_belmawa' 		=> $id_belmawa,
			'nama_belmawa' 		=> $this->input->post('nama_belmawa'),
			'deskripsi'			=> $this->input->post('deskripsi'),
			'tgl_pelaksanaan' 	=> $this->input->post('tgl_pelaksanaan'),
			'batas' 			=> $this->input->post('batas'),
			'lampiran' 			=> $namaLampiran,
		);

		//Update data
		$update=$this->belmawa->update_bel($id_belmawa, $data);
		$this->session->set_flashdata('message', 'Data Belmawa berhasil diubah');
		redirect('event_belmawa');
    }

	public function delete_bel($id_belmawa){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		//Cari gambar berdasarkan Id
		$belmawa = $this->belmawa->getbelmawaById($id_belmawa);
		//Hapus gambar
		unlink ('./assets/lampiran/' . $belmawa->lampiran);

        $data['belmawaArr']=$this->belmawa->delete_bel($id_belmawa);		
		$this->session->set_flashdata('message', 'Data Belmawa berhasil dihapus');
        redirect('event_belmawa');
	}

	public function event_komunitas(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['komunitasArr']=$this->komunitas->get_komunitas();
		$this->load->view('admin/layout/header_event');
		$this->load->view('admin/layout/sidebar_eventkom');
		$this->load->view('admin/event/komunitas', $data);
		$this->load->view('admin/layout/footer');
	}

	public function save_kom(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$id_kegiatan	= $this->input->post('id_kegiatan');
		$nama_kegiatan	= $this->input->post('nama_kegiatan');
		$nama_ukm		= $this->input->post('nama_ukm');
		$tgl_pelaksanaan= $this->input->post('tgl_pelaksanaan');
		$batas			= $this->input->post('batas');
		$lampiran		= $_FILES['lampiran'];
		if ($lampiran=''){
		} else {
			$config['upload_path']		= './assets/lampiran';
			$config['allowed_types']	= 'gif|jpg|png|JPG|PNG|JPEG';

			$this->upload->initialize($config);
			#$this->load->library('upload', $config);
			if (!$this->upload->do_upload('lampiran')){
				$this->session->set_flashdata('error_kom', 'Data Kegiatan gagal ditambahkan');
				redirect('event_komunitas');
			} else {
				$lampiran=$this->upload->data('file_name');
			}
		}

		if($batas >= $tgl_pelaksanaan){
			$this->session->set_flashdata('error_tgl', 'Batas pendaftaran tidak boleh melebihi waktu pelaksanaan!');
			redirect ('event_komunitas');
		}

		if($this->komunitas->is_idkomunitas_exists($id_kegiatan)){
				#tampilkan informasi berhasil
				$this->session->set_flashdata('error_kom', 'Data Kegiatan gagal ditambahkan');
				redirect('event_komunitas');
			}else{
				$data = array(
					'id_kegiatan' 		=> $id_kegiatan,
					'nama_kegiatan' 	=> $nama_kegiatan,
					'nama_ukm'			=> $nama_ukm,
					'tgl_pelaksanaan' 	=> $tgl_pelaksanaan,
					'lampiran' 			=> $lampiran,
					'batas' 			=> $batas
				);
				$this->db->insert('komunitas', $data);
				$this->session->set_flashdata('message', 'Data kegiatan berhasil ditambahkan');
				redirect('event_komunitas');
			}
	}

	public function update_kom($id_kegiatan){	
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$config['upload_path']		= './assets/lampiran';
		$config['allowed_types']	= 'gif|jpg|png|JPG|PNG|JPEG';

		$this->upload->initialize($config);
			if ($this->upload->do_upload('lampiran')){

				//Upload file baru
				$namaLampiran = $this->upload->data('file_name');

				//Hapus file lama
				$komunitas = $this->komunitas->getkomunitasById($id_kegiatan);
				unlink ('./assets/lampiran/' . $komunitas->lampiran);
			}

			if (empty($namaLampiran) && !empty($_POST['lampiranLama'])){
				//Memanggil file lama jika tidak diubah
				$namaLampiran = $_POST['lampiranLama'];
			}

		$data = array(
					'id_kegiatan' 		=> $id_kegiatan,
					'nama_kegiatan' 	=> $this->input->post('nama_kegiatan'),
					'nama_ukm'			=> $this->input->post('nama_ukm'),
					'tgl_pelaksanaan' 	=> $this->input->post('tgl_pelaksanaan'),
					'batas' 			=> $this->input->post('batas'),
					'lampiran' 			=> $namaLampiran,
					
		);
		//Update data
		$update=$this->komunitas->update_kom($id_kegiatan, $data);
		$this->session->set_flashdata('message', 'Data kegiatan berhasil diubah');
		redirect('event_komunitas');
    }

	public function delete_kom($id_kegiatan){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		//Cari gambar berdasarkan Id
		$komunitas = $this->komunitas->getkomunitasById($id_kegiatan);
		//Hapus gambar
		unlink ('./assets/lampiran/' . $komunitas->lampiran);

        $data['komunitasArr']=$this->komunitas->delete_kom($id_kegiatan);
		$this->session->set_flashdata('message', 'Data kegiatan berhasil dihapus');
        redirect('event_komunitas');
	}

	public function event_webinar(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['webinarArr']=$this->webinar->get_webinar();
		
		$this->load->view('admin/layout/header_event');
		$this->load->view('admin/layout/sidebar_eventweb');
		$this->load->view('admin/event/webinar', $data);
		$this->load->view('admin/layout/footer');
	}

	public function save_web(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$id_webinar		= $this->input->post('id_webinar');
		$nama_webinar	= $this->input->post('nama_webinar');
		$nama_mitra		= $this->input->post('nama_mitra');
		$narasumber		= $this->input->post('narasumber');
		$link			= $this->input->post('link');
		$tgl_pelaksanaan= $this->input->post('tgl_pelaksanaan');
		$batas			= $this->input->post('batas');
		
		$lampiran		= $_FILES['lampiran'];
		if ($lampiran=''){

		} else {
			$config['upload_path']		= './assets/lampiran';
			$config['allowed_types']	= 'gif|jpg|png';

			$this->upload->initialize($config);
			#$this->load->library('upload', $config);
			if (!$this->upload->do_upload('lampiran')){
				$this->session->set_flashdata('error_web', 'Data Webinar gagal ditambahkan');
				redirect('event_webinar');
			} else {
				$lampiran=$this->upload->data('file_name');
			}
		}

		if($batas >= $tgl_pelaksanaan){
			$this->session->set_flashdata('error_tgl', 'Batas pendaftaran tidak boleh melebihi waktu pelaksanaan!');
			redirect ('event_webinar');
		}
		
		if($this->webinar->is_idwebinar_exists($id_webinar)){
				#tampilkan informasi berhasil
				$this->session->set_flashdata('error_web', 'Data Webinar gagal ditambahkan');
				redirect('event_webinar');
			}else{
				$data = array(
					'id_webinar' 		=> $id_webinar,
					'nama_webinar' 		=> $nama_webinar,
					'nama_mitra' 		=> $nama_mitra,
					'narasumber'		=> $narasumber,
					'link'				=> $link,
					'tgl_pelaksanaan' 	=> $tgl_pelaksanaan,
					'batas'			 	=> $batas,
					'lampiran' 			=> $lampiran
				);
				$this->db->insert('webinar', $data);
				$this->session->set_flashdata('message', 'Data webinar berhasil ditambahkan');
				redirect('event_webinar');
			}
	}

	public function update_web($id_webinar){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$config['upload_path']		= './assets/lampiran';
		$config['allowed_types']	= 'gif|jpg|png|JPG|PNG|JPEG';

		$this->upload->initialize($config);
			if ($this->upload->do_upload('lampiran')){

				//Upload file baru
				$namaLampiran = $this->upload->data('file_name');

				//Hapus file lama
				$webinar = $this->webinar->getWebinarById($id_webinar);
				unlink ('./assets/lampiran/' . $webinar->lampiran);
			}

			if (empty($namaLampiran) && !empty($_POST['lampiranLama'])){
				//Memanggil file lama jika tidak diubah
				$namaLampiran = $_POST['lampiranLama'];
			}

		$data = array(
			'id_webinar' 		=> $id_webinar,
			'nama_webinar' 		=> $this->input->post('nama_webinar'),
			'nama_mitra' 		=> $this->input->post('nama_mitra'),
			'narasumber'		=> $this->input->post('narasumber'),
			'link'				=> $this->input->post('link'),
			'tgl_pelaksanaan' 	=> $this->input->post('tgl_pelaksanaan'),
			'batas'			 	=> $this->input->post('batas'),
			'lampiran' 			=> $namaLampiran
		);

		//Update data
        $update=$this->webinar->update_web($id_webinar, $data);
		$this->session->set_flashdata('message', 'Data webinar berhasil diubah');
        redirect('event_webinar');
    }

	public function delete_web($id_webinar){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		//Cari gambar berdasarkan Id
		$webinar = $this->webinar->getWebinarById($id_webinar);
		//Hapus gambar
		unlink ('./assets/lampiran/' . $webinar->lampiran);

        $data['webinarArr']=$this->webinar->delete_web($id_webinar);
		$this->session->set_flashdata('message', 'Data webinar berhasil dihapus');
        redirect('event_webinar');
	}

	public function data_user(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['userArr']=$this->user->get_user();
		$this->load->view('admin/layout/header_datauser');
		$this->load->view('admin/layout/sidebar_datauser');
		$this->load->view('admin/data_user', $data);
		$this->load->view('admin/layout/footer');
	}

	public function save_usr(){

		$this->form_validation->set_rules('username', 'username', 'required');

		if ($this->form_validation->run()===FALSE){
			$this->load->view('login');
		} else {
			$username				= $this->input->post('username');
			$password				= $this->input->post('password');
			//$hashed_password = password_hash($password, PASSWORD_DEFAULT);
			$nama					= $this->input->post('nama');
			$prodi					= $this->input->post('prodi');
			$email					= $this->input->post('email');
			$rpassword				= $this->input->post('rpassword');
			$tnc					= $this->input->post('tnc');

			//Enkripsi password menggunakan password hash
			// $password	= password_hash($password, PASSWORD_DEFAULT);
			// var_dump($password);

			$data = array(
				'username'			=> $username,
				'password'			=> $hashed_password,
				'nama'				=> $nama,
				'prodi'				=> $prodi,
				'email'				=> $email,
				'rpassword'			=> $rpassword,
				'tnc'				=> $tnc,
			);

			$data=$this->input->post('username');

			if($this->user->is_username_exists($username)){
				#tampilkan informasi berhasil
				$this->session->set_flashdata('message', 
				'
				<div class="alert alert-danger pastel alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Username sudah digunakan. <br>Silahkan gunakan Username lain.
				</div>');

			}else{
				$data=$this->input->post();
				$simpan=$this->user->save_user($data);
				$this->session->set_flashdata('message', 
				'
				<div class="alert alert-success pastel alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Akun berhasil dibuat. Silahkan Login.
				</div>');
			}
			redirect ('login');
    		}
	}

	public function update_usr($username){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

        #meneruskan data ke model
        #redirect
        $data=$this->input->post();
        $update=$this->user->update_usr($username, $data);
        $this->session->set_flashdata('message', 'Data pengguna berhasil diubah');
        redirect('data_user');
    }

	public function delete_usr($username){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

        $data['userArr']=$this->user->delete_usr($username);
		$this->session->set_flashdata('message', 'Data pengguna berhasil dihapus');
        redirect('data_user');
	}

	public function data_mitra(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['mitraArr']=$this->mitra_webinar->get_mitra_webinar();
		$this->load->view('admin/layout/header_datamitra');
		$this->load->view('admin/layout/sidebar_datamitra');
		$this->load->view('admin/data_mitra', $data);
		$this->load->view('admin/layout/footer');
	}

	public function save_mit(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

        #untuk menangkap isi form
        #melanjutkan ke model
        #redirect ke mana
		$id_mitra	= $this->input->post('id_mitra');
		$nama_mitra	= $this->input->post('nama_mitra');
		$alamat		= $this->input->post('alamat');

		
		
			if($this->mitra_webinar->is_idmitra_exists($id_mitra)){
				$this->session->set_flashdata('error_mit', 'Data mitra gagal ditambah');
				redirect('data_mitra');
			}else{
				$data = array(
					'id_mitra' 		=> $id_mitra,
					'nama_mitra' 	=> $nama_mitra,
					'alamat' 		=> $alamat,
				);
				$data=$this->input->post();
        		$simpan=$this->mitra_webinar->save_mitra($data);
				$this->session->set_flashdata('message', 'Data mitra berhasil ditambah');
			}
        
        redirect('data_mitra');
    }

	public function update_mit($id_mitra){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

        #meneruskan data ke model
        #redirect
        $data=$this->input->post();
        $update=$this->mitra_webinar->update_mit($id_mitra, $data);
        $this->session->set_flashdata('message', 'Data mitra berhasil diubah');
        redirect('data_mitra');
    }

	public function delete_mit($id_mitra){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

        $data['mitraArr']=$this->mitra_webinar->delete_mit($id_mitra);
		$this->session->set_flashdata('message', 'Data mitra berhasil dihapus');
        redirect('data_mitra');
	}

	public function report_belmawa(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['belmawaArr']=$this->belmawa->get_belmawa();
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportbel');
		$this->load->view('admin/report/belmawa', $data);
		$this->load->view('admin/layout/footer');
	}

	public function pendaftar_bel($id_belmawa){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['daftar_belArr']=$this->daftar_bel->getBelmawaById($id_belmawa);
		$data['id_belmawa'] 	= $this->session->userdata('id_belmawa');
		$data['nama_belmawa'] 	= $this->session->userdata('nama_belmawa');
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportbel');
		$this->load->view('admin/report/pendaftar_bel', $data);
		$this->load->view('admin/layout/footer');
	}

	public function print_bel($id_belmawa){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['daftar_belArr']=$this->daftar_bel->getBelmawaById($id_belmawa);
		$data['id_belmawa'] 	= $this->session->userdata('id_belmawa');
		$data['nama_belmawa'] 	= $this->session->userdata('nama_belmawa');
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportbel');
		$this->load->view('admin/report/print_bel', $data);
		$this->load->view('admin/layout/footer');
	}

	public function pdf_bel($id_belmawa){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['daftar_belArr']=$this->daftar_bel->getBelmawaById($id_belmawa);
		$data['id_belmawa'] 	= $this->session->userdata('id_belmawa');
		$data['nama_belmawa'] 	= $this->session->userdata('nama_belmawa');
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportbel');
		$this->load->view('admin/report/pdf_bel', $data);
		$this->load->view('admin/layout/footer');
	}

	public function report_komunitas(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['komunitasArr']=$this->komunitas->get_komunitas();
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportkom');
		$this->load->view('admin/report/komunitas', $data);
		$this->load->view('admin/layout/footer');
	}

	public function pendaftar_kom($id_kegiatan){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		// $id_webinar	= $this->session->userdata('id_webinar');
		// //Ambil data dari database berdasarkan $id_webinar
		// $this->load->model('daftar_web');
		$data['daftar_komArr']=$this->daftar_kom->getKegiatanById($id_kegiatan);
		$data['id_kegiatan'] 	= $this->session->userdata('id_kegiatan');
		$data['nama_kegiatan'] 	= $this->session->userdata('nama_kegiatan');
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportkom');
		$this->load->view('admin/report/pendaftar_kom', $data);
		$this->load->view('admin/layout/footer');
	}

	public function print_kom($id_kegiatan){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['daftar_komArr']  = $this->daftar_kom->getKegiatanById($id_kegiatan);
		$data['id_kegiatan'] 	= $this->session->userdata('id_kegiatan');
		$data['nama_kegiatan'] 	= $this->session->userdata('nama_kegiatan');
		//$data['daftar_komArr'] = $this->daftar_kom->get_daftar_kom("daftar_kom");
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportkom');
		$this->load->view('admin/report/print_kom', $data);
		$this->load->view('admin/layout/footer');
	}

	public function pdf_kom($id_kegiatan){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['daftar_komArr']  = $this->daftar_kom->getKegiatanById($id_kegiatan);
		$data['id_kegiatan'] 	= $this->session->userdata('id_kegiatan');
		$data['nama_kegiatan'] 	= $this->session->userdata('nama_kegiatan');
		//$data['daftar_komArr'] = $this->daftar_kom->get_daftar_kom("daftar_kom");
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportkom');
		$this->load->view('admin/report/pdf_kom', $data);
		$this->load->view('admin/layout/footer');
		//redirect ('report_komunitas');
	}

	public function report_webinar(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		/*session_start();
        $_SESSION['id_webinar'] = ['id_webinar'];
        $_SESSION['nama_webinar'] = ['nama_webinar'];*/

		$data['webinarArr']=$this->webinar->get_webinar();
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportweb');
		$this->load->view('admin/report/webinar', $data);
		$this->load->view('admin/layout/footer');
		
	}

	public function set_session_data(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		//Ambil data dari input form
		$id_webinar		= $this->input->post('id_webinar');
		$nama_webinar	= $this->input->post('nama_webinar');

		//Set session data
		$this->session->set_userdata('id_webinar', $id_webinar);
		$this->session->set_userdata('nama_webinar', $nama_webinar);

		redirect ('pendaftar_web');
	}

	public function pendaftar_web($id_webinar){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['daftar_webArr']=$this->daftar_web->getWebinarById($id_webinar);
		$data['id_webinar'] 	= $this->session->userdata('id_webinar');
		$data['nama_webinar'] 	= $this->session->userdata('nama_webinar');
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportweb');
		$this->load->view('admin/report/pendaftar_web', $data);
		$this->load->view('admin/layout/footer');
	}

	public function print_web($id_webinar){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['daftar_webArr']=$this->daftar_web->getWebinarById($id_webinar);
		$data['id_webinar'] 	= $this->session->userdata('id_webinar');
		$data['nama_webinar'] 	= $this->session->userdata('nama_webinar');
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportweb');
		$this->load->view('admin/report/print_web', $data);
		$this->load->view('admin/layout/footer');
	}

	public function pdf_web($id_webinar){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}

		$data['daftar_webArr']=$this->daftar_web->getWebinarById($id_webinar);
		$data['id_webinar'] 	= $this->session->userdata('id_webinar');
		$data['nama_webinar'] 	= $this->session->userdata('nama_webinar');
		$this->load->view('admin/layout/header_report');
		$this->load->view('admin/layout/sidebar_reportweb');
		$this->load->view('admin/report/pdf_web', $data);
		$this->load->view('admin/layout/footer');
	}



// ===================================     USER     ============================================

	public function dashboard_user(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
        	$this->load->view('user/layout/header_db');
            $this->load->view('user/layout/sidebar_db');
            $this->load->view('user/dashboard');
            $this->load->view('user/layout/footer');
    }

	public function belmawa(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
			$data['belmawaArr']=$this->belmawa->get_belmawa();
            $this->load->view('user/layout/header_bel');
            $this->load->view('user/layout/sidebar_bel');
            $this->load->view('user/belmawa', $data);
            $this->load->view('user/layout/footer');
    }

	public function detail_bel($id_belmawa){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
			$data['belmawaArr']=$this->belmawa->getDetailBelmawaById($id_belmawa);
			
            $this->load->view('user/layout/header_bel');
            $this->load->view('user/layout/sidebar_bel');
            $this->load->view('user/detail_bel', $data);
            $this->load->view('user/layout/footer');
    }

	public function daftar_bel(){

				$username				= $this->input->post('username');
				$nama					= $this->input->post('nama');
				$prodi					= $this->input->post('prodi');
				$email					= $this->input->post('email');
				$id_belmawa				= $this->input->post('id_belmawa');
				$nama_belmawa			= $this->input->post('nama_belmawa');
				$tgl_pelaksanaan		= $this->input->post('tgl_pelaksanaan');
				$batasWaktu				= $this->input->post('batas');
				date_default_timezone_set('Asia/Jakarta');
				$currentDate 			= date('Y-m-d H:i:s');
				$id_daftar				= uniqid();
				$tanskrip				= $_FILES['tanskrip'];
					if ($tanskrip=''){

					} else {
						$config['upload_path']		= './assets/tanskrip';
						$config['allowed_types']	= 'pdf';

						$this->upload->initialize($config);
						#$this->load->library('upload', $config);
						if (!$this->upload->do_upload('tanskrip')){
							$this->session->set_flashdata('error_file', 'Ukuran file yang di upload terlalu besar');
							redirect ('belmawa');
						} else {
							$tanskrip=$this->upload->data('file_name');
						}
					}

				$surat		= $_FILES['surat'];
					if ($surat=''){

					} else {
						$config['upload_path']		= './assets/surat';
						$config['allowed_types']	= 'pdf';

						$this->upload->initialize($config);
						#$this->load->library('upload', $config);
						if (!$this->upload->do_upload('surat')){
							$this->session->set_flashdata('error_file', 'Ukuran file yang di upload terlalu besar');
							redirect ('belmawa');
						} else {
							$surat=$this->upload->data('file_name');
						}
					}
				$cv		= $_FILES['cv'];
					if ($cv=''){

					} else {
						$config['upload_path']		= './assets/cv';
						$config['allowed_types']	= 'pdf';

						$this->upload->initialize($config);
						#$this->load->library('upload', $config);
						if (!$this->upload->do_upload('cv')){
							$this->session->set_flashdata('error_file', 'Ukuran file yang di upload terlalu besar');
							redirect ('belmawa');
						} else {
							$cv=$this->upload->data('file_name');
						}
					}
				
				if($this->daftar_bel->isAlreadyRegistered($id_belmawa, $username)){
					$this->session->set_flashdata('daftar_bel', 'Anda telah mendaftar kegiatan ini');
					redirect ('belmawa');
				}
	
				if($currentDate > $batasWaktu || $currentDate == $batasWaktu ){
					$this->session->set_flashdata('error_daftarbel', 'Waktu pendaftaran kegiatan sudah ditutup!');
					redirect ('belmawa');
				} else {
						#untuk menangkap isi form
						#melanjutkan ke model
						#redirect ke mana
						$data = array(
							'username'			=> $username,
							'nama'				=> $nama,
							'prodi'				=> $prodi,
							'email'				=> $email,
							'id_belmawa'		=> $id_belmawa,
							'nama_belmawa'		=> $nama_belmawa,
							'tgl_pelaksanaan'	=> $tgl_pelaksanaan,
							'batas'				=> $batasWaktu,
							'waktu_daftar'		=> $currentDate,
							'id_daftar'			=> $id_daftar,
							'tanskrip'			=> $tanskrip,
							'surat'				=> $surat,
							'cv'				=> $cv,
						);
						$this->db->insert('daftar_bel',$data);
						$this->session->set_flashdata('message', 'Pendaftaran berhasil');
						redirect('belmawa');
						
				}
				
	}
	
	public function komunitas(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
			$data['komunitasArr']=$this->komunitas->get_komunitas();
            $this->load->view('user/layout/header_kom');
            $this->load->view('user/layout/sidebar_kom');
            $this->load->view('user/komunitas', $data);
            $this->load->view('user/layout/footer');
    }

	public function detail_kom($id_kegiatan){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
			$data['komunitasArr']=$this->komunitas->getDetailKomunitasById($id_kegiatan);
			
            $this->load->view('user/layout/header_kom');
            $this->load->view('user/layout/sidebar_kom');
            $this->load->view('user/detail_kom', $data);
            $this->load->view('user/layout/footer');
    }
	
	public function daftar_kom(){
				$username				= $this->input->post('username');
				$nama					= $this->input->post('nama');
				$prodi					= $this->input->post('prodi');
				$email					= $this->input->post('email');
				$id_kegiatan			= $this->input->post('id_kegiatan');
				$nama_kegiatan			= $this->input->post('nama_kegiatan');
				$nama_ukm				= $this->input->post('nama_ukm');
				$alasan					= $this->input->post('alasan');
				$tgl_pelaksanaan		= $this->input->post('tgl_pelaksanaan');
				$batasWaktu				= $this->input->post('batas');
				date_default_timezone_set('Asia/Jakarta');
				$currentDate 			= date('Y-m-d H:i:s');
				$id_daftar				= uniqid();			
				
				if($this->daftar_kom->isAlreadyRegistered($id_kegiatan, $username)){
					$this->session->set_flashdata('daftar_kom', 'Anda telah mendaftar kegiatan ini');
					redirect ('komunitas');
				}
	
				if($currentDate > $batasWaktu || $currentDate == $batasWaktu ){
					$this->session->set_flashdata('error_daftarkom', 'Waktu pendaftaran kegiatan sudah ditutup!');
					redirect ('komunitas');
				} else {
						#untuk menangkap isi form
						#melanjutkan ke model
						#redirect ke mana
						$data = array(
							'username'			=> $username,
							'nama'				=> $nama,
							'prodi'				=> $prodi,
							'email'				=> $email,
							'id_kegiatan'		=> $id_kegiatan,
							'nama_kegiatan'		=> $nama_kegiatan,
							'nama_ukm'			=> $nama_ukm,
							'alasan'			=> $alasan,
							'tgl_pelaksanaan'	=> $tgl_pelaksanaan,
							'batas'				=> $batasWaktu,
							'waktu_daftar'		=> $currentDate,
							'id_daftar'			=> $id_daftar,

						);
						$this->db->insert('daftar_kom',$data);
						$this->session->set_flashdata('message', 'Pendaftaran berhasil');
						redirect('komunitas');
						
				}
				
	}

	public function webinar(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
			$data['webinarArr']=$this->webinar->get_webinar();
            $this->load->view('user/layout/header_web');
            $this->load->view('user/layout/sidebar_web');
            $this->load->view('user/webinar', $data);
            $this->load->view('user/layout/footer');
    }

	public function detail_web($id_webinar){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
			$data['webinarArr']=$this->webinar->getDetailWebinarById($id_webinar);
			
            $this->load->view('user/layout/header_web');
            $this->load->view('user/layout/sidebar_web');
            $this->load->view('user/detail_web', $data);
            $this->load->view('user/layout/footer');
    }

	public function daftar_web(){
			$username				= $this->input->post('username');
			$nama					= $this->input->post('nama');
			$prodi					= $this->input->post('prodi');
			$email					= $this->input->post('email');
			$id_webinar				= $this->input->post('id_webinar');
			$nama_webinar			= $this->input->post('nama_webinar');
			$nama_mitra				= $this->input->post('nama_mitra');
			$narasumber				= $this->input->post('narasumber');
			$link					= $this->input->post('link');
			$tgl_pelaksanaan		= $this->input->post('tgl_pelaksanaan');
			$batasWaktu					= $this->input->post('batas');
			date_default_timezone_set('Asia/Jakarta');
			$currentDate 			= date('Y-m-d H:i:s');
			$id_daftar				= uniqid();			
			
			if($this->daftar_web->isAlreadyRegistered($id_webinar, $username)){
				$this->session->set_flashdata('daftar_web', 'Anda telah mendaftar webinar ini');
				redirect ('webinar');
			}

			if($currentDate > $batasWaktu || $currentDate == $batasWaktu ){
				$this->session->set_flashdata('error_daftarweb', 'Waktu pendaftaran webinar sudah ditutup!');
				redirect ('webinar');
			} else {
					#untuk menangkap isi form
					#melanjutkan ke model
					#redirect ke mana
					$data = array(
						'username'			=> $username,
						'nama'				=> $nama,
						'prodi'				=> $prodi,
						'email'				=> $email,
						'id_webinar'		=> $id_webinar,
						'nama_webinar'		=> $nama_webinar,
						'nama_mitra'		=> $nama_mitra,
						'narasumber'		=> $narasumber,
						'link'				=> $link,
						'tgl_pelaksanaan'	=> $tgl_pelaksanaan,
						'batas'				=> $batasWaktu,
						'waktu_daftar'		=> $currentDate,
						'id_daftar'			=> $id_daftar,
					);
					$this->db->insert('daftar_web',$data);
					$this->session->set_flashdata('message', 'Pendaftaran berhasil');
					redirect('webinar');
					
			}
			
	}
	
	public function event_bel(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
			//Memeriksa apakah pengguna sudah login dengan mengambil data session
			$username	= $this->session->userdata('username');
			//Ambil data dari database berdasarkan $username
			$this->load->model('daftar_bel');
			$data['daftar_belArr'] = $this->daftar_bel->getBelmawaByUsername($username);
            $this->load->view('user/layout/header_event');
            $this->load->view('user/layout/sidebar_eventbel');
            $this->load->view('user/event_bel', $data);
            $this->load->view('user/layout/footer');
    }

	public function event_kom(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
			//Memeriksa apakah pengguna sudah login dengan mengambil data session
			$username	= $this->session->userdata('username');
			//Ambil data dari database berdasarkan $username
			$this->load->model('daftar_kom');
			$data['daftar_komArr'] = $this->daftar_kom->getKegiatanByUsername($username);
            $this->load->view('user/layout/header_event');
            $this->load->view('user/layout/sidebar_eventkom');
            $this->load->view('user/event_kom', $data);
            $this->load->view('user/layout/footer');
    }

	public function event_web(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
			//Memeriksa apakah pengguna sudah login dengan mengambil data session
			$username	= $this->session->userdata('username');
			//Ambil data dari database berdasarkan $username
			$this->load->model('daftar_web');
			$data['daftar_webArr'] = $this->daftar_web->getWebinarByUsername($username);
			
            $this->load->view('user/layout/header_event');
            $this->load->view('user/layout/sidebar_eventweb');
            $this->load->view('user/event_web', $data);
            $this->load->view('user/layout/footer');
			

    }

	public function profile(){
		//session_start();
		if(!isset($_SESSION['checklogin'])){
			redirect('login');
		}
            $this->load->view('user/layout/header_profile');
            $this->load->view('user/layout/sidebar_profile');
            $this->load->view('user/profile');
            $this->load->view('user/layout/footer');
    }

}

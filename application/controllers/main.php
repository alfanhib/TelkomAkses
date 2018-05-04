<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model');
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			redirect(base_url('index.php/main/dashboard'));
		}else{
			$this->load->view('selamat_datang');
		}
	}

	public function login(){
			if($this->input->post('submit')){
				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				if($this->form_validation->run()==TRUE){
					if($this->main_model->cek_user() == TRUE){
						redirect(base_url('index.php/main/dashboard'));
						}else{
						$data['notif'] = "<b>FAIL! Your username or password wrong!";
						$this->load->view('selamat_datang', $data);
					}
				}
			}else{
				$data['notif'] = validation_errors();
				$this->load->view('selamat_datang', $data);
			}	
	}

	public function logout()
		{
			$data = array(
				'username' => '',
				'logged_in' => FALSE

				);
		$this->session->sess_destroy();
		redirect('main');
		}

	public function signup()
	{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('username','Username','trim|required');
				$this->form_validation->set_rules('nik','Nik','trim|required');
				$this->form_validation->set_rules('password','Password','trim|required');
				if ($this->form_validation->run()==TRUE){
						if($this->main_model->daftar()==TRUE){
							$data['notif']='Register Berhasil!';
							$this->load->view('selamat_datang',$data);
						}else{
							$data['notif']='Register Gagal!';
							$this->load->view('selamat_datang',$data);
						}
					}else{
						$data['notif']=validation_errors();
						$this->load->view('selamat_datang',$data);
					}
				}else{
					$this->load->view('selamat_datang');
				}
				$this->session->sess_destroy();
				redirect('main');

	}

	public function dashboard()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['user'] = $this->main_model->get_admin()->result();
			$data['main_konten'] = 'dashboard';
			$this->load->view('template', $data);
		}else{
			redirect('main');
		}
	}

	public function harga_mitra()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$data['khs'] = $this->main_model->get_data()->result();
		$data['file'] = $this->main_model->get_datab()->result();
		$data['datac'] = $this->main_model->get_datac()->result();
		$data['main_konten'] = 'hargaLayout/mitra';
		$this->load->view('template', $data);
		}else{
			redirect('main');
		}
	
	}


	public function harga_telkom()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$data['khs'] = $this->main_model->get_data_telkom()->result();
		$data['file'] = $this->main_model->get_data_telkom_b()->result();
		$data['datac'] = $this->main_model->get_data_telkom_c()->result();
		$data['main_konten'] = 'hargaLayout/Telkom';
		$this->load->view('template', $data);
		}else{
			redirect('main');
		}
	}

	public function search()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$this->load->model('main_model');
		$designator = $this->input->post('search');

			if(isset($designator) and !empty($designator))
			{
				$data['main_konten'] = 'hargaLayout/mitra';

				$data['khs'] = $this->main_model->search($designator);
				$data['file'] = $this->main_model->searchb($designator);
				$data['datac'] =  $this->main_model->searchc($designator);

				$data['harga'] = "Telkom";

				$this->load->view("template",$data);
			}else{
			redirect('main/harga_mitra');
			}
		}else{
			redirect('main');
		}
	}

	public function search_b()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$this->load->model('main_model');
		$designator = $this->input->post('search');

			if(isset($designator) and !empty($designator))
			{
				$data['main_konten'] = 'hargaLayout/Telkom';

				$data['khs'] = $this->main_model->cari_tel_harga_a($designator);
				$data['file'] = $this->main_model->cari_tel_harga_b($designator);
				$data['datac'] =  $this->main_model->cari_tel_harga_c($designator);

				$this->load->view("template",$data);
			}else{
			redirect('main/harga_telkom');
			}
		}else{
			redirect('main');
		}
	}

	public function move_add()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_konten'] = 'Layout/Mitra/addLayout';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function move_add_b()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_konten'] = 'Layout/Mitra/addLayout_b';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function move_add_c()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_konten'] = 'Layout/Mitra/addLayout_c';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function move_add_tel_a()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_konten'] = 'Layout/Telkom/addLayout_a';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function move_add_tel_b()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_konten'] = 'Layout/Telkom/addLayout_b';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function move_add_tel_c()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_konten'] = 'Layout/Telkom/addLayout_c';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function to_edit()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id = $this->uri->segment(3);
			$data['id'] = $this->main_model->get_databyid($id);
			$data['main_konten']='editLayout/Mitra/editLayout';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function to_edit_b()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id = $this->uri->segment(3);
			$data['id'] = $this->main_model->get_databyid_b($id);
			$data['main_konten']='editLayout/Mitra/editLayout_b';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function to_edit_c()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id = $this->uri->segment(3);
			$data['id'] = $this->main_model->get_databyid_c($id);
			$data['main_konten']='editLayout/Mitra/editLayout_c';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function edit_a()
	{
		if($this->input->post('submit'))
		{
				$id = $this->input->post('upId');
				$designator	= $this->input->post('upDesignator');
				$uraian	= $this->input->post('upUraian');
				$satuan	= $this->input->post('upSatuan');
				$material = $this->input->post('upMaterial');
				$jasa = $this->input->post('upJasa');

					$this->load->model('main_model');
					$data = array(
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
					);

					$this->main_model->update_data_a($id, $data);
					redirect('main/harga_mitra');
		}else{
			redirect('main/index');
		}	
	}

	public function edit_b()
	{
		if($this->input->post('submit'))
		{
				$id = $this->input->post('upId');
				$designator	= $this->input->post('upDesignator');
				$uraian	= $this->input->post('upUraian');
				$satuan	= $this->input->post('upSatuan');
				$material = $this->input->post('upMaterial');
				$jasa = $this->input->post('upJasa');

					$this->load->model('main_model');
					$data = array(
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
					);

					$this->main_model->update_data_b($id, $data);
					redirect('main/harga_mitra');
		}else{
			redirect('main/index');
		}	
	}

	public function edit_c()
	{
		if($this->input->post('submit'))
		{
				$id = $this->input->post('upId');
				$designator	= $this->input->post('upDesignator');
				$uraian	= $this->input->post('upUraian');
				$satuan	= $this->input->post('upSatuan');
				$material = $this->input->post('upMaterial');
				$jasa = $this->input->post('upJasa');

					$this->load->model('main_model');
					$data = array(
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
					);

					$this->main_model->update_data_c($id, $data);
					redirect('main/harga_mitra');
		}else{
			redirect('main/index');
		}	
	}

	public function edit_harga_tel_a()
	{
		if($this->input->post('submit'))
		{
				$id = $this->input->post('upId');
				$designator	= $this->input->post('upDesignator');
				$uraian	= $this->input->post('upUraian');
				$satuan	= $this->input->post('upSatuan');
				$material = $this->input->post('upMaterial');
				$jasa = $this->input->post('upJasa');

					$this->load->model('main_model');
					$data = array(
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
					);

					$this->main_model->update_harga_telkom_a($id, $data);
					redirect('main/harga_telkom');
		}else{
			redirect('main/index');
		}	
	}

	public function edit_harga_tel_b()
	{
		if($this->input->post('submit'))
		{
				$id = $this->input->post('upId');
				$designator	= $this->input->post('upDesignator');
				$uraian	= $this->input->post('upUraian');
				$satuan	= $this->input->post('upSatuan');
				$material = $this->input->post('upMaterial');
				$jasa = $this->input->post('upJasa');

					$this->load->model('main_model');
					$data = array(
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
					);

					$this->main_model->update_harga_telkom_b($id, $data);
					redirect('main/harga_telkom');
		}else{
			redirect('main/index');
		}	
	}

	public function edit_harga_tel_c()
	{
		if($this->input->post('submit'))
		{
				$id = $this->input->post('upId');
				$designator	= $this->input->post('upDesignator');
				$uraian	= $this->input->post('upUraian');
				$satuan	= $this->input->post('upSatuan');
				$material = $this->input->post('upMaterial');
				$jasa = $this->input->post('upJasa');

					$this->load->model('main_model');
					$data = array(
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
					);

					$this->main_model->update_harga_telkom_c($id, $data);
					redirect('main/harga_telkom');
		}else{
			redirect('main/index');
		}	
	}

	public function to_edit_telkom()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id = $this->uri->segment(3);
			$data['id'] = $this->main_model->get_databyid_telkom($id);
			$data['main_konten']='editLayout/Telkom/editLayout';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function to_edit_telkom_b()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id = $this->uri->segment(3);
			$data['id'] = $this->main_model->get_databyid_telkom_b($id);
			$data['main_konten']='editLayout/Telkom/editLayout_b';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function to_edit_telkom_c()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id = $this->uri->segment(3);
			$data['id'] = $this->main_model->get_databyid_telkom_c($id);
			$data['main_konten']='editLayout/Telkom/editLayout_c';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function insert()
	{
		if($this->session->userdata('logged_in') == TRUE){
				if($this->input->post('submit'))
				{
						$designator	= $this->input->post('addDesignator');
						$uraian	= $this->input->post('addUraian');
						$satuan	= $this->input->post('addSatuan');
						$material = $this->input->post('addMaterial');
						$jasa = $this->input->post('addJasa');
		
							$this->load->model('main_model');
							$data = array(
							'no' 				=> NULL,
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
							);
		
							$this->main_model->masukkan($data);
							redirect('main/harga_telkom');
				}else{
					redirect('main/harga_telkom');
				}
			}else{
				redirect('main');
			}
	}

	public function insert_b()
	{
		if($this->session->userdata('logged_in') == TRUE){
				if($this->input->post('submit'))
				{
						$designator	= $this->input->post('addDesignator');
						$uraian	= $this->input->post('addUraian');
						$satuan	= $this->input->post('addSatuan');
						$material = $this->input->post('addMaterial');
						$jasa = $this->input->post('addJasa');
		
							$this->load->model('main_model');
							$data = array(
							'no' 				=> NULL,
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
							);
		
							$this->main_model->masukkan_b($data);
							redirect('main/harga_telkom');
				}else{
					redirect('main/harga_telkom');
				}
			}else{
				redirect('main');
			}
	}

	public function insert_c()
	{
		if($this->session->userdata('logged_in') == TRUE){
				if($this->input->post('submit'))
				{
						$designator	= $this->input->post('addDesignator');
						$uraian	= $this->input->post('addUraian');
						$satuan	= $this->input->post('addSatuan');
						$material = $this->input->post('addMaterial');
						$jasa = $this->input->post('addJasa');
		
							$this->load->model('main_model');
							$data = array(
							'no' 				=> NULL,
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
							);
		
							$this->main_model->masukkan_c($data);
							redirect('main/harga_telkom');
				}else{
					redirect('main/harga_telkom');
				}
			}else{
				redirect('main');
			}
	}

	public function insert_mitra_a()
	{
		if($this->session->userdata('logged_in') == TRUE){
				if($this->input->post('submit'))
				{
						$designator	= $this->input->post('addDesignator');
						$uraian	= $this->input->post('addUraian');
						$satuan	= $this->input->post('addSatuan');
						$material = $this->input->post('addMaterial');
						$jasa = $this->input->post('addJasa');
		
							$this->load->model('main_model');
							$data = array(
							'no' 				=> NULL,
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
							);
		
							$this->main_model->masukkan_mitra_a($data);
							redirect('main/harga_mitra');
				}else{
					redirect('main/harga_mitra');
				}
			}else{
				redirect('main');
			}
	}

	public function insert_mitra_b()
	{
		if($this->session->userdata('logged_in') == TRUE){
				if($this->input->post('submit'))
				{
						$designator	= $this->input->post('addDesignator');
						$uraian	= $this->input->post('addUraian');
						$satuan	= $this->input->post('addSatuan');
						$material = $this->input->post('addMaterial');
						$jasa = $this->input->post('addJasa');
		
							$this->load->model('main_model');
							$data = array(
							'no' 				=> NULL,
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
							);
		
							$this->main_model->masukkan_mitra_b($data);
							redirect('main/harga_mitra');
				}else{
					redirect('main/harga_mitra');
				}
			}else{
				redirect('main');
			}
	}

	public function insert_mitra_c()
	{
		if($this->session->userdata('logged_in') == TRUE){
				if($this->input->post('submit'))
				{
						$designator	= $this->input->post('addDesignator');
						$uraian	= $this->input->post('addUraian');
						$satuan	= $this->input->post('addSatuan');
						$material = $this->input->post('addMaterial');
						$jasa = $this->input->post('addJasa');
		
							$this->load->model('main_model');
							$data = array(
							'no' 				=> NULL,
							'designator'		=> $designator,
							'uraian'			=> $uraian,
							'satuan'			=> $satuan,
							'material'			=> $material,
							'jasa'				=> $jasa
							);
		
							$this->main_model->masukkan_mitra_c($data);
							redirect('main/harga_mitra');
				}else{
					redirect('main/harga_mitra');
				}
			}else{
				redirect('main');
			}
	}

	public function hapus_a()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$no = $this->uri->segment(3);

			if($this->main_model->delete($no) == TURE)
			{
				redirect('main/harga_mitra');
			}else {
				redirect('main');
			}
		}else{
			redirect('main');
		}
	}

	public function hapus_b()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$no = $this->uri->segment(3);

			if($this->main_model->delete_b($no) == TURE)
			{
				redirect('main/harga_mitra');
			}else {
				redirect('main');
			}
		}else{
			redirect('main');
		}
	}

	public function hapus_c()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$no = $this->uri->segment(3);

			if($this->main_model->delete_c($no) == TURE)
			{
				redirect('main/harga_mitra');
			}else {
				redirect('main');
			}
		}else{
			redirect('main');
		}
	}

	public function del_harga_a()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$no = $this->uri->segment(3);

			if($this->main_model->del_harga_a($no) == TURE)
			{
				redirect('main/harga_telkom');
			}else {
				redirect('main');
			}
		}else{
			redirect('main');
		}
	}

	public function del_harga_b()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$no = $this->uri->segment(3);

			if($this->main_model->del_harga_b($no) == TURE)
			{
				redirect('main/harga_telkom');
			}else {
				redirect('main');
			}
		}else{
			redirect('main');
		}
	}

	public function del_harga_c()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$no = $this->uri->segment(3);

			if($this->main_model->del_harga_c($no) == TURE)
			{
				redirect('main/harga_telkom');
			}else {
				redirect('main');
			}
		}else{
			redirect('main');
		}
	}

	public function addProject_mitra()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['project'] = $this->main_model->get_project_mitra()->result();
			$data['main_konten'] = 'addProject/addProject_mitra';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}


	

	public function to_view_boq_mitra()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$data['khs'] = $this->main_model->get_boq_mitra_a()->result();
		$data['file'] = $this->main_model->get_boq_mitra_b()->result();
		$data['datac'] = $this->main_model->get_boq_mitra_c()->result();
		$data['main_konten'] = 'boq_view/boqviewtelkom';
		$this->load->view('template', $data);
		}else{
			redirect('main');
		}
	
	}


	public function make_project_mitra()
	{
		if($this->session->userdata('logged_in') == TRUE){
				if($this->input->post('submit'))
				{
						$project	= $this->input->post('addIdProject');
						$name	= $this->input->post('addNameProject');
						$sp	= $this->input->post('addNomorSp');
						$kontrak = $this->input->post('addNomorKontrak');
						$input = $this->input->post('addTanggalInput');
						$date = $this->input->post('addDateLine');

							$this->load->model('main_model');
							$data = array(
							'no' 				=> NULL,
							'id_project'			=> $project,
							'nama_project'		=> $name,
							'no_sp'				=> $sp,
							'no_kontrak'		=> $kontrak,
							'tanggal_input'		=> $input,
							'dateline'			=> $date
							);

							$this->main_model->insert_project_mitra($data);
							redirect('main/addProject_mitra');
				}else{
					redirect('main/addProject_mitra');
				}

			}else{
				redirect('main');
			}
	}

 // -----------------------------------------   BOQ TELKOM     ----------------------------------------------------------- 

	public function to_add_project_telkom()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['project'] = $this->main_model->get_project_telkom()->result();
			$data['main_konten'] = 'addProject/addProject_telkom';
			$this->load->view('template', $data);
		}else{
			redirect('main');
		}
	}

	public function make_project_telkom()
	{
		if($this->session->userdata('logged_in') == TRUE){
				if($this->input->post('submit'))
				{
						$project	= $this->input->post('addIdProject');
						$name	= $this->input->post('addNameProject');
						$sp	= $this->input->post('addNomorSp');
						$kontrak = $this->input->post('addNomorKontrak');
						$input = $this->input->post('addTanggalInput');
						$date = $this->input->post('addDateLine');

							$this->load->model('main_model');
							$data = array(
							'no' 				=> NULL,
							'id_project'			=> $project,
							'nama_project'		=> $name,
							'no_sp'				=> $sp,
							'no_kontrak'		=> $kontrak,
							'tanggal_input'		=> $input,
							'dateline'			=> $date
							);

							$this->main_model->insert_project_telkom($data);
							redirect('main/to_add_project_telkom');
				}else{
					redirect('main');
				}

			}else{
				redirect('main');
			}
	}


	public function to_view_boq_telkom()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id = $this->uri->segment(3);
			$data['id'] = $this->main_model->get_project_telkom($id);
			//$data['boq_a'] = $this->main_model->get_file_boq_a($id);
			$data['boq_a'] = $this->main_model->get_boq_telkom_a()->result();
			$data['boq_b'] = $this->main_model->get_boq_telkom_b()->result();
			$data['boq_c'] = $this->main_model->get_boq_telkom_c()->result();
			$data['main_konten']='boqview/viewBoqtelkom';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function search_boq_telkom_a()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$this->load->model('main_model');
		$designator = $this->input->post('search');

			if(isset($designator) and !empty($designator))
			{
				$data['main_konten'] = 'to_view_harga/view_harga_a';
				$data['khs'] = $this->main_model->cari_tel_harga_a($designator);
				$this->load->view("template",$data);
			}else{
			redirect('main/to_view_harga_telkom_a');
			}
		}else{
			redirect('main');
		}
	}

	public function search_boq_telkom_b()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$this->load->model('main_model');
		$designator = $this->input->post('search');

			if(isset($designator) and !empty($designator))
			{
				$data['main_konten'] = 'to_view_harga/view_harga_b';
				$data['khs'] = $this->main_model->cari_tel_harga_b($designator);
				$this->load->view("template",$data);
			}else{
			redirect('main/to_view_harga_telkom_b');
			}
		}else{
			redirect('main');
		}
	}

	public function search_boq_telkom_c()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$this->load->model('main_model');
		$designator = $this->input->post('search');

			if(isset($designator) and !empty($designator))
			{
				$data['main_konten'] = 'to_view_harga/view_harga_c';
				$data['khs'] = $this->main_model->cari_tel_harga_c($designator);
				$this->load->view("template",$data);
			}else{
			redirect('main/to_view_harga_telkom_s');
			}
		}else{
			redirect('main');
		}
	}


	public function search_project_telkom()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$this->load->model('main_model');
		$project = $this->input->post('search');

			if(isset($project) and !empty($project))
			{
				$data['main_konten'] = 'addProject/addProject_telkom';
				$data['project'] = $this->main_model->cari_project_telkom($project);
				$this->load->view("template",$data);
			}else{
			redirect('main/to_view_harga_telkom_a');
			}
		}else{
			redirect('main');
		}
	}

	public function to_view_harga_telkom_a()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['khs'] = $this->main_model->get_data_telkom()->result();
			$data['main_konten']='to_view_harga/view_harga_a';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function to_view_harga_telkom_b()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['khs'] = $this->main_model->get_data_telkom_b()->result();
			$data['main_konten']='to_view_harga/view_harga_b';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function to_view_harga_telkom_c()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['khs'] = $this->main_model->get_data_telkom_c()->result();
			$data['main_konten']='to_view_harga/view_harga_c';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function to_add_boq_tel_a()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id = $this->uri->segment(3);
			$data['id'] = $this->main_model->get_harga_by_id_a($id);
			$data['main_konten']='addBoqLayout/telkom/addBoqtelkom_a';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function to_add_boq_tel_b()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id = $this->uri->segment(3);
			$data['id'] = $this->main_model->get_databyid_telkom_b($id);
			$data['main_konten']='addBoqLayout/telkom/addBoqtelkom_b';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function to_add_boq_tel_c()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id = $this->uri->segment(3);
			$data['id'] = $this->main_model->get_databyid_telkom_c($id);
			$data['main_konten']='addBoqLayout/telkom/addBoqtelkom_c';
			$this->load->view('template',$data);
		}else{
			redirect('main');
		}
	}

	public function make_boq_tel_a()
	{
		if($this->session->userdata('logged_in') == TRUE){
			if($this->input->post('submit'))
			{
					
					$idproject = $this->input->post('addId');
					$designator	= $this->input->post('addDesignator');
					$uraian	= $this->input->post('addUraian');
					$satuan	= $this->input->post('addSatuan');
					$plan = $this->input->post('addPlan');
					$aanw = $this->input->post('addAanw');
					$material = $this->input->post('addMaterial');
					$jasa = $this->input->post('addJasa');
					$jum_mat = $aanw*$material;
					$jum_jas = $aanw*$jasa;
		
						$this->load->model('main_model');
						$data = array(
						'no' 				=> NULL,
						'id_project'		=> $idproject,
						'designator'		=> $designator,
						'uraian'			=> $uraian,
						'satuan'			=> $satuan,
						'plan'				=> $plan,
						'aanw'				=> $aanw,
						'material'			=> $material,
						'jasa'				=> $jasa,
						'jum_mat'			=> $jum_mat,
						'jum_jas'			=> $jum_jas
						);
		
					$this->main_model->masukkan_boq_tel_a($data);
					redirect('main/to_view_boq_telkom');

			}else{
				redirect('main/index');
			}
		}else{
			redirect('main/index');
		}	
	}

	public function make_boq_tel_b()
	{
		if($this->session->userdata('logged_in') == TRUE){
			if($this->input->post('submit'))
			{
					
					$idproject = $this->input->post('addId');
					$designator	= $this->input->post('addDesignator');
					$uraian	= $this->input->post('addUraian');
					$satuan	= $this->input->post('addSatuan');
					$plan = $this->input->post('addPlan');
					$aanw = $this->input->post('addAanw');
					$material = $this->input->post('addMaterial');
					$jasa = $this->input->post('addJasa');
					$jum_mat = $aanw*$material;
					$jum_jas = $aanw*$jasa;
		
						$this->load->model('main_model');
						$data = array(
						'no' 				=> NULL,
						'id_project'		=> $idproject,
						'designator'		=> $designator,
						'uraian'			=> $uraian,
						'satuan'			=> $satuan,
						'plan'				=> $plan,
						'aanw'				=> $aanw,
						'material'			=> $material,
						'jasa'				=> $jasa,
						'jum_mat'			=> $jum_mat,
						'jum_jas'			=> $jum_jas
						);
		
					$this->main_model->masukkan_boq_tel_b($data);
					redirect('main/to_view_boq_telkom');

			}else{
				redirect('main/index');
			}
		}else{
			redirect('main/index');
		}	
	}

	public function make_boq_tel_c()
	{
		if($this->session->userdata('logged_in') == TRUE){
			if($this->input->post('submit'))
			{
					
					$idproject = $this->input->post('addId');
					$designator	= $this->input->post('addDesignator');
					$uraian	= $this->input->post('addUraian');
					$satuan	= $this->input->post('addSatuan');
					$plan = $this->input->post('addPlan');
					$aanw = $this->input->post('addAanw');
					$material = $this->input->post('addMaterial');
					$jasa = $this->input->post('addJasa');
					$jum_mat = $aanw*$material;
					$jum_jas = $aanw*$jasa;
		
						$this->load->model('main_model');
						$data = array(
						'no' 				=> NULL,
						'id_project'		=> $idproject,
						'designator'		=> $designator,
						'uraian'			=> $uraian,
						'satuan'			=> $satuan,
						'plan'				=> $plan,
						'aanw'				=> $aanw,
						'material'			=> $material,
						'jasa'				=> $jasa,
						'jum_mat'			=> $jum_mat,
						'jum_jas'			=> $jum_jas
						);
		
					$this->main_model->masukkan_boq_tel_c($data);
					redirect('main/to_view_boq_telkom');

			}else{
				redirect('main/index');
			}
		}else{
			redirect('main/index');
		}	
	}

	public function del_boq_tel_a()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$id = $this->uri->segment(3);

			if($this->main_model->del_boq_tel_a($id) == TURE)
			{
				redirect('main/to_view_boq_telkom');
			}else {
				redirect('main');
			}
		}else{
			redirect('main');
		}
	}

	public function del_boq_tel_b()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$id = $this->uri->segment(3);

			if($this->main_model->del_boq_tel_b($id) == TURE)
			{
				redirect('main/to_view_boq_telkom');
			}else {
				redirect('main');
			}
		}else{
			redirect('main');
		}
	}

	public function del_boq_tel_c()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$id = $this->uri->segment(3);

			if($this->main_model->del_boq_tel_c($id) == TURE)
			{
				redirect('main/to_view_boq_telkom');
			}else {
				redirect('main');
			}
		}else{
			redirect('main');
		}
	}

// ---------------------------------------- END BOQ TELKOM -----------------------------


// --------------------------------------- BOQ MITRA  --------------------------------------------------
	public function del_project_mit()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$no = $this->uri->segment(3);

			if($this->main_model->del_project_mit($no)==TRUE)
			{
				redirect('main/addProject_mitra');
			}else{
				redirect('main');
			}
		}
	}

	


	

}
	
	/*public function update_project_tel()
	{
		if($this->input->post('submit'))
		{
				$id = $this->input->post('addNo');
				$project	= $this->input->post('addIdProject');
				$name	= $this->input->post('addNameProject');
				$sp	= $this->input->post('addNomorSp');
				$kontrak = $this->input->post('addNomorKontrak');
				$input = $this->input->post('addTanggalInput');
				$date = $this->input->post('addDateLine');

				$this->load->model('main_model');

				$data = array(
					'id_project'		=> $project,
					'nama_project'		=> $name,
					'no_sp'				=> $sp,
					'no_kontrak'		=> $kontrak,
					'tanggal_input'		=> $input,
					'dateline'			=> $date
				);

				$file = array(
					'id_project' => $project
				);
					
				$this->main_model->update_project_tel($data, $project);
				$this->main_model->update_join_tel($file, $project);

				redirect('main/harga_mitra');
		}else{
			redirect('main/index');
		}	
	}*/

	
	/*public function data_siswa()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'data_siswa_view';

			$this->load->library('pagination');
			
			$config['base_url'] = base_url().'index.php/admin/data_siswa';
			$config['total_rows'] = $this->admin_model->total_records();
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] = '</ul>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open'] = "<li>";
			$config['next_tag_close'] = "</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tag_close'] = "</li>";
			$config['first_tag_open'] = "<li>";
			$config['first_tag_close'] = "</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tag_close'] = "</li>";

			$this->pagination->initialize($config);
			$start = $this->uri->segment(3,0);

			$rows = $this->admin_model->get_data_pendaftar($config['per_page'],$start);

			$data['pendaftar'] = $rows;
			$data['pagination'] = $this->pagination->create_links();
			$data['start'] = $start;
			

			$this->load->view('template', $data);
		} else {
			redirect('admin');
		}
	}
	public function detail_data_siswa()
		{
			if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'detail_data_siswa';

			$id_user = $this->uri->segment(3);

			$data['detil'] = $this->admin_model->get_data($id_user);


			$this->load->view('template', $data);
			} else {
			redirect('admin');
		}

	}
		public function update_project_tel()
	{
		if($this->input->post('submit'))
		{
				$id = $this->input->post('addNo');
				$project	= $this->input->post('addIdProject');
				$name	= $this->input->post('addNameProject');
				$sp	= $this->input->post('addNomorSp');
				$kontrak = $this->input->post('addNomorKontrak');
				$input = $this->input->post('addTanggalInput');
				$date = $this->input->post('addDateLine');

				$this->load->model('main_model');

				$data = array(
					'id_project'		=> $project,
					'nama_project'		=> $name,
					'no_sp'				=> $sp,
					'no_kontrak'		=> $kontrak,
					'tanggal_input'		=> $input,
					'dateline'			=> $date
				);
				$file = array('id_project' => $project);

				$this->main_model->update_join_tel($file,$project);

				
					$this->main_model->update_project_tel($data, $project);
					redirect('main/harga_mitra');
		}else{
			redirect('main/index');
		}		
	}


	public function home(){
		$this->load->view('template');
	}
	public function masuk(){
		if($this->input->post('submit')){
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if($this->form_validation->run()==TRUE){
				if($this->admin_model->cek_user() == TRUE){
					redirect(base_url('index.php/admin/home'));
				}else{
					$data['notif'] = "Login gagal";
					$this->load->view('login_view', $data);
				}
			}
		}else{
			$data['notif'] = validation_errors();
			$this->load->view('login_view', $data);
		}
	}
	public function logout()
		{
			$data = array(
				'username' => '',
				'logged_in' => FALSE

				);
		$this->session->sess_destroy();
		redirect('admin');
		}
	public function hapus()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$id_user = $this->uri->segment(3);

			if($this->admin_model->delete($id_user) == TURE)
			{
				redirect('admin/data_siswa');
			}else {
				redirect('admin');
			}
		}else{
			redirect('admin');
		}
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
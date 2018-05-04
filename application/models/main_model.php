<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main_model extends CI_Model {

	public function __construct()
	{
	parent::__construct();

	}	

	public function cek_user()
	{
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	
	$query = $this->db->where('username',$username)
	                  ->where('password',md5($password))
	                  ->get('user');

	if($query->num_rows() > 0){
		$data = array(
			'username'		=> $username,
			'logged_in'		=> TRUE
			);
		$this->session->set_userdata($data);
		return TRUE;
	}else{
		return FALSE;
		}
	}

	public function daftar()
	{
		$data = array(
			'no'	=>NULL,
			'username'		=>$this->input->post('username'),
			'nik'			=>$this->input->post('nik'),
			'password'		=>md5($this->input->post('password')),
			);
		$this->db->insert('user',$data);

		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function search($designator)
	{
		$this->db->select('*');
		$this->db->from('tma');
		$this->db->like('designator',$designator);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			# code...
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function searchb($designator)
	{
		$this->db->select('*');
		$this->db->from('tmb');
		$this->db->like('designator',$designator);

		$query = $this->db->get();
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function searchc($designator)
	{
		$this->db->select('*');
		$this->db->from('tmc');
		$this->db->like('designator',$designator);

		$query = $this->db->get();
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	

	public function cari_project_telkom($project)
	{
		$this->db->select('*');
		$this->db->from('list_pekerjaan');
		$this->db->like('id_project',$project);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			# code...
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function get_data()
	{
		return $this->db->get('tma');
	}

	public function get_datab()
	{
		return $this->db->get('tmb');
	}

	public function get_boq()
	{
		return $this->db->get('list_boq');
	}
	
	public function get_boq_project($project){
		return $this->db->get('list_boq', $project);
	}

	public function get_datac()
	{
		return $this->db->get('tmc');
	}	

	

	public function get_databyid($id)
	{
		return $this->db->where('no' , $id)
						->get('tma')
						->row();
	}

	public function get_harga_by_id_a($id)
	{
		return $this->db->where('no' , $id)
						->get('tta')
						->row();
	}

	public function get_databyid_b($id)
	{
		return $this->db->where('no' , $id)
						->get('tmb')
						->row();
	}

		public function get_databyid_c($id)
	{
		return $this->db->where('no' , $id)
						->get('tmc')
						->row();
	}

	public function masukkan($data)
	{
		$this->db->insert('tta', $data);

	}

	public function masukkan_b($data)
	{
		$this->db->insert('ttb', $data);

	}

	public function masukkan_c($data)
	{
		$this->db->insert('ttc', $data);

	}

	public function masukkan_mitra_a($data)
	{
		$this->db->insert('tma', $data);

	}

	public function masukkan_mitra_b($data)
	{
		$this->db->insert('tmb', $data);
	}

	public function masukkan_mitra_c($data)
	{
		$this->db->insert('tmc', $data);

	}

	public function update_data_a($id,$data)
	{
		$this->db->where('no',$id);
		$this->db->update('tma',$data);
		
		return TRUE;
	}

	public function update_data_b($id,$data)
	{
		$this->db->where('no',$id);
		$this->db->update('tmb',$data);
		
		return TRUE;
	}

	public function update_data_c($id,$data)
	{
		$this->db->where('no',$id);
		$this->db->update('tmc',$data);
		
		return TRUE;
	}


	public function delete($no)
	{
		$this->db->where('no', $no)
				 ->delete('tma');
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function delete_b($no)
	{
		$this->db->where('no', $no)
				 ->delete('tmb');
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function delete_c($no)
	{
		$this->db->where('no', $no)
				 ->delete('tmc');
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function get_project_mitra()
	{
		return $this->db->get('list_pekerjaan_mitra');
	}

	public function insert_project_mitra($data)
	{
		$this->db->insert('list_pekerjaan_mitra', $data);
	}

	public function del_boq_c($no)
	{
		$this->db->where('no', $no)
				 ->delete('ttc');
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function get_admin()
	{
		return $this->db->get('user');
	}

	public function get_file_boq_a($id)
	{
			return $this->db->query("SELECT list_pekerjaan.id_project, list_boq.id_project, list_boq.designator, list_boq.uraian, list_boq.satuan, list_boq.plan, list_boq.aanw, list_boq.material, list_boq.jasa, list_boq.jum_mat, list_boq.jum_jas 
			FROM list_pekerjaan, list_boq
			WHERE list_pekerjaan.id_project=list_boq.id_project
			ORDER BY list_pekerjaan.id_project");

			/*return $this->db->query("SELECT list_pekerjaan.id_project, list_boq.id_project, list_boq.designator, list_boq.uraian, list_boq.satuan, list_boq.plan, list_boq.aanw, list_boq.material, list_boq.jasa, list_boq.jum_mat, list_boq.jum_jas 
			FROM list_pekerjaan 
			WHERE list_pekerjaan.id_project = list_boq.id_project"); */
	}

	
//<--------------------------------------------- HARGA TELKOM -------------------------------------->

	public function get_data_telkom()
	{
		return $this->db->get('tta');
	}

	public function get_data_telkom_b()
	{
		return $this->db->get('ttb');
	}

	public function get_data_telkom_c()
	{
		return $this->db->get('ttc');
	}

	public function cari_tel_harga_a($designator)
	{
		$this->db->select('*');
		$this->db->from('tta');
		$this->db->like('designator',$designator);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			# code...
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function cari_tel_harga_b($designator)
	{
		$this->db->select('*');
		$this->db->from('ttb');
		$this->db->like('designator',$designator);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			# code...
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function cari_tel_harga_c($designator)
	{
		$this->db->select('*');
		$this->db->from('ttc');
		$this->db->like('designator',$designator);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			# code...
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function del_harga_a($no)
	{
		$this->db->where('no', $no)
				 ->delete('tta');
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function del_harga_b($no)
	{
		$this->db->where('no', $no)
				 ->delete('ttb');
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function del_harga_c($no)
	{
		$this->db->where('no', $no)
				 ->delete('ttc');
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function update_harga_telkom_a($id,$data)
	{
		$this->db->where('no',$id);
		$this->db->update('tta',$data);
		
		return TRUE;
	}

	public function update_harga_telkom_b($id,$data)
	{
		$this->db->where('no',$id);
		$this->db->update('ttb',$data);
		
		return TRUE;
	}

	public function update_harga_telkom_c($id,$data)
	{
		$this->db->where('no',$id);
		$this->db->update('ttc',$data);
		
		return TRUE;
	}

		public function get_databyid_telkom($id)
	{
		return $this->db->where('no' , $id)
						->get('tta')
						->row();
	}

	public function get_databyid_telkom_b($id)
	{
		return $this->db->where('no' , $id)
						->get('ttb')
						->row();
	}

	public function get_databyid_telkom_c($id)
	{
		return $this->db->where('no' , $id)
						->get('ttc')
						->row();
	}

//<-------------------------------------------- END HARGA TELKOM------------------------------------->
		



//<---------------------------------------------- BOQ TELKOM --------------------------------------->

	public function masukkan_boq_tel_a($data)
	{
		$this->db->insert('list_boq', $data);
	}

	public function masukkan_boq_tel_b($data)
	{
		$this->db->insert('list_boq_telkom_b', $data);
	}

	public function masukkan_boq_tel_c($data)
	{
		$this->db->insert('list_boq_telkom_c', $data);
	}

	public function get_boq_telkom_a()
	{
		return $this->db->get('list_boq');
	}

	public function get_boq_id_tel_a($id)
	{
		return $this->db->where('no' , $id)
						->get('list_pekerjaan')
						->row();
	}

	public function get_boq_telkom_b()
	{
		return $this->db->get('list_boq_telkom_b');
	}

	public function get_boq_telkom_c()
	{
		return $this->db->get('list_boq_telkom_c');
	}

	public function del_boq_tel_a($id)
	{
		$this->db->where('no', $id)
				 ->delete('list_boq');
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function del_detil_boq_tel($no)
	{
		$this->db->where('id_project' , $no)
				 ->delete('list_boq');
	}

	public function get_project_telkom()
	{
		return $this->db->get('list_pekerjaan');
	}

	public function insert_project_telkom($data)
	{
		$this->db->insert('list_pekerjaan', $data);
	}

	public function del_project_tel($no)
	{
		$this->db->where('no', $no)
				 ->delete('list_pekerjaan');
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else {
			return FALSE;
		}
	}

//<---------------------------------------------- END BOQ TELKOM -------------------------------->

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */
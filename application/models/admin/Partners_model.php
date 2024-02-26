<?php
class partners_model extends CI_Model
{


	public function partners_data_submit($data)
	{
		$data = [
			'name' => $data['name'],
		];
		if ($this->db->insert('partners', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function partners_view()
	{
		$result = $this->db->query("SELECT * FROM partners");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}

	



	public function partners_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('partners');
	}


	public function partners_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'name' => $data['name'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('partners', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function partners_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `partners` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `blog`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

    public function blog_fetch()
	{

		$blog_data = $this->db->query("SELECT * FROM `blog_category`");

		$fetch = $blog_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $blog_data->result_array();
		} else {
			return false;
		}
	}

	public function header_data()
	{
		$this->load->model('partners_model');
		$this->load->model('partners_image_model');
	
		$data['partnerss'] = $this->partners_model->partners_view();
		$data['partners_images'] = $this->partners_image_model->partners_image_view();
	
		return $data;
	}
}

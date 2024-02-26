<?php
class page_model extends CI_Model
{


	public function page_data_submit($data)
	{
		$data = [
			'page_name' => $data['page_name'],
		];
		if ($this->db->insert('page', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function page_view()
	{
		$result = $this->db->query("SELECT * FROM `page`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function page_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('page');
	}


	public function page_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'page_name' => $data['page_name'],

		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('page', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function page_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `page` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `roles`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}
	public function header_data()
	{
		$this->load->model('page_model');
		$this->load->model('sub_page_model');
	
		$data['pages'] = $this->page_model->page_view();
		$data['subpages'] = $this->sub_page_model->sub_page_view();
	
		return $data;
	}
	
	
}
?>
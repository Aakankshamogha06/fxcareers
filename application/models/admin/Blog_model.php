<?php
class Blog_model extends CI_Model
{


	public function blog_data_submit($data)
	{
		$data = [
			'blog_name' => $data['blog_name'],
		];
		if ($this->db->insert('blog', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function blog_view()
	{
		$result = $this->db->query("SELECT * FROM `blog`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function blog_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('blog');
	}


	public function blog_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'blog_name' => $data['blog_name'],

		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('blog', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function blog_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `blog` where id=$id");
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
}

<?php
class partners_image_model extends CI_Model
{


	public function partners_image_data_submit($data,$partners_image)
	{
		$data = [
			'partners_id' => $data['partners_id'],
			'partners_image' => $partners_image,
			
		];
		if ($this->db->insert('partners_image', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function partners_image_view()
	{
		$result = $this->db->query("SELECT * FROM partners_image ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}

		
	}

	public function partners_image_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('partners_image');
	}


	public function partners_image_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'partners_id' => $data['partners_id'],
			'partners_image' => $data['partners_image'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('partners_image', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function partners_image_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `partners_image` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `partners`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

}

<?php
class Talk_to_us_model extends CI_Model
{


	public function talk_to_us_data_submit($data)
	{
		$data = [
			'name' => $data['name'],
			'email' => $data['email'],
			'phone_number' => $data['phone_number'],
			'location' => $data['location'],
			'message' => $data['message'],
		];
		if ($this->db->insert('talk_to_us', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function talk_to_us_view()
	{
		$result = $this->db->query("SELECT * FROM `talk_to_us`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function talk_to_us_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('talk_to_us');
	}


	public function talk_to_us_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'talk_to_us_name' => $data['talk_to_us_name'],

		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('talk_to_us', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function talk_to_us_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `talk_to_us` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	
}

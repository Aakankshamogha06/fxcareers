<?php
class Request_demo_model extends CI_Model
{


	public function request_demo_data_submit($data)
	{
		$data = [
			'name' => $data['name'],
			'email' => $data['email'],
			'contact_number' => $data['contact_number'],
			'country' => $data['country'],
			'areyoua' => $data['areyoua'],
			'products' => $data['products'],
			'qoute' => $data['qoute'],
			'message' => $data['message'],
		];
		if ($this->db->insert('request_demo', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function request_demo_view()
	{
		$result = $this->db->query("SELECT * FROM `request_demo`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function request_demo_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('request_demo');
	}


	public function request_demo_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'request_demo_name' => $data['request_demo_name'],

		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('request_demo', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function request_demo_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `request_demo` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	
}

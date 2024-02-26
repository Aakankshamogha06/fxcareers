<?php
class Start_broker_model extends CI_Model
{


	public function start_broker_data_submit($data)
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
		if ($this->db->insert('start_broker', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function start_broker_view()
	{
		$result = $this->db->query("SELECT * FROM `start_broker`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function start_broker_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('start_broker');
	}


	public function start_broker_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'name' => $data['name'],
			'email' => $data['email'],
			'contact_number' => $data['contact_number'],
			'country' => $data['country'],
			'areyoua' => $data['areyoua'],
			'products' => $data['products'],
			'qoute' => $data['qoute'],
			'message' => $data['message'],

		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('start_broker', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function start_broker_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `start_broker` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	
}

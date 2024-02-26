<?php
class Slider_model extends CI_Model
{


	public function slider_data_submit($data,$slider_image)
	{
		$data = [
			'slider_image' => $slider_image,
		];
		if ($this->db->insert('slider', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function slider_view()
	{
		
		$result = $this->db->query("SELECT * FROM `slider`");

		if ($result->num_rows() > 0) 
		{
			return $result->result(); // Return the fetched data
		} 
		else {
			return 0;
		}
	}

	



	public function slider_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('slider');
	}


	public function slider_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'slider_image'=>$data['slider_image'],
		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('slider', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function slider_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `slider` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	
}

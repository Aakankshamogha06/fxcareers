<?php
class course_mode_model extends CI_Model
{


	public function course_mode_data_submit($data)
	{
		$data = [
			
			'mode_name' => $data['mode_name'],
		];
		if ($this->db->insert('course_mode', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function course_mode_view()
{
    $result = $this->db->query(" SELECT * FROM `course_mode`;");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}


	public function course_mode_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('course_mode');
	}


	public function course_mode_update_data($data)
	{
		$newdata = [
			'mode_name' => $data['mode_name'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('course_mode', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function course_mode_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `course_mode` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


}

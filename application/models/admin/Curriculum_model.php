<?php
class curriculum_model extends CI_Model
{


	public function curriculum_data_submit($data)
	{
		$data = [
			
			'course_id' => $data['course_id'],
            'topic_name' => $data['topic_name'],
            'sub_topic_name' => $data['sub_topic_name'],
            
		];
		if ($this->db->insert('curriculum', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function curriculum_view()
{
    $result = $this->db->query(" SELECT *,(SELECT course_type FROM course WHERE curriculum.course_id= course.id) AS course_id FROM `curriculum`;
	");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}


	


	public function curriculum_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('curriculum');
	}


	public function curriculum_update_data($data,$image)
	{
		$newdata = [
			'course_id' => $data['course_id'],
            'topic_name' => $data['topic_name'],
            'sub_topic_name' => $data['sub_topic_name'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('curriculum', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function curriculum_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `curriculum` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function course_fetch()
	{

		$course_data = $this->db->query("SELECT * FROM `course`");

		$fetch = $course_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $course_data->result_array();
		} else {
			return false;
		}
	}
    public function topic_fetch()
	{

		$topic_data = $this->db->query("SELECT * FROM `topic`");

		$fetch = $topic_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $topic_data->result_array();
		} else {
			return false;
		}
	}

}

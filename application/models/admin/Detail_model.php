<?php
class detail_model extends CI_Model
{


	public function detail_data_submit($data,$course_image)
	{
		$data = [
			
			'course_name' => $data['course_name'],
            'course_image' => $course_image,
            'author' => $data['author'],
            'mode' => $data['mode'],
            'lesson' => $data['lesson'],
            'description' => $data['description'],
			'duration' => $data['duration'],
			'category' => $data['category'],
			'language' => $data['language'],
            'price' => $data['price'],
            'long_description' => $data['long_description'],
            
		];
		if ($this->db->insert('detail', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function detail_view()
{
    $result = $this->db->query("SELECT *,(SELECT category_name FROM course_category WHERE detail.category = course_category.id)AS category,
    (SELECT mode_name FROM course_mode WHERE detail.mode = course_mode.id)AS mode,
    (SELECT language_name FROM course_language WHERE detail.language = course_language.id)AS language
    FROM `detail`;");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}

public function course_detail_view($id)
{
    $result = $this->db->query("SELECT *,(SELECT category_name FROM course_category WHERE detail.category = course_category.id)AS category,
    (SELECT mode_name FROM course_mode WHERE detail.mode = course_mode.id)AS mode,
    (SELECT language_name FROM course_language WHERE detail.language = course_language.id)AS language
    FROM `detail` WHERE id=$id;");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}


	
public function online_course()
{
    $result = $this->db->query("SELECT *,(SELECT category_name FROM course_category WHERE detail.category = course_category.id)AS category,
    (SELECT mode_name FROM course_mode WHERE detail.mode = course_mode.id)AS mode,
    (SELECT language_name FROM course_language WHERE detail.language = course_language.id)AS language
    FROM `detail` WHERE mode=1;");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}
public function offlineBasic($id)
{
$result = $this->db->query("SELECT *,(SELECT category_name FROM course_category WHERE detail.category = course_category.id)AS category,
(SELECT mode_name FROM course_mode WHERE detail.mode = course_mode.id)AS mode,
(SELECT language_name FROM course_language WHERE detail.language = course_language.id)AS language
FROM `detail` WHERE REPLACE(LOWER(detail.course_name), ' ', '-')='$id' and detail.mode='2'");
if ($result->num_rows() > 0) {
		return $result->result();
	} else {
		return 0;
	}
}

public function onlineBasic($id)
{
$result = $this->db->query("SELECT *,(SELECT category_name FROM course_category WHERE detail.category = course_category.id)AS category,
(SELECT mode_name FROM course_mode WHERE detail.mode = course_mode.id)AS mode,
(SELECT language_name FROM course_language WHERE detail.language = course_language.id)AS language
FROM `detail` WHERE REPLACE(LOWER(detail.course_name), ' ', '-')='$id' and detail.mode='1'");
if ($result->num_rows() > 0) {
		return $result->result();
	} else {
		return 0;
	}
}

	public function offline_course()
    {
        $result = $this->db->query("SELECT *,(SELECT category_name FROM course_category WHERE detail.category = course_category.id)AS category,
    (SELECT mode_name FROM course_mode WHERE detail.mode = course_mode.id)AS mode,
    (SELECT language_name FROM course_language WHERE detail.language = course_language.id)AS language
    FROM `detail` WHERE mode=2;");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
    }

	public function detail_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('detail');
	}


	public function detail_update_data($data,$course_image)
	{
		$newdata = [
			'course_name' => $data['course_name'],
            'course_image' => $course_image,
            'author' => $data['author'],
            'mode' => $data['mode'],
            'lesson' => $data['lesson'],
            'description' => $data['description'],
			'duration' => $data['duration'],
			'category' => $data['category'],
			'language' => $data['language'],
            'price' => $data['price'],
            'long_description' => $data['long_description'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('detail', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function detail_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `detail` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function course_category_fetch()
	{

		$course_category_data = $this->db->query("SELECT * FROM `course_category`");

		$fetch = $course_category_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $course_category_data->result_array();
		} else {
			return false;
		}
	}
    public function course_mode_fetch()
	{

		$course_mode_data = $this->db->query("SELECT * FROM `course_mode`");

		$fetch = $course_mode_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $course_mode_data->result_array();
		} else {
			return false;
		}
	}
    public function course_language_fetch()
	{

		$course_language_data = $this->db->query("SELECT * FROM `course_language`");

		$fetch = $course_language_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $course_language_data->result_array();
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

	public function detail($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `detail` where detail.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }

}

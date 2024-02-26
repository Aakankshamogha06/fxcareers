<?php
class seo_model extends CI_Model
{


	public function seo_data_submit($data)
	{
		$data = [
			'page_name' => $data['page_name'],
            'url' => $data['url'],
            'keywords' => $data['keywords'],
            'title' => $data['title'],
            'meta_description' => $data['meta_description'],
		];
		if ($this->db->insert('seo', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function seo_view()
	{
		$result = $this->db->query("SELECT *,(SELECT page_name FROM page WHERE page.id=seo.page_name)as page_name FROM `seo`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function seo_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('seo');
	}


	public function seo_update_data($data)
	{
		$newdata = [
			'page_name' => $data['page_name'],
            'url' => $data['url'],
            'keywords' => $data['keywords'],
            'title' => $data['title'],
            'meta_description' => $data['meta_description'],
		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('seo', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function seo_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `seo` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `page`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}
	
	public function getseo_data($page)
{
    $query = $this->db->query("SELECT * FROM `seo` WHERE page_name=?", array($page));

    if ($query) {
        return $query->result();
    } else {
        // Handle the error, e.g., log it or return an error code
        return false;
    }
}
	
}
?>
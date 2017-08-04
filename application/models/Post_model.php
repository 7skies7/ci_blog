<?php

class Post_model extends CI_Model
{
	
	public function __construct()
    {
            $this->load->database();
    }

    public function getPost($id = FALSE)
	{
        if ($id === FALSE)
        {
                $query = $this->db->get('ci_post');
                return $query->result_array();
        }

        $query = $this->db->get_where('ci_post', array('id' => $id));
        return $query->row_array();
	}

	public function save_post()
	{

	    $data = array(
	        'post_title' => $this->input->post('post_title'),
	        'post_desc' => $this->input->post('post_desc'),
	        'post_author' => 1
	    );

	    $this->db->insert('ci_post', $data);
		return $this->db->insert_id();
	}

	public function update_post($id)
	{
		
	    $data = array(
	        'post_title' => $this->input->post('post_title'),
	        'post_desc' => $this->input->post('post_desc'),
	        'post_author' => 1
	    );

	    return $this->db->update('ci_post', $data,array('id' => $id));
	}

	public function delete_post($id)
	{


	    return $this->db->where('id',$id)->delete('ci_post');
	}
}

?>
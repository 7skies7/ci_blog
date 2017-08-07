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
                $query = $this->db->where('soft_delete',0)->get('ci_post');
                return $query->result_array();
        }

        $query = $this->db->get_where('ci_post', array('id' => $id));
        return $query->row_array();
	}

	public function save_post($imagename)
	{

	    $data = array(
	        'post_title' => $this->input->post('post_title'),
	        'post_desc' => $this->input->post('post_desc'),
	        'post_image' => $imagename,
	        'post_author' => $this->input->post('post_author'),
	    );

	    $this->db->insert('ci_post', $data);
		return $this->db->insert_id();
	}

	public function update_post($id,$imagename)
	{

	    $data = array(
	        'post_title' => $this->input->post('post_title'),
	        'post_desc' => $this->input->post('post_desc'),
	        'post_image' => $imagename,
	        'post_author' => $this->input->post('post_author'),
	    );

	    return $this->db->update('ci_post', $data,array('id' => $id));
	}

	public function delete_post($id)
	{

		$data = array(
	        'soft_delete' => 1,
	    );
	    return $this->db->update('ci_post', $data,array('id' => $id));
	}

	public function fetch_Post($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->where('soft_delete',0)->get("ci_post");

        if ($query->num_rows() > 0) {

            return $query->result_array();
        }
        return false;
   	}

   	public function getMyPost($authorid)
   	{

   		$query = $this->db->where('post_author', $authorid)->where('soft_delete', 0)->get('ci_post');
   		
        return $query->result_array();
   	}

   	public function getPostComments($postid)
   	{
   		$query = $this->db->select('ci_comments.post_id,ci_comments.user_id,ci_comments.post_comment,ci_post.post_title,ci_users.name,ci_comments.created_at')
   				->join('ci_post', 'ci_post.id = ci_comments.post_id')
   				->join('ci_users', 'ci_users.id = ci_comments.user_id')
   				->where('post_id', $postid)
   				->get('ci_comments');
                return $query->result_array();
   	}
}

?>
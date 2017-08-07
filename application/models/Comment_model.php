<?php

class Comment_model extends CI_Model
{
	
	public function __construct()
    {
            $this->load->database();
            $this->load->library('encrypt');
    }

 //    public function getUser($id = FALSE)
	// {
 //        if ($id === FALSE)
 //        {
 //                $query = $this->db->join('ci_roles', 'ci_roles.id = ci_users.role_id')->where('soft_delete',0)->get('ci_users');
 //                return $query->result_array();
 //        }

 //        $query = $this->db->get_where('ci_post', array('id' => $id));
 //        return $query->row_array();
	// }

	public function save_comment()
	{
		
	    $data = array(
	        'post_id' => $this->input->post('post_id'),
	        'user_id' => $this->input->post('user_comment'),
	        'post_comment' => $this->input->post('post_comment')
	    );
	 
	    $this->db->insert('ci_comments', $data);
		return $this->db->insert_id();
	}

}

?>
<?php

class User_model extends CI_Model
{
	
	public function __construct()
    {
            $this->load->database();
            $this->load->library('encrypt');
    }

    public function getUser($id = FALSE)
	{
        if ($id === FALSE)
        {
                $query = $this->db->join('ci_roles', 'ci_roles.id = ci_users.role_id')->where('soft_delete',0)->get('ci_users');
                return $query->result_array();
        }

        $query = $this->db->get_where('ci_post', array('id' => $id));
        return $query->row_array();
	}

	public function save_user()
	{

	    $data = array(
	        'name' => $this->input->post('name'),
	        'email' => $this->input->post('email'),
	        'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
	        'role_id' => $this->input->post('role'),
	        'content_activate' => $this->input->post('content_activate'),
	    );
	  
	    $this->db->insert('ci_users', $data);
		return $this->db->insert_id();
	}

	public function login()
	{
		
		$query = $this->db->where('email',$this->input->post('email'))->get('ci_users');
		$user = $query->row_array();
		$password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
		if(strcmp($user['password'], $password))
		{
			return $user;
		}

		return 'false';
	}

	public function update_user($id)
	{

	    $data = array(
	        'post_title' => $this->input->post('post_title'),
	        'post_desc' => $this->input->post('post_desc'),
	        'post_image' => $this->upload->data('file_name'),
	        'post_author' => 1
	    );

	    return $this->db->update('ci_post', $data,array('id' => $id));
	}

	public function delete_user($id)
	{

	    $data = array(
	        'soft_delete' => 1,
	    );
	    return $this->db->update('ci_users', $data,array('id' => $id));
	}

	public function access_user($id)
	{


	    $data = array(
	        'content_activate' => 0,
	    );
	    return $this->db->update('ci_users', $data,array('id' => $id));
	}

	public function getRequests()
	{

        $query = $this->db->where('content_activate',1)->where('soft_delete',0)->get('ci_users');

        return $query->result_array();
	}


	// public function fetch_Post($limit, $start) {
 //        $this->db->limit($limit, $start);
 //        $query = $this->db->get("ci_post");

 //        if ($query->num_rows() > 0) {

 //            return $query->result_array();
 //        }
 //        return false;
 //   }
}

?>
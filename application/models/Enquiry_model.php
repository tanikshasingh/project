<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_model extends CI_Model {

	public function set_news()
	{
	    $this->load->helper('url');

	    $data = array(
	        'name' => $this->input->post('name'),
	        'email' => $this->input->post('email'),
	        'mobile' => $this->input->post('mobile'),
	        'issues' => $this->input->post('issues')
	    );

	    return $this->db->insert('enquiry', $data);
	}
}

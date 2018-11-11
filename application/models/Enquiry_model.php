<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_model extends CI_Model {

	function save($data){
		$this->db->insert('bookings',$data);
	}
}

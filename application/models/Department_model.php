<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model {

	public function get_department()
	{
		$this->db->select('*');
		$this->db->from('departemen');
		return $this->db->get();
	}

	
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function get_departemen()
	{
		$this->db->select('*');
		$this->db->from('departemen');
		return $this->db->get();
	}

	
}
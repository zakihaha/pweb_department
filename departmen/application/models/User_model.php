<?php

class User_model extends CI_Model
{
	public function cek_user($email, $password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get();
	}
}

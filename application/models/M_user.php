<?php
class M_user extends CI_Model
{
	public function tampil_user(){
		return $this->db->get('user');
	}
}

<?php
/**
* 
*/
class Pegawai_model extends CI_Controller{
	
	public function __getAll()
	{
		# code...
		return $this->db->get('pegawai');
	}

	public function insertOne($datapegawai){
		return $this->db->insert('pegawai', $datapegawai);
	}
}
<?php 
/**
* 
*/
class Rawatinap_model extends CI_model
{
	
	public function getAll()
	{
		# code...
		return$this->db->get('input_rawatinap');
	}

	public function insertOne($Rawat_inap)
	{
		# code...
		return$this->db->insert('input_rawatinap',$Rawat_inap);
	}

	public ($value='')
	{
		# code...
	}
}
?>
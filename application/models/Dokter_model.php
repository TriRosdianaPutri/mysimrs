<?php 
 /**
 * 
 */
 class Dokter_model extends CI_Model
 {

  	public function getAll(){
 		return $this->db->get('dokter');
 	}

 	public function insertOne($datadokter){
 		return $this->db->insert('dokter',$datadokter);
 	}

 	public function hapusAku($id){
 		# code...
 		$this->db->where('kd_dokter', $id);
 		return $this->db->delete('dokter');
 	}
 	public function editAku($id){
 		# code...
 		return $this->db->get_where('dokter', ['kd_dokter' => $id]);
 		// return $this->db->edit('dokter');
 	}
 }
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class karyawanModel extends CI_Model {
  public function view(){
    return $this->db->get('karyawan')->result(); // Tampilkan semua data yang ada di tabel siswa
  }
}
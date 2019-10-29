<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Siswa extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('SiswaModel');
  }
  
  public function index(){
    $data['siswa'] = $this->SiswaModel->view();
    $this->load->view('view', $data);
  }
  
  public function export(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_Siswa.xls");
    
    $data['siswa'] = $this->SiswaModel->view();
    $this->load->view('export', $data);
  }
}
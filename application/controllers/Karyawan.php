<?php
Class karyawan extends CI_Controller{
    
    public function __construct(){
        parent::__construct();

        $this->load->model('karyawanModel');
    }

    function insert_dumy(){
        // jumlah data yang akan di insert
        $jumlah_data = 50;
        for ($i=1;$i<=$jumlah_data;$i++){
            $data   =   array(
            	/*"id_karyawan"	=>	$i,*/
                "nama_lengkap"  =>  "Karyawan Ke-",
                "email"         =>  "karyawan-$i@gmil.com",
                "no_hp"         =>  '089699935552',
                "foto"          =>  "foto-karyawan-$i.jpg");
            $this->db->insert('karyawan',$data); 
        }
        echo $i.' Data Berhasil Di Insert';
    }

    function index(){
        $this->load->view('karyawan');
        $data['karyawan'] = $this->karyawanModel->view();
    }

    public function export(){
    // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_Karyawan.xls");
    
    $data['karyawan'] = $this->karyawanModel->view();
    $this->load->view('export', $data);
  }

    function json(){
        $this->load->library('datatables');
         $this->datatables->add_column('foto', '<img src="https://images-na.ssl-images-amazon.com/images/I/51e0IN0EqZL._SX425_.jpg" width=20>', 'foto');
        $this->datatables->select('nama_lengkap,email,no_hp');
        $this->datatables->add_column('action', anchor('karyawan/edit/$1','Edit',array('class'=>'btn btn-danger btn-sm')), 'id_karyawan');
        $this->datatables->from('karyawan');
        return print_r($this->datatables->generate());
    }


    
    
}
?>
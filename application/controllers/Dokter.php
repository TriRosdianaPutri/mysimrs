<?php

/**
* 
*/
class Dokter extends CI_Controller{
	
	public function __construct()
	{
		# code...
		parent::__construct();
		$this->load->database();
		$this->load->model('Dokter_model');
	/*	$this->load->model('Pegawai_model');*/
	}

	public function index(){
		# code...
		$data['title'] = "List Dokter";
		$data['page'] = 'viewdokter';

		$data['list'] = $this->Dokter_model->getAll();
              /*  // $this->load->view('dashboardDokter');
                $this->load->view('partial/header');
                $this->load->view('partial/mainDashboard', $data);
                $this->load->view('partial/footer');*/
//		$this->load->->view('dokter/viewdokter',$data);
                $this->renderDokter($data);
	}

	public function kamar_inap(){
		$this->load->view('partial/header');
		$this->load->view('partial/mainDashboard',$data);
		// $this->load->view('dokter/viewdokter',$data);
		$this->load->view('partial/footer');
	}

	public function renderDokter($data)

	{
		# code...
		$this->load->view('partial/header.php',$data);
		$this->load->view('partial/mainDashboard');
		$this->load->view('partial/footer');
	}
	//latihan 2
	public function from_tampil(){  
		$data['pegawai']=$this->pegawai_model->getAll()->result_array();
		$data['$title']="From Input Dokter";
		$data['welcome']="istilah data dokter dibawah ini dengan seksama dengan data sebenernya";
		$this->load->view('dokter/inputDokter');
	}

	public function proses_simpan(){
		# code...
		$kd=$this->input->post('kd_dokter');
		$nama=$this->input->post('nm_dokter');
		$jkl=$this->input->post('jkl');
		$tempatlahir=$this->input->post('tempat_lahir');
		$goldar=$this->input->post('gol_darah');
		$agama=$this->input->post('agama');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('no_telpon');
		$kdsps=$this->input->post('kd_sps');
		$alumni=$this->input->post('alumni');
		$ijinpraktek=$this->input->post('ijin_paraktek');
		$status=$this->input->post('status');


	/*	$datasimpan= array( 'kd_dokter'=>$kd,'nm_dokter'=>$nama,'jkl'=>$jkl,'tempatlahir'=>$tempat_lahir,'goldar'=>$gol_darah,'agama'=>$agama,'alamat'=>$alamat,'notelp'=>$no_telpon ,'kdsps'=>$kd_sps,'alumni'=>$alumni,'ijinpraktek'=>$ijin_paraktek,'status'=>$status);*/

		$save=$this->Dokter_model->insertOne($datasimpan);
		if($save==TRUE){
			echo"data Berhasil simpan ke database";
		}else{

		}
	}

	public function hapus($id){
		$this->Dokter_model->hapusAku($id);
	}

	public function edit($id){
		$this->Dokter_model->editAku($id)->row_array();
	}
}

<?php
/**
* 
*/
class Rawat_inap extends CI_Controller
{
	
	public function __construct()
	{
		# code...
		parent:: __construct();
		$this->load->database();
		$this->load->model();
	}

	public function index()
	{
		# code...
		$data['page']='view_Rawat_inap';
		$data['list']=$this->Rawatinap_model->getAll();
		$this->renderRawat_inap($data);
	}

	public function renderRawat_inap($data)
	{
		# code...
		$this->load->view('Rawat_inap/header');
		$this->load->view('Rawat_inap/maincontent',$data);

		$this->load->view('Rawat_inap/footer');
	}

	public function from_tampil()
	{
		# code...
		$data['title']='List';
		$data['page']='input_inap';

		$this->renderRawat_inap($data)
	}

	public function proses_simpan()
	{
		# code...
		$no_rawat=$this->input->post('no_rawat');
		$kd_kamar=$this->input->post('kd_kamar');
		$trf_kamar=$this->input->post('trf_kamar');
		$diagnosa_awal=$this->input->post('diagnosa_awal');
		$diagnosa_akhir=$this->input->post('diagnosa_akhir');
		$tgl_masuk=$this->input->post('tgl_masuk');
		$jam_masuk=$this->input->post('jam_masuk');
		$tgl_keluar=$this->input->post('tgl_keluar');
		$jam_keluar=$this->input->post('jam_keluar');
		$lama=$this->input->post('lama');
		$ttl_biaya=$this->input->post('ttl_biaya');
		$stts_pulang=$this->input->post('stts_pulang');
		

		$datasimpan=array('no_rawat' =>$no_rawat ,'kd_kamar'=>$kd_kamar,'trf_kamar'=>$trf_kamar,'diagnosa_awal'=>$diagnosa_awal,'diagnosa_akhir'=>$diagnosa_akhir,'tgl_masuk'=>$tgl_masuk,'jam_masuk'=>$jam_masuk,'tgl_keluar'=>$tgl_keluar,'jam_keluar'=>$jam_keluar,'lama'=>$lama, 'ttl_biaya'=>$ttl_biaya,'stts_pulang'=>$stts_pulang);

		$save=$this->Rawatinap_model->insertON($datasimpan);
		if ($save==TRUE) {
			# code...
			redirect('Rawat_inap/index');
		}
		else{
			echo "gagal disimpan";
		}
	}

	public function hapus($id)
	{
		# code...
		$this->Rawatinap_model->hapusaku($id);
		redirect('Rawat_inap/index');
	}

	public function edit($no_rawat)
	{
		# code...
		$data['input_rawatinap']=$this->Rawatinap_model->get_bayar_pemesanan($no_rawat);
		if(isset($data['input_rawatinap']['no_rawat']))

	}
		if (isset($_POST) && count($_POST)>0) 
		{
			# code...
			$Rawat_inap = array(
				'no_rawat'=$this->input->post('no_rawat'),
				'kd_kamar'=$this->input->post('kd_kamar'),
				'trf_kamar'=$this->input->post('trf_kamar'),
				'diagnosa_awal'=$this->input->post('diagnosa_awal'),
				'diagnosa_akhir'=$this->input->post('diagnosa_akhir'),
				'tgl_masuk'=$this->input->post('tgl_masuk'),
				'tgl_keluar'=$this->input->post('tgl_keluar'),
				'jam_keluar'=$this->input->post('jam_keluar'),
				'lama'=$this->input->post('lama'),
				'ttl_biaya'=$this->input->post('ttl_biaya'),
				'stts_pulang'=$this->input->post('stts_pulang'),
				);

			$put=$this->Rawatinap_model->update_bayar_pemesanan($no_rawat,$Rawat_inap);
			redirect('Rawat_inap/index');
		}
		else{
			$data['title']='listDokter';
			$data['page']='input_update';
			$data['_view']='$Rawat_inap/input_update';
				$this->renderRawat_inap($data);
		}
		else{
			show_error('data error')
		}


}
?>
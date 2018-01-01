<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('md_Data');
	}
	public function index()
	{
		$data['judulHalaman'] = 'Data Lokasi';
		$data['listData'] = $this->md_Data->get_all();
		$this->load->view('vw_lihat', $data);
	}


	public function tambah()
	{
		$data['judulHalaman'] = '';

		if ($_POST) {
			$filePath = '';
			$this->load->helper(array('form', 'url'));
			$config['upload_path']   ='./images/lokasi/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = 0;
			$config['encrypt_name']  = true;
			$this->load->library('upload');
			$this->upload->initialize($config);
			if ($this->upload->do_upload('file')) 
				$filePath = $config['upload_path'] . $this->upload->data()['file_name'] ;
			
			$dataLokasi = array(
				'objek_nama' => $this->input->post('objekNama'),
				'objek_alamat' => $this->input->post('objekAlamat'),
				'objek_latitude' => $this->input->post('objekLatitude'),
				'objek_longitude' => $this->input->post('objekLongitude'),
				'objek_jadwal' => $this->input->post('objekJadwal'),
				'objek_kontak' => $this->input->post('objekKontak'),
				'objek_foto' => $filePath
				);

			$this->md_Data->insert($dataLokasi);
			redirect('data');
		}
		$data['judulHalaman'] = 'Tambah Lokasi';
		$this->load->view('vw_tambah', $data);


	}

	public function ubah($objekId)
	{
		$this->load->helper('file');
		if ($_POST) {

			$dataLokasi = array(
				'objek_nama' => $this->input->post('objekNama'),
				'objek_alamat' => $this->input->post('objekAlamat'),
				'objek_latitude' => $this->input->post('objekLatitude'),
				'objek_longitude' => $this->input->post('objekLongitude'),
				'objek_jadwal' => $this->input->post('objekJadwal'),
				'objek_kontak' => $this->input->post('objekKontak')
				);

			$filePath = '';
			$this->load->helper(array('form', 'url'));
			$config['upload_path']   ='./images/lokasi/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = 0;
			$config['encrypt_name']  = true;
			$this->load->library('upload');
			$this->upload->initialize($config);
			if ($this->upload->do_upload('file')) {
				$filePath = $config['upload_path'] . $this->upload->data()['file_name'] ;
				$dataLokasi['objek_foto'] = $filePath;

				$lokasiDahulu = $this->md_Data->get($objekId);
				$pathFoto = $lokasiDahulu->objek_foto;

				if (get_file_info($pathFoto) )
					unlink($pathFoto);
			}

			$this->md_Data->update($objekId, $dataLokasi);
			redirect('data');
		}
		$data['dataLokasi'] = (array) $this->md_Data->get_by(array('objek_id' => $objekId));
		$data['judulHalaman'] = 'Ubah Lokasi';
		$this->load->view('vw_ubah', $data);
	}

	public function hapus($objekId)
	{
		$this->load->helper('file');
		$dataLokasi = $this->md_Data->get($objekId);
		if (get_file_info($dataLokasi->objek_foto) )
			unlink($dataLokasi->objek_foto);

		$this->md_Data->delete($objekId);

		redirect('data');
	}


	public function ajax_detail()
	{
		$objek_id = $this->input->post('objekId');
		$detailObjek = $this->md_Data->get($objek_id);
		$detailObjek->objek_jadwal = nl2br($detailObjek->objek_jadwal); 
		$detailObjek->objek_alamat = nl2br($detailObjek->objek_alamat); 
		echo json_encode($detailObjek);
		exit;
	}
}

/* End of file Objek.php */
/* Location: ./application/modules/objek/controllers/Objek.php */
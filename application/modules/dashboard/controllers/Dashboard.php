<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function index()
	{
		$this->load->model('data/md_Data');
		$data['judulHalaman'] = 'Dashboard';
		$data['listLokasi'] = $this->md_Data->get_all();	
		$this->load->view('vw_dashboard', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/dashboard/controllers/Dashboard.php */
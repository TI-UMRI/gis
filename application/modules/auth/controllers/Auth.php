<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('md_Auth');
	}
	public function index()
	{	

		if ($this->session->userdata('loged_in')) {
			redirect('dashboard','refresh');
		}

		$data['errMessage'] = '';
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$criteria = array(
				'pengguna_nama' => $username,
				'pengguna_password' => $password
				);

			$condition = (bool) $this->md_Auth->get_by($criteria);
			if ($condition) {

				$sessData = array(
					'username' => $username,
					'loged_in' => 'true'

				);
				
				$this->session->set_userdata( $sessData );
				redirect('dashboard','refresh');
			}
			$this->session->set_flashdata('message', 'Username / Password Salah');
			redirect('auth');
		} else {
			$data['errMessage'] = validation_errors();
			$this->load->view('vw_login', $data);	
		}


	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/modules/auth/controllers/Auth.php */
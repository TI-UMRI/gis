<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_Data extends MY_Model {

	public $_table = 'objek';
	public $primary_key = 'objek_id';
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}



}

/* End of file md_Data.php */
/* Location: ./application/modules/data/models/md_Data.php */
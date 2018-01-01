 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Md_Auth extends MY_Model {
 	
 	public $_table = 'pengguna';
 	public $primary_key = 'pengguna_id';

 	public function __construct()
 	{
 		parent::__construct();
 		//Do your magic here
 	}
 	

 }
 
 /* End of file md_Auth.php */
 /* Location: ./application/modules/auth/models/md_Auth.php */
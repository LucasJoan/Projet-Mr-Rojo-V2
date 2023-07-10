<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlleurLogin extends CI_Controller {

	public function logview()
	{
		$this->load->view('Login');
	}	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChargeGenre extends CI_Controller {

	public function index()
	{
        $this->load->helper('url');
		$this->load->database();
		$this->load->model('Models');
		$data=array();
		$data['genre'] = $this->Models->getGenre();
		$this->load->view('completion', $data);
		$data['root'] = $this->Models->getGenre();
		$this->load->view('completion');
	}

}
?>
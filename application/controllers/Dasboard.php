<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

	public function index()
	{
		$data ['title'] = 'Dasboard';

        $this->load->view('master/header', $data);
        $this->load->view('master/sidebar', $data);
		$this->load->view('dasboard');
        $this->load->view('master/footer');
	}

}
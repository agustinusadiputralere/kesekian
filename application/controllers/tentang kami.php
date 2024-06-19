<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function layanan()
	{
		$data ['title'] = 'Layanan';

        $this->load->view('master/header', $data);
        $this->load->view('master/sidebar', $data);
		$this->load->view('layanan');
        $this->load->view('master/footer');
	}
}
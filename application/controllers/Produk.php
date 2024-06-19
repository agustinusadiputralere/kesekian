<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produk extends CI_Controller {

	public function produk()
	{
		$data ['title'] = 'Produk';
      
        $this->load->view('master/header', $data);
        $this->load->view('master/sidebar', $data);
        $this->load->view('produk', $data);
        $this->load->view('master/footer');
	}
}
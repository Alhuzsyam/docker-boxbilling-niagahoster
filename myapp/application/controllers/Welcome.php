<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->model('M_price');

		$data['price'] = $this->M_price->get_price();


		$this->load->view('page/layout/header');
		$this->load->view('page/layout/hero');
		$this->load->view('page/layout/fitur1');
		$this->load->view('page/layout/pricing', $data);
		$this->load->view('page/layout/fitur2');
		$this->load->view('page/layout/fitur3');
		$this->load->view('page/layout/laravel');
		$this->load->view('page/layout/listfitur');
		$this->load->view('page/layout/socialmedia');
		$this->load->view('page/layout/footer');
	}
}

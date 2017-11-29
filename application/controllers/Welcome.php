<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
	parent::__construct();
	
	$this->load->helper('form','url');
	$this->load->library('form_validation');
	
	// Load Model
	$this->load->model('welcome_model');
	
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function saved()
	{
		$e = $this->input->post('form-verify');
		if(isset($e)){
			$a = $this->input->post('form-name');
			$b = $this->input->post('form-date');
			$c = $this->input->post('form-time');
			$d = $this->input->post('form-cat');
			$data = array(
				'nm_pendaftar' 	=> $a,
				'dt_pendaftar' 	=> $b,
				'id_waktu' 		=> $c,
				'id_paket' 		=> $d,
				'st_pendaftar' 	=> 'N',
			);
			$this->welcome_model->saved($data);
			$this->load->view('congrats',$data);
		} else {
			redirect('/');
		}
		
	}
}

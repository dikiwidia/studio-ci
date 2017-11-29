<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jquery extends CI_Controller {
	public function __construct() {
	parent::__construct();
	
	$this->load->helper('form','url');
	$this->load->library('form_validation');
	
	// Load Model
	$this->load->model('jquery_model');
	
	}
	public function index()
	{
		//$this->load->view('jquery/select_time');
	}
	public function select_time()
	{
		$date = $this->input->post('a');
		$data['waktu'] = $this->jquery_model->select_time_read_where_is_not($date);
		$this->load->view('jquery/select_time',$data);
	}
	public function harga()
	{
		$price = $this->input->post('c');
		$harga = $this->jquery_model->harga($price);
		$data = array (
			'price' => $harga['hg_paket']
		);
		$this->load->view('jquery/harga',$data);
	}
	public function hapus()
	{
		$id = $this->input->post('a');
		$harga = $this->jquery_model->hapus($id);
	}
	public function tampilkan_edit()
	{
		$id = $this->input->post('a');
		$r = $this->jquery_model->tampilan_edit($id);
		$data = array(
			'n' => $r['nm_pendaftar'],
			'id' => $r['id_pendaftar'],
		);
		$this->load->view('jquery/tampilan_edit',$data);
	}
}

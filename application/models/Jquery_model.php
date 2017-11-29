<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jquery_model extends CI_Model {

	public function select_time_read_where_is_not($date)
	{
		$q = $this->db->query('SELECT * FROM tbl_waktu WHERE id_waktu NOT IN ( SELECT id_waktu FROM tbl_pendaftar WHERE dt_pendaftar = "'.$date.'" )');
		$r = $q->result_array();
		return $r;
	}
	public function harga($id)
	{
		$q = $this->db->get_where('tbl_paket', array('id_paket'=>$id));
		$r = $q->row_array();
		return $r;
	}
	public function hapus($id)
	{
		$this->db->where('id_pendaftar',$id);
		$this->db->delete('tbl_pendaftar');
	}
	public function tampilan_edit($id)
	{
		$q = $this->db->query('SELECT * FROM tbl_pendaftar WHERE id_pendaftar = '.$id.' ');
		$r = $q->row_array();
		return $r;
	}
}

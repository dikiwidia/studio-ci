<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator_model extends CI_Model {

	public function proses($data) {
		//$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
		$query = $this->db->get_where('tbl_pengguna', array('nm_pengguna' => $data['username'], 'pw_pengguna' => $data['password']), 1);
		if ($query->num_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	public function baca($username) {
		$query = $this->db->get_where('tbl_pengguna', array('nm_pengguna' => $username), 1);
		if ($query->num_rows() == 1) {
				return $query->result();
		} else {
			return FALSE;
		}
	}
	public function baca_register() {
		$q = $this->db->query('SELECT * FROM tbl_pendaftar ORDER BY id_pendaftar DESC');
		$r = $q->result_array();
		return $r;
	}
	public function edited($id,$data) {
		$this->db->where('id_pendaftar', $id);
		$this->db->update('tbl_pendaftar', $data);
	}
	public function payment($get_id,$data) {
		$this->db->where('id_pendaftar', $get_id);
		$this->db->update('tbl_pendaftar', $data);
	}
	public function cancel($get_id,$data) {
		$this->db->where('id_pendaftar', $get_id);
		$this->db->update('tbl_pendaftar', $data);
	}
}
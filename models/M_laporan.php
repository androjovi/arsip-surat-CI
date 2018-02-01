<?php 
class M_laporan extends CI_Model{
	
	function get_between($where,$table){
		$this->db->where($where);
		return $this->db->get($table); // Masih ada yang kurang
	}
	function get_columns($table){
		return $this->db->list_fields($table);
	}
}
<?php 
class M_core extends CI_Model
{
	function get_where($where,$table){
		return $this->db->get_where($table,$where);
	}
	function get_all($table){
		return $this->db->get($table);
	}
	function edit_data($where,$data,$table){
		$this->db->where($where);
		return $this->db->update($table,$data);
	}
	function delete_data($where,$table){
		return $this->db->delete($table,$where);
	}
	function insert_data($data,$table){
		return $this->db->insert($table,$data);
	}
}
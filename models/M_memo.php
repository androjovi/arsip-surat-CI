<?php 

class M_Memo extends CI_Model{
	function get_join($where,$table){
		$this->db->select('*');
		$this->db->from('tdisposisi');
		$this->db->join('tsuratmasuk', 'tdisposisi.no_surat = tsuratmasuk.no_surat');
		$this->db->where($where);
		return $this->db->get();
	}
}
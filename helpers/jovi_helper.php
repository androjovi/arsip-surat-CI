<?php 

function hashing($str){
	return md5($str);
}
function ambil($name){
	$z = &get_instance();
	return $z->input->post($name);
}
function echox($str){
	echo htmlentities($str, ENT_QUOTES, 'UTF-8');
}
function encrypt($str){
	return array($str);
}
function cek_data($data,$table){
	$z = &get_instance();
	if ($z->m_core->get_where($data,$table)->num_rows() > 0){
		return TRUE;
	}else{
		return FALSE;
	}
}

function notif($data){
	$CI = &get_instance();
	return $CI->db->get_where('tdisposisi', $data, 7);
	
}
<?php 

class Laporan extends CI_Controller{
	
	function __construt()
	{
		parent::__construct();
		
	}
	
	function index()
	{
		$this->load->view('laporan/vw_entry');
		//show_404();
	}
	
	function search_data()
	{
		$this->load->model('m_laporan');
		$bagian = ambil('bagian');
		$from = ambil('from');
		$to = ambil('to');
		
		switch ($bagian):
		case 'dis' : $cl = 'waktu'; $tb="tdisposisi";$cc="";break;
		case 'mas' : $cl = 'tanggal_kirim'; $tb = 'tsuratmasuk' ;$data['cs']="surat_masuk/show/";$data['cd']="surat_masuk/hapus/";break;
		case 'kel' : $cl = 'tanggal_kirim';$tb = 'tsuratkeluar' ;$data['cs']="surat_keluar/show/";$data['cd']="surat_keluar/hapus/";break;
		endswitch;
		$data['heading'] = "DARI TANGGAL ".$from." SAMPAI TANGGAL ".$to;
		$data['row'] = $this->m_laporan->get_between("$cl BETWEEN '$from' AND '$to'","$tb")->result();
		$columns = $this->m_laporan->get_columns($tb);
		
		$keys = $columns;
		$value = $columns;
		$data['columns'] = array_combine($keys,$value);
	
		
		$this->load->view('laporan/vw_list',$data);
	}
}
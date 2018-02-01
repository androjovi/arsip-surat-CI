<?php 
class Surat_keluar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
	}
	
	function index()
	{
		$data['query'] = $this->m_core->get_all('tsuratkeluar')->result();
		$this->load->view('kotak_keluar/vw_list',$data);
	}
	
	function entry()
	{
		$this->load->view('kotak_keluar/vw_entry');
	}
	
	function submit()
	{
		$this->form_validation->set_rules('no_agenda','No agenda','trim|required');
		$this->form_validation->set_rules('no_surat','No surat','trim|required');
		// $this->form_validation->set_rules('id','ID','trim|required');
		$this->form_validation->set_rules('jenis_surat','Jenis surat','trim|required');
		$this->form_validation->set_rules('pengirim','Pengirim','trim|required');
		$this->form_validation->set_rules('perihal','Perihal','trim|required');
		$this->form_validation->set_rules('tanggal_kirim','Tanggal kirim','trim|required');
		
			$config['upload_path']		= './uploads/';
			$config['allowed_types']	= 'pdf|docx|doc';
			$config['max_size']			= '20000';
		
			$this->load->library('upload',$config);
				if (!$this->upload->do_upload('file_surat') ){
					$this->session->set_flashdata('error',$this->upload->display_errors() );
					redirect('surat_masuk/masuk');
				}
			if ( $this->form_validation->run() ){
				$data = array(
					'no_agenda'			=> ambil('no_agenda'),
					'no_surat'			=> ambil('no_surat'),
					// 'id'				=> ambil('id'),
					'jenis_surat'		=> ambil('jenis_surat'),
					'tanggal_kirim'		=> ambil('tanggal_kirim'),
					'pengirim'			=> ambil('pengirim'),
					'perihal'			=> ambil('perihal'),
					'nama_file'			=> $this->upload->data('file_name'),
				);
					if ( $this->m_core->insert_data($data,'tsuratkeluar') ){
						$this->session->set_flashdata('success','Data berhasil DISIMPAN');
						redirect('surat_keluar');
					}else{
						$this->session->set_flashdata('danger','Data tidak berhasil DISIMPAN');
						redirect('surat_keluar');
					}
			}else{
				echo validation_errors();
			}
	}
	
	function hapus($id)
	{
		if ($this->m_core->delete_data(array('id' => $id), 'tsuratkeluar') ){
			$this->session->set_flashdata('success','Data berhasil DIHAPUS');
			redirect('surat_keluar');
		}
	}
	
	function show($id)
	{
		$data['query'] = $this->m_core->get_where(array('id' => $id),'tsuratkeluar' )->result();
		$this->load->view('kotak_keluar/vw_view',$data);
	}
	
	function submit_edit()
	{
		$this->form_validation->set_rules('no_agenda','No agenda','trim|required');
		$this->form_validation->set_rules('no_surat','No surat','trim|required');
		$this->form_validation->set_rules('id_surat','ID','trim|required');
		$this->form_validation->set_rules('jenis_surat','Jenis surat','trim|required');
		$this->form_validation->set_rules('pengirim','Pengirim','trim|required');
		$this->form_validation->set_rules('perihal','Perihal','trim|required');
		$this->form_validation->set_rules('tanggal_kirim','Tanggal kirim','trim|required');
		
			
			if ( $this->form_validation->run() ){
				$data = array(
					'no_agenda'			=> ambil('no_agenda'),
					'no_surat'			=> ambil('no_surat'),
					// 'id'				=> ambil('id'),
					'jenis_surat'		=> ambil('jenis_surat'),
					'tanggal_kirim'		=> ambil('tanggal_kirim'),
					'pengirim'			=> ambil('pengirim'),
					'perihal'			=> ambil('perihal'),
				);
					$config['upload_path']		= './uploads/';
					$config['allowed_types']	= 'pdf|docx|doc';
					$config['max_size']			= '20000';
		$t = array();
		$c = array();
						$this->load->library('upload',$config);
							if ($this->upload->do_upload('file_surat') ){
								$keys = array('nama_file');
								$val  = array($this->upload->data('file_name'));
								$c 	  = array_combine($keys,$val);
														
							}else{
								echo $this->upload->display_errors();
							}
				$t = $data + $c;
					if ( $this->m_core->edit_data(array('id',ambil('id_surat')),$t,'tsuratkeluar') ){
						$this->session->set_flashdata('success','Data berhasil DISIMPAN');
						redirect('surat_keluar');
					}else{
						$this->session->set_flashdata('danger','Data tidak berhasil DISIMPAN');
						redirect('surat_keluar');
					}
			}else{
				echo validation_errors();
			}
	}
}
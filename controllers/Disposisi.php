<?php 
class Disposisi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
	}
	
	function input_disposisi($id)
	{	
		$data['id'] = $id;
		$this->load->view('disposisi/vw_disposisi',$data);
		
	}
	
	function submit()
	{
		// INSERT BATCH MENGGUNAKAN ARRAY 3 DIMENSI 
		
		$this->form_validation->set_rules('keterangan','Catatan','trim|required');
		$this->form_validation->set_rules('tanggapan','Tanggapan','trim|required');
		
			if ( $this->form_validation->run() ){
				$get = $this->m_core->get_where(array('id' => ambil('id') ), 'tsuratmasuk')->row();
				
				for ($i = 0; $i < count($this->input->post('disposisi')); $i++){
						foreach ($this->input->post('disposisi') as $k){
							switch ($k){
								case "S" : $k = 1;break;
								case "M" : $k = 2;break;
							}
								$data[] = array(
								'no_disposisi'		=> rand(1,900*2),
								'no_agenda'			=> $get->no_agenda,
								'no_surat'			=> $get->no_surat,
								'kepada'			=> $k,
								'keterangan'		=> ambil('keterangan'),
								'status_surat'		=> false,
								'tanggapan'			=> ambil('tanggapan'),
					);
					
							
			}
					if ($this->db->insert_batch('tdisposisi',$data) /* $this->m_core->insert_data($data,'tdisposisi' )*/  ){
						$this->session->set_flashdata('success','Data berhasil DISIMPAN');
						redirect('surat_masuk/');
					}else{
						echo "Tidak berhasil";
					}
				
					break;
					
		}
				
					
			}else{
				
			}
			
		
	}
}

<?php 
class Auth extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		if (NULL !== $this->session->userdata('status_login') ){
			redirect('dashboard');
		}
		$this->load->view('page-login');
	}
	
	function _cek()
	{
		if (NULL !== $this->session->userdata('status_login') ){
			redirect('dashboard');
		}
		$info = array(
			'username' => $this->input->post('user'),
			'password' => hashing( $this->input->post('pass')),
		);
		
		$auth = $this->m_core->get_where($info,'tpetugas');
		
		if ( $auth->num_rows() == 1 ){
			$get = $auth->row();
			$sesi = array(
				'status_login' => 1,
				'data_user'    => $get->hak,
				'user'		   => $get->username,
			);
			
			$this->session->set_userdata($sesi);
			return true;
		}else{
			return false;
		}
			
	}
	
	function login()
	{
		if ( $this->_cek() ){
			redirect('dashboard');	
		}else{
			redirect('/');
		}
		
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	
	function tambah_user()
	{
		if ($this->session->userdata('data_user') == 1){
		$this->load->view('user/vw_adduser');
		}else{
			$this->session->set_flashdata('error','Anda tidak memiliki akses ke halaman ini');
			redirect('/');
		}
	}
	
	function proses_user()
	{
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('nama_depan','Nama depan','required|trim');
		$this->form_validation->set_rules('nama_belakang','Nama Belakang','required|trim');
		$this->form_validation->set_rules('passw','Password anda','required|trim');
		
			if ($this->form_validation->run() ){
				switch(ambil('hak')):
					case 'petugas' : $hak = 1;break;
					case 'admin1' : $hak = 2;break;
					case 'admin2' : $hak = 3;break;
					default : $hak = 0;break;	
				endswitch;
				$data = array(
					'username' 		=> ambil('username') ,
					'nama_depan' 	=> ambil('nama_depan') ,
					'nama_belakang' => ambil('nama_belakang') ,
					'password' 		=> hashing(ambil('passw')),
					'hak' 			=> $hak ,
				);
					if ($this->m_core->insert_data($data,'tpetugas')){
						$this->session->set_flashdata('success','User berhasil ditambah');
						redirect('auth/tambah_user');
					}
			}else{
				echo "Tidak berhasil";
			}
	}
}

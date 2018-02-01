<?php 
	/* 
	 * 		@package 		arsip_surat
	 * 		@author			Joviandro
	 *		@programmer		Joviandro
	 *
	 */ 


class Dashboard extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		
		if (!$this->session->userdata('status_login') ){
			redirect('/');
		}
	}
	
	function index()
	{
		$this->load->view('dashboard/dashboard');
	}
}

<?php 
	/**
	* 
	*/
	class Cpanel extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('cpanel_model');

			if (!$this->session->userdata('loged_in')) {
				redirect('auth','refresh');
			}
		}

		public function index()
		{
			$this->data['section']='Dashboard';
			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('cpanel');
			$this->load->view('footer');
		}

		
	}
?>

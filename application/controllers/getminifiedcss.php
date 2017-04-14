<?php 
	/**
	* 
	*/
	class Getminifiedcss extends CI_Controller
	{
		
		private $data = array();
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('minification_tool');
			$is_post = $this->input->server('REQUEST_METHOD') == 'POST';
			if (!$is_post) {
				redirect('pages/cssminify','refresh');
			}
		}

		public function index()
		{
			$css = $this->input->post('css');
			$output = $this->minification_tool->fn_minify_css($css, $comment = 2, $quote = 2);
			
			$this->output->set_content_type('text');
			$this->output->set_output($output);
			
		}

		public function download()
		{
			$css = $this->input->post('output_css');
			$this->load->helper('download');

			force_download('style.min.css', $css);
		}
	}
?>
<?php 
	/**
	* 
	*/
	class Getwords extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('lorem_model');
			$is_post=$this->input->server('REQUEST_METHOD') == 'POST'; // Is data sent over POST
			if (!$is_post) {
				redirect('pages/loremipsum','refresh');
			}
		}

		public function index()
		{
			$words=$this->lorem_model->getWords();
			$this->output->set_content_type('application/json');
			$this->output->set_output(json_encode($words));
		}

	}
?>

<?php 
	/**
	* 
	*/
	class Contact extends CI_Controller
	{
		private $data = array();
		function __construct()
		{
			parent::__construct();
			$is_post = $this->input->server('REQUEST_METHOD') == 'POST';
			if (!$is_post) {
				redirect('pages/contact','refresh');
			}
		}

		public function send()
		{
			$name = $this->input->post('contact_name');
			$lastname = $this->input->post('contact_lastname');
			$mail = $this->input->post('contact_mail');
			$message = $this->input->post('contact_message');

			$this->form_validation->set_rules('contact_mail', 'Email', 'trim|required|valid_email|');
			$this->form_validation->set_rules('contact_name', 'Name', 'trim|required|min_length[3]|max_length[20]');
			$this->form_validation->set_rules('contact_lastname', 'Last Name', 'trim|required|min_length[3]|max_length[20]');
			$this->form_validation->set_rules('contact_message', 'Message', 'trim|required|min_length[20]|max_length[400]');

			if ($this->form_validation->run() == FALSE) {
				$this->output->set_content_type('text');
				$this->form_validation->set_error_delimiters('<p>', '</p></br>');
				$this->output->set_output(validation_errors());
			} else {
				$this->load->library('email');
				
				$config['protocol'] = 'smtp';
				$config['smtp_port'] = '465';
				$config['smtp_host'] = 'ssl://mail.petrovicstefan.rs';
				$config['smtp_user'] = 'cssgalore@petrovicstefan.rs';
				$config['smtp_pass'] = 'dpidesign1995';
				$config['wordwrap'] = TRUE;

				$this->email->initialize($config);

				$this->email->from($mail, $name." ".$lastname);
				$this->email->to('cssgalore@petrovicstefan.rs');
				$this->email->cc('dotperinchdesign@gmail.com');
				
				$this->email->subject('CSS Galore Contact Form');
				$this->email->message($message);
				
				if (!$this->email->send())
				{
				    $this->output->set_content_type('text');
					$this->output->set_output("Ooops! We encountered an error. Please try again!");
				}
				else{
					$this->output->set_content_type('text');
					$this->output->set_output("Your message was sent successfuly!");
				}
			}
		}
	}
?>
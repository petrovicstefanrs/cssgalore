<?php 
	/**
	* 
	*/
	class pages extends CI_Controller
	{
		private $data;

		function __construct()
		{
			parent::__construct();
		}

		/* Misc Pages */

		public function index()
		{
			$this->data['section']='home';
			$this->load->view('head', $this->data);
			$this->load->view('header', $this->data);
			$this->load->view('nav', $this->data);
			$this->load->view('home');
			$this->load->view('footer');
		}

		public function about()
		{
			$this->data['section']='about';
			$this->load->view('head', $this->data);
			$this->load->view('header', $this->data);
			$this->load->view('nav', $this->data);
			$this->load->view('about');
			$this->load->view('footer');
		}

		public function changelog()
		{
			$this->load->model('changelog_model');

			$this->data['logs']=$this->changelog_model->getChangeLog();
			$this->data['logs_info']=$this->changelog_model->getChangeLogInfo();
			$this->data['section']='change log';

			$this->load->view('head', $this->data);
			$this->load->view('header', $this->data);
			$this->load->view('nav', $this->data);
			$this->load->view('changelog');
			$this->load->view('footer');
		}

		public function contact()
		{
			$this->data['section']='contact';
			$this->load->view('head', $this->data);
			$this->load->view('header', $this->data);
			$this->load->view('nav', $this->data);
			$this->load->view('contact');
			$this->load->view('footer');
		}

		/* Text Styling Generators */

		public function multiplecolumns()
		{
			$this->data['section']='multiple columns';
			$this->data['presection']='text styling';
			$this->load->view('head', $this->data);
			$this->load->view('header', $this->data);
			$this->load->view('nav', $this->data);
			$this->load->view('multiplecolumns');
			$this->load->view('footer');
		}

		public function textshadow()
		{
			$this->data['section']='text shadow';
			$this->data['presection']='text styling';
			$this->load->view('head', $this->data);
			$this->load->view('header', $this->data);
			$this->load->view('nav', $this->data);
			$this->load->view('textshadow');
			$this->load->view('footer');
		}

		/* Div Styling Generators */

		public function outline()
		{
			$this->data['section']='outline';
			$this->data['presection']='div styling';
			$this->load->view('head', $this->data);
			$this->load->view('header', $this->data);
			$this->load->view('nav', $this->data);
			$this->load->view('outline');
			$this->load->view('footer');
		}

		public function borderradius()
		{
			$this->data['section']='border radius';
			$this->data['presection']='div styling';
			$this->load->view('head', $this->data);
			$this->load->view('header', $this->data);
			$this->load->view('nav', $this->data);
			$this->load->view('borderradius');
			$this->load->view('footer');
		}

		public function boxshadow()
		{
			$this->data['section']='box shadow';
			$this->data['presection']='div styling';
			$this->load->view('head', $this->data);
			$this->load->view('header', $this->data);
			$this->load->view('nav', $this->data);
			$this->load->view('boxshadow');
			$this->load->view('footer');
		}

		public function transform()
		{
			$this->data['section']='transform';
			$this->data['presection']='div styling';
			$this->load->view('head', $this->data);
			$this->load->view('header', $this->data);
			$this->load->view('nav', $this->data);
			$this->load->view('transform');
			$this->load->view('footer');
		}

		public function transition()
		{
			$this->data['section']='transition';
			$this->data['presection']='div styling';
			$this->load->view('head', $this->data);
			$this->load->view('header', $this->data);
			$this->load->view('nav', $this->data);
			$this->load->view('transition');
			$this->load->view('footer');
		}
	}

?>


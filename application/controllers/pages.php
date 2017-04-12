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
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('home');
			$this->load->view('footer');
		}

		public function about()
		{
			$this->data['section']='about';
			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
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
			$this->load->view('header');
			$this->load->view('nav');
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
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('multiplecolumns');
			$this->load->view('footer');
		}

		public function textshadow()
		{
			$this->data['section']='text shadow';
			$this->data['presection']='text styling';
			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('textshadow');
			$this->load->view('footer');
		}

		/* Div Styling Generators */

		public function outline()
		{
			$this->data['section']='outline';
			$this->data['presection']='div styling';
			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('outline');
			$this->load->view('footer');
		}

		public function borderradius()
		{
			$this->data['section']='border radius';
			$this->data['presection']='div styling';
			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('borderradius');
			$this->load->view('footer');
		}

		public function boxshadow()
		{
			$this->data['section']='box shadow';
			$this->data['presection']='div styling';
			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('boxshadow');
			$this->load->view('footer');
		}

		public function transform()
		{
			$this->data['section']='transform';
			$this->data['presection']='div styling';
			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('transform');
			$this->load->view('footer');
		}

		public function transition()
		{
			$this->data['section']='transition';
			$this->data['presection']='div styling';
			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('transition');
			$this->load->view('footer');
		}

		/* Color Styling Generators */

		public function gradient()
		{
			$this->data['section']='gradient';
			$this->data['presection']='color styling';
			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('gradient');
			$this->load->view('footer');
		}

		public function gradientcollection()
		{
			$this->load->library('pagination');
			$this->load->model('gradient_model');

			$config['base_url'] = base_url().'pages/gradientcollection';
			$config['total_rows'] = $this->gradient_model->getGradientNumber();
			$config['per_page'] = 30;
			$config['uri_segment'] = 3;
			$config['num_links'] = 2;
			$config['anchor_class'] = 'class="waves-effect waves-blue"';
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li class="waves-effect waves-blue"><a href="#!">';
			$config['first_tag_close'] = '</a></li>';
			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li class="waves-effect waves-blue">';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = '<i class="material-icons">chevron_right</i>';
			$config['next_tag_open'] = '<li class="waves-effect waves-blue">';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '<i class="material-icons">chevron_left</i>';
			$config['prev_tag_open'] = '<li class="waves-effect waves-blue">';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#!">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li class="waves-effect waves-blue">';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			
			$page= ($this->uri->segment(3)) ? intval($this->uri->segment(3)) : 0;

			$this->data['gradients'] = $this->gradient_model->getGradients($config['per_page'],$page);
			$this->data['pagination'] = $this->pagination->create_links();
		
			$this->data['section']='gradient collection';
			$this->data['presection']='color styling';

			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('gradientcollection');
			$this->load->view('footer');
		}

		public function sitemap()
		{
			$this->load->model('sitemap_model');
			$this->data['sections'] = $this->sitemap_model->getSections();
			$this->data['subsections'] = $this->sitemap_model->getSubSections();
		
			$this->data['section']='sitemap';

			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('sitemap');
			$this->load->view('footer');
		}

		public function loremipsum()
		{
			$this->data['section']='lorem ipsum';
			$this->data['presection']='css tools';
			$this->load->view('head', $this->data);
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('loremipsum');
			$this->load->view('footer');
		}

		// public function cssminify()
		// {
		// 	$this->data['section']='minify';
		// 	$this->data['presection']='css tools';
		// 	$this->load->view('head', $this->data);
		// 	$this->load->view('header');
		// 	$this->load->view('nav');
		// 	$this->load->view('cssminify');
		// 	$this->load->view('footer');
		// }
	}

?>

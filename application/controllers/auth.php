<?php 
	/**
	* 
	*/
	class Auth extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('cpanel_model');
		}

		public function index()
		{
			
			if ($this->session->userdata('loged_in')) {
				redirect('cpanel','refresh');
			}
			else{
				$this->data['section']='cpanel login';
				if ($this->session->flashdata('login_err')){
					$this->data['login_err']=true;
				}
				else{
					$this->data['login_err']=false;
				}

				$this->load->view('head', $this->data);
				$this->load->view('header');
				$this->load->view('nav');
				$this->load->view('cpanellogin');
				$this->load->view('footer');
			}
			
		}

		public function login()
		{
			if ($this->session->userdata('loged_in')) {
				redirect('cpanel','refresh');
			}
			else{
				$is_post=$this->input->server('REQUEST_METHOD') == 'POST'; // Is data sent over POST
				if ($is_post) {	// IF yes contiunue validation
					$btn_login = $this->input->post('cpanel_btn_login');
					if ($btn_login!="") {	// If submit button has a value CONTINUE

						$uname = $this->input->post('cpanel_username');
						$pass = $this->input->post('cpanel_password');
						
						$db_res=$this->cpanel_model->login($uname,$pass);

						if($db_res){
							foreach ($db_res as $res) {
								$sessiondata = array(
									'user_role' => $res->role_name,
									'loged_in' => true,
									'username' => $res->user_name
								);
							}
							
							$this->session->set_userdata($sessiondata);

							if ($this->session->userdata('user_role')) {
								switch ($this->session->userdata('user_role')) {
									case 'admin':
										redirect('cpanel','refresh');
										break;
									
									default:
										redirect('auth','refresh');
										break;
								}
							}
						}
						else{
							$this->session->set_flashdata('login_err', true);
							redirect('auth','refresh');
						}
					}
					else{
						echo "Ooooops! Well this is embarrassing! :D";
					}
				}
				else{
					redirect('auth','refresh');
				}
			}
		}

		public function logout()
		{
			if ($this->session->userdata('loged_in')) {
				$udata=$this->session->all_userdata();
				$this->session->unset_userdata($udata);
				$this->session->sess_destroy();
				redirect('','refresh');
			}
			else{
				redirect('','refresh');
			}
		}
	}
?>
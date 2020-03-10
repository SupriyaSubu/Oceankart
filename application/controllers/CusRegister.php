<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class CusRegister extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('Register_m');
			$this->load->library('session');
		}

		function index(){
			
			$this->load->view('loginregister/UserRegister');
		}

		/*function logon(){
			$this->load->view('layout/header');
			$this->load->view('loginregister/Clogin');
			$this->load->view('layout/footer');
		}*/
		
		/*function reg(){
			
			$this->load->view('loginregister/UserRegister');
		}*/
		function goimage(){
			
			$this->load->view('uploadimage');
		}

		function gocart(){
			
			$this->load->view('loginregister/cart');
		}

		function goindex(){
			
			$this->load->view('loginregister/index');
		}

		function gocateg(){
			
			$this->load->view('loginregister/category');
		}
		function gocheckout(){
			
			$this->load->view('loginregister/checkout');
		}

		function registration(){

		if($this->input->post('creg'))
		{
				$data['cname']=$this->input->post('cname');
				$data['cemail']=$this->input->post('cemail');
				$data['cpass']=md5($this->input->post('cpass'));
				$this->load->model('Register_m');
				$status=$this->Register_m->insertcus($data);
				if($status==true){
					redirect('CusRegister/logon');
					
					
				}
				else{
					echo 'Registration Failed';
				
				$this->load->view('CusRegister/reg');
			}
		}
	}	

		function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('cemail', 'Email Address', 'required');
		$this->form_validation->set_rules('cpass', 'Password', 'required');
		if($this->form_validation->run() == TRUE){
				$emailid = $this->input->post('cemail');
				$pwd = $this->input->post('cpass');

				$this->load->model('Register_m');
				if($this->Register_m->login1($emailid, md5($pwd))){
					$session_data = array(
						'emailid' => $emailid
					);
					$this->session->set_userdata($session_data);
					redirect(base_url() . 'CusRegister/dashboard');
					}
					else
					{
						$this->session->set_flashdata('error','Invalid username or password');
						redirect(base_url() . 'CusRegister/registration');
					}
				}
		else
		{
			$this->logon();
		}
	}

function dashboard(){
		if($this->session->userdata('emailid') != ''){


					/*echo '<h2>Welcome - '.$this->session->userdata('emailid').'</h2>';
					echo '<label><a href="'. base_url() . 'CusRegister/logout">Logout</a></label>';*/
					$this->load->view('loginregister/index');

		}
		else
		{
			redirect(base_url() . 'CusRegister/logon');
		}
					
	}

	function logout(){
		$this->session->unset_userdata('emailid');
		redirect(base_url() . 'CusRegister/logon');
	}


	}
?>
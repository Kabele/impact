<?php
	class C_account extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function login(){
			$this->load->model('member','mb');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$email = $_POST['email'];
				$password = $_POST['password'];

				$data['object'] = $this->mb->check_by_email_password($email,$password);
				if($data['object']){
					$user=array(
					   'member_id'=>$data['object']->member_id,
					   'role_id'=>$data['object']->role_id,
					   'logged_in'=>TRUE
					);
				$this->session->set_userdata($user);
					redirect('core/c_account/redirect');
				}
				
					$data['message'] = 'Email Or Password is Incorrect.';	
			}
			$this->load->view('core/member/login',$data);
		}
		

		function redirect(){
		
			if($this->session->userdata('role_id')==3)
				redirect('admin');			
			if($this->session->userdata('role_id')==4)
				redirect('registration');
			
		}
	
		function logout(){
		
		    $this->session->sess_destroy();
			redirect('core/c_account/login');
		}

		function denied(){
			$this->load->view('core/member/denied');
		}
	}
	
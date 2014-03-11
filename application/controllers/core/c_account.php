<?php
	class C_account extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function login(){
			$this->load->model('member','mb');
			$this->form_validation->set_rules('email', 'Email', 'required[member.email]');
			$this->form_validation->set_rules('password', 'Password', 'required[member.password]');
			
			
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$email = $_POST['email'];
				$password = $_POST['password'];

				$data['object'] = $this->mb->check_by_email_password($email,$password);
				if($data['object']){
					$data['message'] = 'Email And Password Is correct..';
					redirect('core/memberpage',$data);
				}
				
					$data['message'] = 'Email Or Password is Incorrect.';	
			}
			$this->load->view('core/member/login',$data);
		}
	}
	
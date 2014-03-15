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
					redirect('admin');
				}
				
					$data['message'] = 'Email Or Password is Incorrect.';	
			}
			$this->load->view('core/member/login',$data);
		}
	}
	
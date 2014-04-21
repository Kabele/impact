<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in') || $this->session->userdata('role_id')!=3)
		  redirect('core/c_account/login');
		
		$this->template->write_view('scripts','template/scripts');
		$this->template->write_view('header','template/header');
		$this->template->write_view('navigation','template/admin_nav');
		$this->template->write_view('sidebar','template/admin_sidebar');
		$this->template->write_view('footer','template/footer');
	}

	public function index()
	{
		$this->template->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php
	function authenticate($module_id,$obj){
		$role_id=$obj->session->userdata('role_id');
		$obj->load->model('permission','mb5');
		$result=$obj->mb5->check_by_roleid_and_moduleid($role_id,$module_id);
		if($result==FALSE)
			redirect('core/c_account/denied');
		return True;
	}
?>
<?php
	class C_member extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add($eid){
		    $this->load->model('event','cm');
			$data['event'] = $this->cm->find_by_id($eid);
			if(!$data['event'])
			redirect('core/c_event/viewall');
			$this->load->model('member','mb');
			$this->form_validation->set_rules('college_id', 'College Id', 'required');
			$this->form_validation->set_rules('member_name', 'Member name', 'required');
			$this->form_validation->set_rules('branch_id', 'Branch Id', 'required');
			$this->form_validation->set_rules('year', 'Year', 'required|numeric');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('contact_no', 'Contact Number', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email id', 'required|valid_email');
			$this->form_validation->set_rules('committee_id', 'Committee Id', 'required');
			$this->form_validation->set_rules('position_id', 'Position Id', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('role_id', 'Role Id', 'required');
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->college_id = $_POST['college_id'];
				$this->mb->member_name = $_POST['member_name'];
				$this->mb->branch_id = $_POST['branch_id'];
				$this->mb->year = $_POST['year'];
				$this->mb->gender = $_POST['gender'];
				$this->mb->dob = $_POST['dob'];
				$this->mb->contact_no = $_POST['contact_no'];
				$this->mb->email = $_POST['email'];
				$this->mb->photo = @$_POST['photo'];
				$this->mb->event_id = $eid;
				$this->mb->position_id = $_POST['position_id'];
				$this->mb->committee_id = $_POST['committee_id'];
				$this->mb->password = $_POST['password'];
				$this->mb->role_id = $_POST['role_id'];
				$this->mb->status = $_POST['status'];
				$this->mb->degree_id = $_POST['degree_id'];
								
				$this->mb->save();
				
				$data['message'] = 'Member created successfully';
			}
			$this->load->model('branch','mb1');
			$this->load->model('position','mb2');
			$this->load->model('committee','mb3');
			$this->load->model('degree','mb5');
			$this->load->model('role','mb6');
			
			$data['branches'] = $this->mb1->find_all();
			$data['positions'] = $this->mb2->find_all();
			$data['committees'] = $this->mb3->find_all();
			$data['degrees'] = $this->mb5->find_all();
			$data['roles'] = $this->mb6->find_all();
			if(empty($data['branches'])){
			$data['message'] = 'No branch exits. Create branch.';
			   $this->load->view('core/branch/add',$data);
			}
			elseif(empty($data['positions'])){
			$data['message'] = 'No position exits. Create position.';
			   $this->load->view('core/position/add',$data);
			}
			elseif(empty($data['committees'])){
			$data['message'] = 'No committee exits. Create committee.';
			$this->load->view('core/committee/add',$data);
			}
			
			elseif(empty($data['degrees'])){
			$data['message'] = 'No degree exits. Create degree.';
			   $this->load->view('core/degree/add',$data);
			}
			elseif(empty($data['roles'])){
			$data['message'] = 'No role exits. Create role.';
			   $this->load->view('core/role/add',$data);
			}
			$this->load->view('core/member/add',$data);
			}
		function edit($id){
			$this->load->model('member','mb');
			$data['message'] = '';
			$data['object'] = $this->mb->find_by_id($id);
			if($data['object']){
			$this->form_validation->set_rules('college_id', 'College Id', 'required');
			$this->form_validation->set_rules('member_name', 'Member name', 'required');
			$this->form_validation->set_rules('branch_id', 'Branch Id', 'required');
			$this->form_validation->set_rules('year', 'Year', 'required|numeric');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
			$this->form_validation->set_rules('contact_no', 'Contact Number', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email id', 'required|valid_email');
			$this->form_validation->set_rules('position_id', 'Position Id', 'required');
			$this->form_validation->set_rules('committee_id', 'Committee Id', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('role_id', 'Role Id', 'required');
			$this->form_validation->set_rules('degree_id', 'Degree Id', 'required');
			
				
				
				if ($this->form_validation->run() == TRUE){
					 
				 $this->mb->member_id = $data['object']->member_id;	
			    $this->mb->college_id = $_POST['college_id'];
				$this->mb->member_name = $_POST['member_name'];
				$this->mb->branch_id = $_POST['branch_id'];
				$this->mb->year = $_POST['year'];
				$this->mb->gender = $_POST['gender'];
				$this->mb->dob = $_POST['dob'];
				$this->mb->contact_no = $_POST['contact_no'];
				$this->mb->email = $_POST['email'];
				$this->mb->photo = @$_POST['photo'];
				$this->mb->event_id = $data['object']->event_id;
				$this->mb->position_id = $_POST['position_id'];
				$this->mb->committee_id = $_POST['committee_id'];
				$this->mb->password = $_POST['password'];
				$this->mb->role_id = $_POST['role_id'];
				$this->mb->status = $_POST['status'];
				$this->mb->degree_id = $_POST['degree_id'];
					$this->mb->save();
					$data['message'] = 'Members updated successfully updated successfully';
					$data['object'] = $this->mb;
				}
			$this->load->model('branch','mb1');
			$this->load->model('position','mb2');
			$this->load->model('committee','mb3');
			$this->load->model('degree','mb5');
			$this->load->model('role','mb6');
			
			$data['branches'] = $this->mb1->find_all();
			$data['positions'] = $this->mb2->find_all();
			$data['committees'] = $this->mb3->find_all();
			$data['degrees'] = $this->mb5->find_all();
			$data['roles'] = $this->mb6->find_all();
			
			$this->load->view('core/member/edit',$data);
		}
			else{
				$data['message'] = 'No such member exists. Create it!';	
				$this->load->view('core/member/add',$data);
			}
			}
		function viewall(){
			$this->load->model('branch','mb1');
			$this->load->model('position','mb2');
			$this->load->model('committee','mb3');
			$this->load->model('event','mb4');
			$this->load->model('degree','mb5');
			$this->load->model('role','mb6');
		    $this->load->model('member','mb');
			$data['objects'] = $this->mb->find_all();
			$data['model_branch'] = $this->mb1;
			$data['model_position'] = $this->mb2;
			$data['model_committee'] = $this->mb3;
			$data['model_event'] = $this->mb4;
			$data['model_degree'] = $this->mb5;
			$data['model_role'] = $this->mb6;
			
		if(!empty($data['objects']))
			{
			$this->load->view('core/member/viewall',$data);
			}
			else{
				$data['message'] = 'No member exists. Create one!';	
			$this->load->view('core/member/add',$data);
			
			$data['branches'] = $this->mb1->find_all();
			$data['positions'] = $this->mb2->find_all();
			$data['committees'] = $this->mb3->find_all();
			$data['events'] = $this->mb4->find_all();
			$data['degrees'] = $this->mb5->find_all();
			$data['roles'] = $this->mb6->find_all();
			
				if(empty($data['branches'])){
			$data['message'] = 'No branch exits. Create branch.';
			   $this->load->view('core/branch/add',$data);
			}
			elseif(empty($data['positions'])){
			$data['message'] = 'No position exits. Create position.';
			   $this->load->view('core/position/add',$data);
			}
			elseif(empty($data['committees'])){
			$data['message'] = 'No committee exits. Create committee.';
			$this->load->view('core/committee/add',$data);
			}
			elseif(empty($data['events'])){
			$data['message'] = 'No event exits. Create event.';
			$this->load->view('core/event/add',$data);
			}
			
			elseif(empty($data['degrees'])){
			$data['message'] = 'No degree exits. Create degree.';
			   $this->load->view('core/degree/add',$data);
			}
			elseif(empty($data['roles'])){
			$data['message'] = 'No role exits. Create role.';
			   $this->load->view('core/role/add',$data);
			}		
			}
			
				}
		function delete($id){
			$this->load->model('member','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_member/viewall');
		}
			}
	
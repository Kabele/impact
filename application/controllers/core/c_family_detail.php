<?php
	class C_family_detail extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add($eid=-1){
			$this->load->model('alumni_info','mv');
			$data['alumni_info']=$this->mv->find_by_id($eid);
			
			
			if(!$data['alumni_info'])
			redirect('core/c_family_detail/viewall');
			
			$this->load->model('family_detail','mb');
			$this->form_validation->set_rules('alumni_id', 'Alumni id', 'numeric');
			$this->form_validation->set_rules('name_of_member ', 'Name of Member', 'alpha[family_detail.name_of_member]');
			$this->form_validation->set_rules('relation_id', 'Relation id', 'required');
			$this->form_validation->set_rules('occupation', 'Occupation', 'required|alpha[family_detail.occupation]');
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->alumni_id = $eid;
				$this->mb->name_of_member = $_POST['name_of_member'];
				$this->mb->relation_id = $_POST['relation_id'];
				$this->mb->occupation = $_POST['occupation'];
				$this->mb->save();
				
				$data['message'] = 'family details created successfully';
			}
			
			$this->load->model('relation','rl');
			$data['relations'] = $this->rl->find_all();
			
			if(!empty($data['relations'])){
			$this->load->view('core/family_detail/add',$data);
			}
			else
			{
			$this->load->view('core/relation/add',$data);
			}
			
		}
		
		function edit($id){
			$this->load->model('family_detail','mb');
			
			$data['message'] = '';
			
			
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				 $this->form_validation->set_rules('family_id', 'family id', 'required');
			     $this->form_validation->set_rules('alumni_id', 'Alumni id', 'required');
			     $this->form_validation->set_rules('name_of_member ', 'Name of Member', 'alpha_dash[family_detail.name_of_member]');
			     $this->form_validation->set_rules('relation_id', 'Relation id', 'required');
			     $this->form_validation->set_rules('occupation', 'Occupation', 'required|alpha[family_detail.occupation]');
			
				
				if ($this->form_validation->run() == TRUE){
					
					$this->mb->family_id = $_POST['family_id'];
					$this->mb->alumni_id = $_POST['alumni_id'];
					$this->mb->name_of_member = $_POST['name_of_member'];
					$this->mb->relation_id = $_POST['relation_id'];
					$this->mb->occupation = $_POST['occupation'];
					$this->mb->save();
					
					$data['message'] = 'family details updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				//$this->load->view('core/family_detail/edit',$data);
			}
			$this->load->model('relation','rl');
			$data['relations'] = $this->rl->find_all();
			
			if(!empty($data['relations'])){
			$this->load->view('core/family_detail/edit',$data);
			}
			else
			{
			$this->load->view('core/relation/add',$data);
			}
			/*else{
				$data['message'] = 'No such family details exists. Create it!';	
				$this->load->view('core/family_detail/add',$data);
			}*/
			
		}
		
		function viewall(){
			$this->load->model('family_detail','mb');
			$this->load->model('relation','rl');
			
			$data['family_relation'] = $this->rl;
			$data['family_details'] = $this->mb;
			
			$data['objects'] = $this->mb->find_all();
			
			//$this->load->model->('relation','rl');
			//$data['relation'] = $this->rl;
			
			
			if(!empty($data['relations']))
			{
			$data['message'] = 'No relation exists. Create one!';	
				$this->load->view('core/relation/add',$data);
				
			}
			elseif(empty($data['objects'])){
				$data['message'] = 'No family detail exists. Create one!';	
				$this->load->view('core/family_detail/add',$data);
			}
		  else{
				$this->load->view('core/family_detail/viewall',$data);
			}
			
		}
		
		function delete($id){
			$this->load->model('family_detail','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_family_detail/viewall');
		}
		
	}
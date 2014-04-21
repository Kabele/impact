 <?php
	class C_other_qualification_detail extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add($aid=-1){
			$this->load->model('alumni_info','ev');
			$data['alumni_info'] = $this->ev->find_by_id($aid);
			if(!$data['alumni_info'])
				redirect('core/c_alumni_info/viewall');
			
			$this->load->model('other_qualification_detail','mb');
			
			$this->form_validation->set_rules('name_of_institute', 'Name Of Institute', 'required|[other_qualification_detail.name_of_institute]');
			$this->form_validation->set_rules('course', 'Course', 'required|[other_qualification_detail.course]');
			$this->form_validation->set_rules('year_of_passing', 'Year Of Passing', 'required|numeric|[other_qualification_detail.year_of_passing]');
			$this->form_validation->set_rules('extras', 'Extras', 'required|[other_qualification_detail.extras]');
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->alumni_id = $aid;
				$this->mb->name_of_institute = $_POST['name_of_institute'];
				$this->mb->course = $_POST['course'];
				$this->mb->year_of_passing = $_POST['year_of_passing'];
				$this->mb->extras = $_POST['extras'];
				$this->mb->save();
				
				$data['message'] = 'Added successfully';
			}
			
			$this->load->view('core/other_qualification_detail/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('other_qualification_detail','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				$this->form_validation->set_rules('name_of_institute', 'Name Of Institute', 'required|[other_qualification_detail.name_of_institute]');
				$this->form_validation->set_rules('course', 'Course', 'required|[other_qualification_detail.course]');
				$this->form_validation->set_rules('year_of_passing', 'Year Of Passing', 'required|numeric|[other_qualification_detail.year_of_passing]');				
				$this->form_validation->set_rules('extras', 'Extras', 'required|[other_qualification_detail.extras]');

				if ($this->form_validation->run() == TRUE){
					$this->mb->oq_id = $id;
					$this->mb->alumni_id = $data['object']->alumni_id;
					$this->mb->name_of_institute = $_POST['name_of_institute'];
					$this->mb->course = $_POST['course'];
					$this->mb->year_of_passing = $_POST['year_of_passing'];
					$this->mb->extras = $_POST['extras'];
					$this->mb->save();
					
					$data['message'] = 'updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/other_qualification_detail/edit',$data);
			}
			else{
				$data['message'] = 'No such record exists. Create it!';	
				$this->load->view('core/other_qualification_detail/add',$data);
			}
			
		}
                   

                   function view($id){
			$this->load->model('other_qualification_detail','mb');
				
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			

					$this->mb->oq_id = $id;
					$this->mb->alumni_id = $data['object']->alumni_id;
					$this->mb->oq_id=$data['object']->oq_id;
					$this->mb->name_of_institute = $data['object']->name_of_institute;
					$this->mb->course = $data['object']->course;
					$this->mb->year_of_passing = $data['object']->year_of_passing;
					$this->mb->extras = $data['object']->extras;
					//$this->mb->save();
					
					//$data['message'] = 'updated successfully';
					
					$data['object'] = $this->mb;
						
				$this->load->view('core/other_qualification_detail/view',$data);
			
			
			
		}


































		
		function viewall(){
			$this->load->model('other_qualification_detail','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/other_qualification_detail/viewall',$data);
			}
			else{
				$data['message'] = 'No records exists. Create one!';	
				$this->load->view('core/other_qualification_detail/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('other_qualification_detail','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_other_qualification_detail/viewall');
		}
		
	}

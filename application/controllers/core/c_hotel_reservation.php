<?php
	class C_Hotel_reservation extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add($erid=-1 , $ehid=-1){
			$this->load->model('event_hotel','eh');
			$data['event_hotel'] = $this->eh->find_by_id($ehid);
			
			$this->load->model('event_registration','ev');
			$data['event_registration'] = $this->ev->find_by_id($erid);
			
			if(!$data['event_hotel'])
				redirect('core/c_event_hotel/viewall');
			if(!$data['event_registration'])
				redirect('core/c_event_hotel/viewall');
			
			$this->load->model('hotel_reservation','mb');
			$this->form_validation->set_rules('roomno', 'Room No', 'required|numeric');
			$this->form_validation->set_rules('checkin', 'Check In', 'required');
			$this->form_validation->set_rules('checkout', 'Check Out', 'required');
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->eventhotel_id = $ehid;
				$this->mb->eventreg_id = $erid;
				$this->mb->roomno = $_POST['roomno'];
				$this->mb->checkin = $_POST['checkin'];
				$this->mb->checkout = $_POST['checkout'];
				$this->mb->comment = $_POST['comment'];
				$this->mb->save();
				
				$data['message'] = ' Hotel reserved successfully';
			}
			
			$this->load->view('core/hotel_reservation/add',$data);
			
		
		}
		
		function edit($id){
			   
			$this->load->model('hotel_reservation','mb');
			$data['message'] = '';
			$data['hotel_reservation'] = $this->mb->find_by_id($id);
			if($data['hotel_reservation']){
				
			$this->form_validation->set_rules('roomno', 'Room No', 'required|numeric');
			$this->form_validation->set_rules('checkin', 'Check In', 'required');
			$this->form_validation->set_rules('checkout', 'Check Out', 'required');
				
				
				if ($this->form_validation->run() == TRUE){
					
					$this->mb->hotelres_id = $id;
					$this->mb->eventhotel_id = $data['hotel_reservation']->eventhotel_id;

					$this->mb->eventreg_id = $data['hotel_reservation']->eventreg_id;
					$this->mb->roomno = $_POST['roomno'];
					$this->mb->checkin = $_POST['checkin'];
					$this->mb->checkout = $_POST['checkout'];
					$this->mb->comment = $_POST['comment'];
					$this->mb->save();
					$data['message'] = 'Hotel information edited successfully';
					$data['hotel_reservation'] = $this->mb;
					
				}
				$this->load->view('core/hotel_reservation/edit',$data);
			}
			else{
				$data['message'] = 'No such hotel reserved. Register it!';	
				$this->load->view('core/hotel_reservation/add',$data);
			}
			
		}
		
		function viewall($erid=-1, $ehid=-1){
			$this->load->model('event_hotel','eh');
			$data['event_hotel'] = $this->eh->find_by_id($ehid);
			
			
		
			$this->load->model('event_registration','ev');
			$data['event_registration'] = $this->ev->find_by_id($erid);
			
			
			/*
			if(!$data['event_hotel'])
				redirect('core/c_event_hotel/viewall');
			if( !$data['event_registration']);
				redirect('core/c_event_hotel/viewall');
				*/
			$this->load->model('hotel_reservation','mb');
			$data['objects'] = $this->mb->find_by_hotel_regevent($erid, $ehid);
			
			//$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/hotel_reservation/viewall',$data);
			}
			else{
				redirect('core/c_event/viewall');
			}
		}
		
		function delete($id){
			$this->load->model('hotel_reservation','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/hotel_reservation/viewall');
		}
		
	}
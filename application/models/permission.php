<?php
class Permission extends CI_Model{
		var $permission_id;
		var $role_id;
		var $module_id;
	   
			
		static $tablename = 'permission';
		static $tableid = 'permission_id';
		
		function check_by_roleid_and_moduleid($role_id,$module_id){
			$resultset=$this->db->get_where(self::$tablename,array('role_id'=>$role_id,'module_id'=>$module_id),1);
			if($resultset->num_rows()==1)
				return TRUE;
			else
				return FALSE;
		
		}


		function find_by_id($id){
			$tableid = self::$tableid;
			$resultset = $this->db->get_where(self::$tablename,array($tableid=>$id),1);
			if($resultset->num_rows()==1)
				return array_shift($resultset->result(get_class($this)));
			return false;
		}
		
		function find_all(){
			$resultset = $this->db->get(self::$tablename);
			return $resultset->result(get_class($this));
		}
		
		
		function save(){
		$tableid = self::$tableid;
			if(isset($this->$tableid)&&$this->$tableid!=''&&$this->$tableid!=0)
				$this->update();
			else
				$this->insert();
		}
		private function insert(){
			$this->db->insert(self::$tablename,$this);
		}
		
		private function update(){
		$tableid = self::$tableid;
			$this->db->where($tableid,$this->$tableid);
			$this->db->update(self::$tablename,$this);
		}
		
		function delete(){
		$tableid = self::$tableid;
			$this->db->where($tableid,$this->$tableid);
			$this->db->delete(self::$tablename);
		}
	}
	
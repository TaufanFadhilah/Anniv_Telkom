<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mymodel extends CI_Model {
	public function select_where($tableName,$where){
		$res = $this->db->get_where($tableName,$where);
			return $res;
	}

	public function select($tableName){
		$res = $this->db->get($tableName);
			return $res;
	}

	public function insert($tableName,$data){
		$res = $this->db->insert($tableName,$data);
			return $res;
	}

	public function update($tableName,$data,$where){
		$res = $this->db->update($tableName, $data, $where);
			return $res;
	}

	public function select_guest(){
		$this->db->select('*');
		$this->db->from('tb_participant');
		$this->db->join('tb_registration', 'tb_registration.id_participant = tb_participant.id_participant');
		$this->db->where('tb_registration.id_staff',$this->session->userdata('id_staff'));
		$this->db->order_by('tb_registration.register_at', 'DESC');
	return $query = $this->db->get();
	}

	public function select_registration(){
		$this->db->select('*');
		$this->db->from('tb_participant');
		$this->db->join('tb_registration', 'tb_registration.id_participant = tb_participant.id_participant');
		$this->db->order_by('tb_registration.register_at', 'DESC');
		return $query = $this->db->get();
	}
	public function RandNum(){
		
		return $letter = chr(65+rand(0,25)).rand(100,999);
	}

	public function delete($tableName,$where){
		$res = $this->db->delete($tableName,$where);
			return $res;
	}
}
?>
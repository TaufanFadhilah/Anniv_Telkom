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

	public function RandNum(){
		return rand(10000000,99999999);
	}

	public function delete($tableName,$where){
		$res = $this->db->delete($tableName,$where);
			return $res;
	}
}
?>
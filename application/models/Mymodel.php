<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mymodel extends CI_Model {
	public function select_where($tableName,$where){
		$res = $this->db->get_where($tableName,$where);
			return $res;
	}
}
?>
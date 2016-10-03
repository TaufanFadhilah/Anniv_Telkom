<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function admin(){
		$this->load->view('admin/login');
	}

	public function do_login(){
		$user = mysql_real_escape_string($_POST['username']);
		$pass = mysql_real_escape_string($_POST['password']);
		$res = $this->mymodel->select_where('tb_operator',array(
			'username' => $user,
			'password' => md5($pass)));
		if($res->num_rows() > 0){
			echo "Mausk";
		}else{
			echo "Fail";
		}
	}
}
?>
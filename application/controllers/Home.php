<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index(){
		
	}
	public function admin(){
		$this->load->view('admin/login');
	}

	public function do_login(){
		$user = mysql_real_escape_string($_POST['username']);
		$pass = mysql_real_escape_string($_POST['password']);
		$res = $this->mymodel->select_where('tb_staff',array(
			'username' => $user,
			'password' => md5($pass)));
		$row = $res->row();
		if($res->num_rows() > 0){
			$array = array('id_staff' => $row->id_staff) ;
			$this->session->set_userdata($array);
		}
		redirect(base_url().'index.php/admin');
	}
}
?>
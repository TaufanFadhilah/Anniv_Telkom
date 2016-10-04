<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct()
	        {
	            parent::__construct();
	            if(!$this->session->userdata('id_staff')){
	            	$this->session->set_flashdata('login','Anda Belum Login');
	            	redirect(base_url().'index.php/home/admin');
	            }
	            
	        }

	public function index(){
	$res = $this->mymodel->select('tb_participant');
		$this->load->view('admin/dashboard',array(
			'total_participant' => $res->num_rows()
			));
	}

	public function list_participant(){
		$res = $this->mymodel->select('tb_participant');
		$this->load->view('admin/list_tamu',array(
			'data' => $res->result_array()));
	}

	public function insert_participant(){
		$res1 = $this->mymodel->select('tb_attend_confirmation');
		$res2 = $this->mymodel->select('tb_participant_type');
		$this->load->view('admin/insert',array(
			'title' => 'Insert New Data',
			'attend_confirmation' => $res1->result_array(),
			'participant_type' => $res2->result_array(),
			'randNum' => $this->mymodel->RandNum()));
	}

	public function do_insert(){
		$id_participant = mysql_real_escape_string($_POST['id_participant']);
		$name = mysql_real_escape_string($_POST['name']);
		$company = mysql_real_escape_string($_POST['company']);
		$position = mysql_real_escape_string($_POST['position']);
		$email = mysql_real_escape_string($_POST['email']);
		$phone = mysql_real_escape_string($_POST['phone']);
		$participant_type = mysql_real_escape_string($_POST['participant_type']);
		$attend_confirmation = mysql_real_escape_string($_POST['attend_confirmation']);

		$res1 = $this->mymodel->select_where('tb_participant',"id_participant = $id_participant");
		
		if($res1->num_rows() > 0){
			$this->session->set_flashdata('insert','Insert Failed');
			redirect(base_url().'index.php/admin/insert_participant');
		}else{
			$res = $this->mymodel->insert('tb_participant',array(
			'id_participant' => $id_participant,
			'name' => $name,
			'company' => $company,
			'position' => $position,
			'email' => $email,
			'phone' => $phone,
			'id_participant_type' => $participant_type,
			'id_attend_confirmation' => $participant_type,
			));
			$this->session->set_flashdata('list','Insert Success');
			redirect(base_url().'index.php/admin');
		}
	}

	public function edit_participant($id){
		$res = $this->mymodel->select_where('tb_participant',"id_participant = $id");
		$row = $res->row();
		$res1 = $this->mymodel->select('tb_attend_confirmation');
		$res2 = $this->mymodel->select('tb_participant_type');
		$this->load->view('admin/edit_participant',array(
			'title' => 'Edit Data',
			'attend_confirmation' => $res1->result_array(),
			'participant_type' => $res2->result_array(),
			'randNum' => $row->id_participant,
			'data' => $row));
	}

	public function do_edit_participant(){
		$id_participant = mysql_real_escape_string($_POST['id_participant']);
		$name = mysql_real_escape_string($_POST['name']);
		$company = mysql_real_escape_string($_POST['company']);
		$position = mysql_real_escape_string($_POST['position']);
		$email = mysql_real_escape_string($_POST['email']);
		$phone = mysql_real_escape_string($_POST['phone']);
		$participant_type = mysql_real_escape_string($_POST['participant_type']);
		$attend_confirmation = mysql_real_escape_string($_POST['attend_confirmation']);

			$res = $this->mymodel->update('tb_participant',array(
			'name' => $name,
			'company' => $company,
			'position' => $position,
			'email' => $email,
			'phone' => $phone,
			'id_participant_type' => $participant_type,
			'id_attend_confirmation' => $participant_type
			),array('id_participant' => $id_participant));
			$this->session->set_flashdata('list','Edit Success');
			redirect(base_url().'index.php/admin');	
	}

	public function delete($id){
		$res = $this->mymodel->delete('tb_participant',array('id_participant' => $id));
		$this->session->set_flashdata('list','Delete Success');
		redirect(base_url().'index.php/admin/list_participant');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/home/admin');
	}

}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		if ( $this->user_model->isNotLogin() ) {
			redirect(site_url('login'));
		}
	}	

	public function index()
	{
		$data['content'] = 'user/index';
		$data['users'] = $this->user_model->getData()->result();
		$this->load->view('template/content', $data);
	}

	public function addUser()
	{
		$data['content'] = 'user/add';
		$this->load->view('template/content', $data);
	}

	public function storeUser()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password', true);
 
		$data = array(
			'username' => $username,
			'email' => $email,
			'password' => password_hash($password, PASSWORD_BCRYPT)
		);
		$this->user_model->storeData($data,'users');
		redirect('user/index');
	}

	public function editUser($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->user_model->editData($where,'users')->result();
		$data['content'] = 'user/edit';
		$this->load->view('template/content', $data);
	}

	public function updateUser()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password', true);
			
		$data = array(
			'username' => $username,
			'email' => $email,
			'password' => password_hash($password, PASSWORD_BCRYPT)
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->user_model->updateData($where,$data,'users');
		redirect('user/index');
	}

	public function destroyUser($id)
	{
		$where = array('id' => $id);
		$this->user_model->destroyData($where,'users');
		redirect('user/index');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		if ( $this->user_model->isNotLogin() ) {
			redirect(site_url('login'));
        }
		$this->load->model("customer_model");        
	}	

	public function index()
	{
		$data['content'] = 'customer/index';
		$data['customers'] = $this->customer_model->getData()->result();
		$this->load->view('template/content', $data);
	}

	public function addCustomer()
	{
		$data['content'] = 'customer/add';
		$this->load->view('template/content', $data);
	}

	public function storeCustomer()
	{
		$nama = $this->input->post('nama');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
 
		$data = array(
			'nama' => $nama,
			'telepon' => $telepon,
			'email' => $email,
			'alamat' => $alamat
			);
		$this->customer_model->storeData($data,'customers');
		redirect('customer/index');
	}

	public function editCustomer($id)
	{
		$where = array('id' => $id);
		$data['customer'] = $this->customer_model->editData($where,'customers')->result();
		$data['content'] = 'customer/edit';
		$this->load->view('template/content', $data);
	}

	public function updateCustomer()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
 
		$data = array(
			'nama' => $nama,
			'telepon' => $telepon,
			'email' => $email,
			'alamat' => $alamat
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->customer_model->updateData($where,$data,'customers');
		redirect('customer/index');
	}

	public function destroyCustomer($id)
	{
		$where = array('id' => $id);
		$this->customer_model->destroyData($where,'customers');
		redirect('customer/index');
	}
}

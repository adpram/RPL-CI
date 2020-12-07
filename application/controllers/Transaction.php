<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		if ( $this->user_model->isNotLogin() ) {
			redirect(site_url('login'));
        }
		$this->load->model("transaction_model");     
		$this->load->model("customer_model");
		$this->load->model("car_model");
	}	

	public function index()
	{
		$data['content'] = 'transaction/index';
		$data['transactions'] = $this->transaction_model->getData()->result();
		$this->load->view('template/content', $data);
	}

	public function addTransaction()
	{
		$data['content'] = 'transaction/add';
		$data['customers'] = $this->customer_model->getData()->result();
		$data['cars'] = $this->car_model->getAvailableCar()->result();
		$this->load->view('template/content', $data);
	}

	public function storeTransaction()
	{
		$customer_id = $this->input->post('customer_id');
		$car_id = $this->input->post('car_id');
		$tgl_pinjam = $this->input->post('tgl_pinjam');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$lama = $this->input->post('lama');
		$total = $this->input->post('total');
 
		$data = array(
			'customer_id' => $customer_id,
			'car_id' => $car_id,
			'tgl_pinjam' => $tgl_pinjam,
			'tgl_kembali' => $tgl_kembali,
			'lama' => $lama,
			'total' => $total,
			'status' => 0,
			'tgl_transaksi' => date('Y-m-d')
        );
		$this->transaction_model->storeData($data,'transactions');
		redirect('transaction/index');
	}

	public function editTransaction($id)
	{
		$where = array('id' => $id);
		$data['transaction'] = $this->transaction_model->editData($where,'transactions')->result();
		$data['customers'] = $this->customer_model->getData()->result();
		$data['cars'] = $this->car_model->getAvailableCar()->result();
		$data['content'] = 'transaction/edit';
		$this->load->view('template/content', $data);
	}

	public function updateTransaction()
	{
		$id = $this->input->post('id');
		$car_id = $this->input->post('car_id');
		$tgl_pinjam = $this->input->post('tgl_pinjam');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$lama = $this->input->post('lama');
		$total = $this->input->post('total');
		$denda = $this->input->post('denda');
		$status = $this->input->post('status');
 
		$data = array(
			'car_id' => $car_id,
			'tgl_pinjam' => $tgl_pinjam,
			'tgl_kembali' => $tgl_kembali,
			'lama' => $lama,
			'total' => $total,
			'denda' => $denda,
			'status' => $status
        );
	
		$where = array(
			'id' => $id
		);
	
		$this->transaction_model->updateData($where,$data,'transactions');
		redirect('transaction/index');
	}

	public function destroyTransaction($id)
	{
		$where = array('id' => $id);
		$this->transaction_model->destroyData($where,'transactions');
		redirect('transaction/index');
	}
}

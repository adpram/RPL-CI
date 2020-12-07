<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		if ( $this->user_model->isNotLogin() ) {
			redirect(site_url('login'));
		}
		$this->load->model("car_model");
	}	

	public function index()
	{
		$data['content'] = 'car/index';
		$data['cars'] = $this->car_model->getData()->result();
		$this->load->view('template/content', $data);
	}

	public function addCar()
	{
		$data['content'] = 'car/add';
		$this->load->view('template/content', $data);
	}

	public function storeCar()
	{
		$merk = $this->input->post('merk');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$no_polisi = $this->input->post('no_polisi');
		$harga = $this->input->post('harga');
		$status = $this->input->post('status');
 
		$data = array(
			'merk' => $merk,
			'tipe' => $tipe,
			'tahun' => $tahun,
			'no_polisi' => $no_polisi,
			'harga' => $harga,
			'status' => $status
			);
		$this->car_model->storeData($data,'cars');
		redirect('car/index');
	}

	public function editCar($id)
	{
		$where = array('id' => $id);
		$data['car'] = $this->car_model->editData($where,'cars')->result();
		$data['content'] = 'car/edit';
		$this->load->view('template/content', $data);
	}

	public function updateCar()
	{
		$id = $this->input->post('id');
		$merk = $this->input->post('merk');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$no_polisi = $this->input->post('no_polisi');
		$harga = $this->input->post('harga');
		$status = $this->input->post('status');
	
		$data = array(
			'merk' => $merk,
			'tipe' => $tipe,
			'tahun' => $tahun,
			'no_polisi' => $no_polisi,
			'harga' => $harga,
			'status' => $status
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->car_model->updateData($where,$data,'cars');
		redirect('car/index');
	}

	public function destroyCar($id)
	{
		$where = array('id' => $id);
		$this->car_model->destroyData($where,'cars');
		redirect('car/index');
	}

	public function getCar($id)
	{
		$where = array('id' => $id);
		$car = $this->car_model->editData($where,'cars')->result();
		echo json_encode($car);
	}
}

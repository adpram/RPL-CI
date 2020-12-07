<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		if ( $this->user_model->isNotLogin() ) {
			redirect(site_url('login'));
		}
		$this->load->model("chart_model");
	}	

	public function index()
	{
		$data['content'] = 'home';
		$carChart = $this->chart_model->getCars()->result();
		$data['carChart'] = json_encode($carChart);
		$transactionChart = $this->chart_model->getTransactions()->result();
		$data['transactionChart'] = json_encode($transactionChart);
		$this->load->view('template/content', $data);
	}
}

<?php
class Toko_ajax extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('TokoModel');
	}
	function index()
	{
		$this->load->view('header');
		$this->load->view('Toko-using-jq-ajax');
		$this->load->view('footer');
	}
	function show()
	{
		$data = $this->TokoModel->tokoList();
		echo json_encode($data);
	}
	function save()
	{
		$data = $this->TokoModel->saveToko();
		echo json_encode($data);
	}
	function update()
	{
		$data = $this->TokoModel->updateToko();
		echo json_encode($data);
	}
	function delete()
	{
		$data = $this->TokoModel->deleteToko();
		echo json_encode($data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProduitModel');
	}
	
	public function index()
	{
		$this->data['titre'] = $this->layout->set_titre('Nos Produits');
        $this->data['APIServices'] = $this->ProduitModel->read('*');

		$this->layout->view('services/service', $this->data);
		$this->layout->views('partials/none');
	}

	public function show($id)
	{
		$service = $this->ProduitModel->read('*', array("id"=> $id))[0];

		$this->data['service'] = $service;
		
		$this->data['titre'] = $this->layout->set_titre($service->nom);

		$this->layout->view('services/show', $this->data);
		$this->layout->views('partials/none');
	}
}

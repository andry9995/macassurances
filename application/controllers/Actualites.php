<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actualites extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * { function_description }
	 */
	public function index()
	{
		$this->data['titre'] = $this->layout->set_titre('Nos Actualités');

        $this->data['actualites'] = $this->shissab->actualites();

		$this->layout->view('actualites/index', $this->data);
		$this->layout->views('partials/none');
	}

	public function show($id)
	{
		$service = $this->shissab->produit($id);

		$this->data['service'] = $service;
		
		$this->data['titre'] = $this->layout->set_titre($service->nom);

		$this->layout->view('services/show', $this->data);
		$this->layout->views('partials/none');
	}
}

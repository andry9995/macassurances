<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * { function_description }
	 */
	public function index()
	{
		$this->data['titre'] = $this->layout->set_titre('Nos Produits');


        /**
         * APIServices
         * Cette variable stock dans un tablau les services d'un site web, 
         * Enregister dépuis Shissab System
         * @return id, nom, description, img
         * @var array
         */
        
        $this->data['APIServices'] = $this->shissab->produits();

        //var_dump($this->data['APIServices']);

		$this->layout->view('services/service', $this->data);
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

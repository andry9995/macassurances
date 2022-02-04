<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('shissab');
		$this->load->model('AproposModel');
		$this->load->model('SectionModel');
		$this->load->model('CustomerModel');
		$this->load->model('SliderModel');
		$this->load->model('ActualiteModel');
		$this->load->model('ProduitModel');
		$this->load->model('BureauModel');
	}

	public function run()
	{

		$this->apropos();
		$this->sections();
		$this->customers();
		$this->sliders();
		$this->actualites();
		$this->produits();
		$this->bureaux();
	}

	public function bureaux()
	{

        $bureaux = (array)$this->shissab->bureaux();

        foreach ($bureaux as $bureau) {

        	$bureau = (array)$bureau;

        	$this->fetch( 
        		$bureau, 
        		$this->BureauModel 
        	);
        }

	}

	public function produits()
	{

        $produits = (array)$this->shissab->produits();

        foreach ($produits as $produit) {

        	$produit = (array)$produit;

        	$this->fetch( 
        		$produit, 
        		$this->ProduitModel 
        	);
        }

	}

	public function actualites()
	{

        $actualites = (array)$this->shissab->actualites();

        foreach ($actualites as $actualite) {

        	$actualite = (array)$actualite;

        	$this->fetch( 
        		$actualite, 
        		$this->ActualiteModel 
        	);
        }

	}

	public function sliders()
	{

        $sliders = (array)$this->shissab->sliders();

        foreach ($sliders as $slider) {

        	$slider = (array)$slider;

        	$this->fetch( 
        		$slider, 
        		$this->SliderModel 
        	);
        }

	}

	public function customers()
	{

        $customers = (array)$this->shissab->customers();

        foreach ($customers as $customer) {

        	$customer = (array)$customer;

        	$this->fetch( 
        		$customer, 
        		$this->CustomerModel 
        	);
        }

	}


	public function sections()
	{

        $sections = (array)$this->shissab->sections();

        foreach ($sections as $section) {

        	$section = (array)$section;

        	$this->fetch( 
        		$section, 
        		$this->SectionModel 
        	);
        }

	}

	public function apropos()
	{

        $apropos = (array)$this->shissab->apropos();

        $this->fetch($apropos, $this->AproposModel);
	}

	public function fetch($data, $model)
	{
		$exist = $model->read( '*', array('id' => $data['id']) );

		if (!empty($exist)) {
			$model->update(
				array('id' => $data['id']),
				$data
			);
		} else {
	        $model->create($data);
		}

	}
}

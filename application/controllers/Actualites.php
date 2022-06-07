<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actualites extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ActualiteModel');

	}

	public function index()
	{
		$this->data['titre'] = $this->layout->set_titre('Nos Actualités');
        $this->data['actualites'] = $this->ActualiteModel->read('*');

		$this->layout->view('actualites/index', $this->data);
		$this->layout->views('partials/none');
	}

	public function show($id)
	{
		$actualite = $this->ActualiteModel->read('*', array("id"=> $id))[0];

		$this->data['actualite'] = $actualite;
		
		$this->data['titre'] = $this->layout->set_titre($actualite->titre);

		$this->layout->view('actualites/show', $this->data);
		$this->layout->views('partials/none');
	}
}

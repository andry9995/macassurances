<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agences extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('BureauModel');
	}
	
	public function index()
	{
		$this->data['titre'] = $this->layout->set_titre('Réseaux & Contact');
        $this->data['bureaux'] = $this->BureauModel->read('*');

		$this->layout->view('agences/index', $this->data);
		$this->layout->views('partials/none');
	}
}

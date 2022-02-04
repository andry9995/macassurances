<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Histoire extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MembreModel');
	}
	
	public function index()
	{
		$this->data['titre'] = $this->layout->set_titre('Notre histoire');
        $this->data['membres'] = $this->MembreModel->read('*');

		$this->layout->view('histoire/index', $this->data);
		$this->layout->view('contact/home-contact');
		$this->layout->views('partials/none');
	}
}

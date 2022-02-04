<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('SectionModel');
		$this->load->model('CustomerModel');
		$this->load->model('SliderModel');
		$this->load->model('ActualiteModel');
		$this->load->model('ProduitModel');
		$this->load->model('BureauModel');
	}

	public function index()
	{		
		$this->home();
	}

	public function get_sections()
	{
		$sections = $this->SectionModel->read('*',array('slug'));

		if (!empty($sections)) {
			$results = [];
			
			foreach ($sections as $section) {
				$results[$section->slug] = $section->valeur;
			}

			return $results;

		}

		return [];
	}

	public function home()
	{
		$this->data['titre'] = $this->layout->set_titre('Accueil');
        $this->data['sections'] = $this->get_sections();
        $this->data['customers'] = $this->CustomerModel->read('*');
        $this->data['APISlider'] = $this->SliderModel->read('*');
        $this->data['APIActualites'] = $this->ActualiteModel->read('*');
        $this->data['APIServices'] = $this->ProduitModel->read('*');
        $this->data['bureaux'] = $this->BureauModel->read('*');

		$this->layout->view('slider/home-slider', $this->data);
		$this->layout->view('apropos/home-vision');
		$this->layout->view('apropos/home-valeur');
		$this->layout->view('services/home-service');
		$this->layout->view('actualites/home-actualite');
		$this->layout->view('contact/home-agences');
		$this->layout->view('contact/home-customers');
		$this->layout->views('contact/home-contact');
	}

	public function post()
	{

		if ($this->input->post()) {
			
			$this->sendMail(
				$this->input->post('contactsubject'),
				$this->input->post('contactmessage'),
				$this->input->post('contactemail')
			);
		}
		die();
	}


	public function sendMail($subject="", $message="", $to="")
	{
		$this->load->library('email');

		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_timeout' => 30,
			'smtp_port' => 465,
			'smtp_user' => 'hikam.test.email@gmail.com',
			'smtp_pass' => 'info@hikam',
			'charset' => 'utf-8',
			'mailtype' => 'html',
			'newline' => '\r\n'
		);

		$this->email->initialize($config);

		$this->email->set_newline("\r\n");
		$this->email->set_crlf("\r\n");
		$this->email->from("hikam.test.email@gmail.com");
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		
		if ($this->email->send()) {
			redirect('welcome/emailSuccess');
		}else {
			redirect('welcome/emailFailed');
			print_r($this->email->print_debugger());
		}
	}

	public function emailSuccess()
	{
		$this->data['titre'] = $this->layout->set_titre('Email envoyé avec succés');

		$this->layout->set_theme('none');
		$this->layout->view('contact/email-success');
		$this->layout->views('partials/none');
	}

	public function emailFailed()
	{
		$this->data['titre'] = $this->layout->set_titre('Envoie échoué');

		$this->layout->set_theme('none');
		$this->layout->view('contact/email-failed');
		$this->layout->views('partials/none');
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This class describes a welcome.
 */
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
		$this->load->model('VideoModel');
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
        $this->data['videos'] = $this->VideoModel->read('*',[],'id',2);

		$this->layout->view('slider/home-slider', $this->data);
		$this->layout->view('slider/home-slider-768');
		$this->layout->view('apropos/home-vision');
		$this->layout->view('apropos/home-valeur');
		$this->layout->view('services/home-service');
		$this->layout->view('actualites/home-actualite');
		$this->layout->view('videos/home-video');
		$this->layout->view('contact/home-agences');
		$this->layout->view('contact/home-customers');
		$this->layout->views('contact/home-contact');
	}

	/**
	 * { function_description }
	 */
	public function post()
	{

		if ($this->input->post()) {
			
			$this->sendMail(
				$this->input->post('contactsubject'),
				$this->input->post('contactmessage'),
				$this->input->post('contactemail')
			);
		}
	}


	/**
	 * Sends a mail.
	 *
	 * @param      string  $subject  The subject
	 * @param      string  $message  The message
	 * @param      string  $from     The from
	 */
	public function sendMail($subject="", $message="", $from="")
	{
		$this->load->library('email');
		$this->load->config('mail.config');

		$config = $this->config->item('smtp');
		$mail = $this->config->item('mail');

		$this->email->initialize($config);
		$this->email->set_newline($mail['newline']);
		$this->email->set_crlf($mail['crlf']);
		$this->email->from($from);
		$this->email->to($mail['to']);
		$this->email->subject($subject);
		$this->email->message($message);
		
		if ($this->email->send()) {
			redirect('welcome/emailSuccess');
		}else {
			redirect('welcome/emailFailed');
			print_r($this->email->print_debugger());
		}
	}

	/**
	 * { function_description }
	 */
	public function emailSuccess()
	{
		$this->data['titre'] = $this->layout->set_titre('Email envoyé avec succés');

		$this->layout->set_theme('none');
		$this->layout->view('contact/email-success');
		$this->layout->views('partials/none');
	}

	/**
	 * { function_description }
	 */
	public function emailFailed()
	{
		$this->data['titre'] = $this->layout->set_titre('Envoie échoué');

		$this->layout->set_theme('none');
		$this->layout->view('contact/email-failed');
		$this->layout->views('partials/none');
	}

}

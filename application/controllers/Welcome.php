<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This class describes a welcome.
 */
class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	/**
	 * Constructs a new instance.
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * { function_description }
	 */
	public function index()
	{		
		/*$this->sendMail();
		die();*/
		$this->home();
	}

	/**
	 * { function_description }
	 */
	public function home()
	{
		$this->data['titre'] = $this->layout->set_titre('Accueil');


        $this->data['sections'] = (array)$this->shissab->sections();

		/**
         * APISlider
         * Cette variable stock dans un tablau les sliders de l'accueil d'un site web, 
         * Enregister dépuis Shissab System
         * @return id, titre, sous_titre, img
         * @var array
         */

        $this->data['APISlider'] = $this->shissab->sliders();

        /**
         * APIActualités
         * Cette variable stock dans un tablau les actualités d'un site web, 
         * Enregister dépuis Shissab System
         * @return id, titre, description, img
         * @var array
         */
        
        $this->data['APIActualites'] = $this->shissab->actualites();

        /**
         * APIServices
         * Cette variable stock dans un tablau les services d'un site web, 
         * Enregister dépuis Shissab System
         * @return id, nom, description, img
         * @var array
         */
        
        $this->data['APIServices'] = $this->shissab->produits();

        $this->data['bureaux'] = (array)$this->shissab->bureaux();

		$this->layout->view('slider/home-slider', $this->data);
		$this->layout->view('apropos/home-vision');
		$this->layout->view('apropos/home-valeur');
		$this->layout->view('services/home-service');
		$this->layout->view('actualites/home-actualite');
		$this->layout->view('contact/home-agences');
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
		$this->email->from($from);
		$this->email->to("hikam.test.email@gmail.com");
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

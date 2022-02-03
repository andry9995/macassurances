<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * { function_description }
	 */
	public function index()
	{		
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

        //var_dump($this->data['APIServices']);

		$this->layout->view('slider/home-slider', $this->data);
		$this->layout->view('apropos/home-vision');
		$this->layout->view('apropos/home-valeur');
		$this->layout->view('services/home-service');
		$this->layout->view('actualites/home-actualite');
		$this->layout->view('contact/home-agences');
		$this->layout->views('contact/home-contact');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MY_Controller {

	
	/**
	 * { function_description }
	 */
	public function index()
	{
		$this->data = [
			'titre'	=> $this->layout->set_titre('Bienvenue')
		];


        /**
         * APIServices
         * Cette variable stock dans un tablau les services d'un site web, 
         * Enregister dépuis Shissab System
         * @return id, nom, description, img
         * @var array
         */
        
        $this->data['APIServices'] = $this->getCurlData('http://shissabsysteme.com/api/siteweb/produit/list/'.$this->siteKey , $this->token);

        //var_dump($this->data['APIServices']);

		$this->layout->view('services/service', $this->data);
		$this->layout->views('partials/none');
	}
}

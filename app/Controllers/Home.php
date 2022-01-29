<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->data = [ 
            'page'      =>  'Accueil',
            'titre'     =>  'Bienvenue sur MAC Assurances',
            'function'  =>  'home'
        ];

        /**
         * APISlider
         * Cette variable stock dans un tablau les sliders de l'accueil d'un site web, 
         * Enregister dépuis Shissab System
         * @return id, titre, sou_titre, img
         * @var array
         */

        $this->data['APISlider'] = $this->getCurlData('http://shissabsysteme.com/api/siteweb/slider/list/'.$this->siteKey , $this->token);

        /**
         * APIActualités
         * Cette variable stock dans un tablau les actualités d'un site web, 
         * Enregister dépuis Shissab System
         * @return id, titre, description, img
         * @var array
         */
        
        $this->data['APIActualites'] = $this->getCurlData('http://shissabsysteme.com/api/siteweb/actualite/list/'.$this->siteKey , $this->token);

        //var_dump($this->data['APIActualites']); die();

        echo view('home/accueil', $this->data);
    }

    public function actualites()
    {
        $this->data = [ 
            'page'      =>  'Actualites',
            'titre'     =>  'Actualités',
            'function'  =>  'actualites'
        ];

        $this->data['APIActualites'] = $this->getCurlData('http://shissabsysteme.com/api/siteweb/actualite/list/'.$this->siteKey , $this->token);

        echo view('home/actualites', $this->data);
    }
}
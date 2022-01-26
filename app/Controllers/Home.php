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

        $this->data['APISlider'] = json_decode(file_get_contents("http://shissabsysteme.com/api/siteweb/slider/list/".$this->siteKey));

        echo view('slider/home-slider', $this->data);
    }
}
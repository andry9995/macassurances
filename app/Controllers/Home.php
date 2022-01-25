<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->data = [ 
            'page'  =>  'Accueil',
            'titre' =>  'Bienvenue sur MAC Assurances',
            'function' =>  'home'
        ];
        echo view('slider/home-slider', $this->data);
    }
}
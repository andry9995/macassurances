<?php

namespace App\Controllers;

class Agences extends BaseController
{
    public function index()
    {
        $this->data = [ 
            'page'  =>  'Contact',
            'titre' =>  'Nos différents agences',
            'function' =>  'agences'
        ];
        echo view('services/home-service', $this->data);
    }

    public function agences()
    {
        $this->data = [ 
            'page'  =>  'Agences',
            'titre' =>  'Nos différents agences',
            'function' =>  'agences'
        ];
        echo view('contact/nos-agences', $this->data);
    }
}
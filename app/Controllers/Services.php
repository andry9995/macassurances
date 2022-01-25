<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        $this->data = [ 
            'page'  =>  'Services',
            'titre' =>  'Nos services',
            'function' =>  'service'
        ];
        echo view('services/home-service', $this->data);
    }
}
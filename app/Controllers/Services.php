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
        
        /**
         * API_details
         * Cette variable stock dans un tablau les détails d'un site web, 
         * Enregister dépuis Shissab System
         * @return id, nom, description
         * @var array
         */

        $this->data['APISlider'] = json_decode(file_get_contents("http://shissabsysteme.com/api/siteweb/slider/list/".$this->siteKey));
        
        var_dump($this->data['APISlider']);
        
        echo view('services/home-service', $this->data);
    }
}
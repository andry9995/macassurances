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
         * Cette variable stock dans un tablau les services d'un site web, 
         * Enregister dépuis Shissab System
         * @return id, nom, description
         * @var array
         */

        $this->data['APIServices'] = $this->getCurlData("http://shissabsysteme.com/api/siteweb/slider/list/".$this->siteKey, $this->token);

        var_dump($this->data['APIServices']);
        
        echo view('services/home-service', $this->data);
    }

    public function singleService($theService = null)
    {
        $this->data = [ 
            'page'  =>  'Services',
            'titre' =>  'Nos services',
            'function' =>  'service'
        ];
        
        /**
         * API_details
         * Cette variable stock dans un tablau les services d'un site web, 
         * Enregister dépuis Shissab System
         * @return id, nom, description
         * @var array
         */

        $this->data['APIServicesSingle'] = $this->getCurlData("http://shissabsysteme.com/api/siteweb/slider/list/".$this->siteKey, $this->token);
        
        echo view('services/single-service', $this->data);
    }
}
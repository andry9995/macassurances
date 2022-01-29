<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components and
 * performing functions that are needed by all your controllers. Extend this
 * class in any new controllers: class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Un tableau qui vas servir à stocker toutes les données du sites
     * Que ça soit des chiffres des lettres ou des autres tableaux
     * Le tableau de données, permettra de récupérer aussi les données 
     * Dépuis un API
     *
     * @var array
     */
    private $data = [];

    /**
     * Clé de l'API
     * Cette clé permettra de bien cibler le site web que nous voulons 
     * Acceder aux données
     * 
     * @var string
     */
    
    protected $siteKey = null;


    protected $token = null;

    /**
     * Constructor.
     *
     * @param      \CodeIgniter\HTTP\RequestInterface   $request   The request
     * @param      \CodeIgniter\HTTP\ResponseInterface  $response  The response
     * @param      \Psr\Log\LoggerInterface             $logger    The logger
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        $this->siteKey = '61f0e8a8c01a7';
        
        $this->token = 'dJfhYwdHxk9epUfytlGBLk9FSjIe0LrRf/tqfz22V5Q=';

        $this->data = [ 
            'page'  =>  '',
            'titre' =>  'MAC Assurances',
            'function' =>  'default'
        ];
        
    }

    public function getCurlData($url = '', $token = null)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "x-auth-token: " .$token
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) 
        {
          return "cURL Error #:" . $err;
        }else 
        {
          return json_decode($response);
        }
    }
}
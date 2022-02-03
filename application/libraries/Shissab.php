<?php 

/**
 * Shissab class
 * 
 * Class pour communiquer avec l'api de shissabsysteme
 */

class Shissab
{	
	/**
	 * Instance
	 */
	private $CI; 
	
	/**
	 * Clé du site web
	 * 
	 * @var string
	 */
	private $sitekey;

	/**
	 * Jeton d'autorisation
	 * 
	 * @var string
	 */
	private $token;

	/**
	 * Url de l'api
	 * 
	 * @var string
	 */
	private $endpoint;

	function __construct()
	{
		$this->CI = get_instance();

		$api = $this->CI->load->config('api.config');

		$this->sitekey = $this->CI->config->item('sitekey');
        $this->token = $this->CI->config->item('token');
        $this->endpoint = $this->CI->config->item('endpoint');
	}

	/**
	 * Details
	 * 
	 * @return array
	 */
	public function details()
	{
		return $this->get("details", [$this->sitekey]);
	}

	/**
	 * A propos
	 * 
	 * @return array
	 */
	public function apropos()
	{
		return $this->get("apropos", [$this->sitekey]);
	}

	/**
	 * Liste des sliders
	 * 
	 * @return array
	 */
	public function sliders()
	{
		return $this->get("slider/list", [$this->sitekey]);
	}

	/**
	 * Liste des produits
	 * 
	 * @return array
	 */
	public function produits()
	{
		return $this->get("produit/list", [$this->sitekey]);
	}

	/**
	 * Details du produit
	 * 
	 * @return array
	 */
	public function produit($id)
	{
		return $this->get("produit/details", [$id]);
	}

	/**
	 * Liste des actualités
	 * 
	 * @return array
	 */
	public function actualites()
	{
		return $this->get("actualite/list", [$this->sitekey]);
	}

	/**
	 * Details de l'actualité
	 * 
	 * @return array
	 */
	public function actualite($id)
	{
		return $this->get("actualite/details", [$id]);
	}

	/**
	 * Liste des membres
	 * 
	 * @return array
	 */
	public function membres()
	{
		return $this->get("membre/list", [$this->sitekey]);
	}

	/**
	 * Details du membre
	 * 
	 * @return array
	 */
	public function membre($id)
	{
		return $this->get("membre/details", [$id]);
	}


	/**
	 * Liste des bureaux
	 * 
	 * @return array
	 */
	public function bureaux()
	{
		return $this->get("bureau/list", [$this->sitekey]);
	}

	/**
	 * Details du bureau
	 * 
	 * @return array
	 */
	public function bureau($id)
	{
		return $this->get("bureau/details", [$id]);
	}


	/**
	 * Liste des sections
	 * 
	 * @return array
	 */
	public function sections()
	{
		return $this->get("sections", [$this->sitekey]);
	}

	/**
	 * Curl get
	 */
	public function get($resource, $attributes)
	{
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $this->endpoint . $resource . '/' .implode('/', $attributes),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "x-auth-token: " . $this->token
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

	/**
	 * Curl post
	 */

	public function post()
	{
		// code...
	}
}
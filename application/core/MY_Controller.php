<?php 

/**
 * Controls the data flow into my object and updates the view whenever data changes.
 */
class MY_Controller extends CI_Controller
{
	/**
     * Un tableau qui vas servir à stocker toutes les données du sites
     * Que ça soit des chiffres des lettres ou des autres tableaux
     * Le tableau de données, permettra de récupérer aussi les données 
     * Dépuis un API
     *
     * @var array
     */
    public $data = [];

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
	 * Constructs a new instance.
	 */
	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler(TRUE);
		$this->load->library('layout');
		$this->load->helper('date');
		$this->load->helper('assets');
		$this->load->helper('url');

		setlocale(LC_TIME, 'fr');

		$this->siteKey = '61f0e8a8c01a7';
        
        $this->token = 'dJfhYwdHxk9epUfytlGBLk9FSjIe0LrRf/tqfz22V5Q=';

        $this->data = [ 
            'page'  =>  $this->get_instance()->router->fetch_class(),
            'titre' =>  'MAC Assurances',
            'function' =>  $this->get_instance()->router->fetch_method()
        ];

		$this->data['css'] = array();
		$this->data['js'] = array();
		
		$this->data['breadcrumb'] = '';

		
		$message_flaches = array();

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="text-dangr" style="font-size:1.1em;margin-top:-5px;">', '</span>'); 
	}


	/**
	 * { function_description }
	 */
	public function breadcrumb(){
		$this->layout->view('inc/breadcrumb',$this->data);
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

	/**
	 * { function_description }
	 */
	public function elementIntrouvable(){
		$this->layout->views('inc/element_introuvable');
	}


	
	/**
	 * Adds a notification.
	 *
	 * @param      <type>  $libelle  The libelle
	 * @param      string  $type     The type
	 */
	public function addNotification($notification = array()){
		$this->load->model('NotifModel');

		$not = array_merge($notification, array('createdBy' => $this->session->userdata('admin')));
		if ($this->is_connected()) {			
			$this->NotifModel->create($not);
		}
	}


	/**
	 * { function_description }
	 *
	 * @param      <type>  $file     The file, il s'agit du fichier ou de
	 *                               l'image qu'on vas uploader
	 * @param      string  $dossier  The dossier
	 *
	 * @return     array   ( Affiches des données du fichier uploader ou les erreurs qui se sont produites )
	 */
	public function upload($file, $dossier='avatars')
    {
        $config['upload_path']          = './assets/img/'.$dossier.'/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 3600;
        $config['max_height']           = 1920;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image'))
        {
            $error = array('error' => $this->upload->display_errors());

            //$this->load->view('upload_form', $error);
            return $error;
        }
        else
        {
           	$data = array('upload_data' => $this->upload->data());

            //$this->load->view('upload_success', $data);
           	return $data;

        }
    }

}
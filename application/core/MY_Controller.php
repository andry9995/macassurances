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
		$this->load->model('AproposModel');
		$this->load->config('menu.config');
		
		setlocale(LC_TIME, 'fr');

        $this->data = [ 
            'page'  =>  $this->get_instance()->router->fetch_class(),
            'titre' =>  'MAC Assurances',
            'function' =>  $this->get_instance()->router->fetch_method()
        ];

        $apropos = $this->AproposModel->read('*');

		$this->data['apropos'] = (!empty($apropos)) ? $apropos[0] : null ;

		$this->data['menu'] = $this->config->item('menu');

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
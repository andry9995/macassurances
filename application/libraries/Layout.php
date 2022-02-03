<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 * This class describes a layout.
 */
class Layout { 
	private $CI; 
	private $output = '';
	private $data = array();
	private $theme = 'index';

 
	/**
	 * Constructs a new instance.
	 */
	public function __construct() {  
		$this->CI = get_instance();
		$this->data['output'] = '';

		// Le titre est composé du nom de la méthode et du nom du contrôleur 
		// La fonction ucfirst permet d'ajouter une majuscule 
		$this->data['titre'] = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());

		$this->data['page'] = ucfirst($this->CI->router->fetch_class());
		
		$this->data['method'] = ucfirst($this->CI->router->fetch_method());

		$this->data['css'] = array(); 
		$this->data['js'] = array(); 
	} 

	/**
	 * { function_description }
	 *
	 * @param      <type>  $datein  The datein
	 *
	 * @return     string  ( description_of_the_return_value )
	 */
	public function newdate($datein){
		$date = $datein;
		$time = unix_to_human(time());

		$datestring = '%d-%m-%Y';
		

		$range = date_range($date,$time);
		$i=1;

		if ($range===true) {
			$i = count($range); 
		}



		switch ($i) {
		case 1:
		  $d = "Aujourd'hui à ".substr($datein, 11,5);
		  break;

		case 2:
		  $d = "Hier à ".substr($datein, 11,5);
		  break;

		case 3:
		  $d = "Avant-Hier à ".substr($datein, 11,5);
		  break;

		default:
		  $d = mdate($datestring, mysql_to_unix( $date));
		  break;
		}
		return $d;
	}

	/**
	 * { function_description }
	 *
	 * @param      <type>  $name   The name
	 * @param      array   $data   The data
	 */
	public function view($name, $data = array()) {
		$this->output .= $this->CI->load->view($name, $data, true); 
		//$this->CI->load->view('../themes/' . $this->theme, $this->data);
	}  

	/**
	 * { function_description }
	 *
	 * @param      <type>  $name   The name
	 * @param      array   $data   The data
	 */
	public function views($name, $data = array()) {
		$data = array_merge($this->data);
		$this->output .= $this->CI->load->view($name, $data, true);  
		$this->CI->load->view('../themes/'. $this->theme, array('output' => $this->output));
	} 

 
	/**
	 * Sets the titre.
	 *
	 * @param      <type>  $titre  The titre
	 *
	 * @return     bool    ( description_of_the_return_value )
	 */
	public function set_titre($titre) { 
		if(is_string($titre) AND !empty($titre)) {  
			$this->data['titre'] = $titre;
	 		return true; 
	 	} 
	 	return false; 
	}


	/**
	 * Adds a css.
	 *
	 * @param      string  $nom    The nom
	 *
	 * @return     bool    ( description_of_the_return_value )
	 */
	public function add_css($nom) { 
		if(is_string($nom) AND !empty($nom) AND file_exists('./assets/' . $nom . '.css')) {  
			$this->data['css'][] = css_url($nom);
			return true; 
		} 
		return false; 
	} 

	/**
	 * Adds js.
	 *
	 * @param      string   $nom    The nom
	 *
	 * @return     boolean  ( description_of_the_return_value )
	 */
	public function add_js($nom) { 
		if(is_string($nom) AND !empty($nom) AND file_exists('./assets/' . $nom . '.js')) {  
			$this->data['js'][] = js_url($nom);  return true; 
		} 
		return false; 
	}

	/**
	 * Sets the theme.
	 *
	 * @param      string   $theme  The theme
	 *
	 * @return     boolean  ( description_of_the_return_value )
	 */
	public function set_theme($theme) { 
		if(is_string($theme) AND !empty($theme) AND file_exists('./application/themes/' . $theme . '.php')) {  
			$this->theme = $theme;  
			return true; 
		} 
		return false; 
	}


} 
/* End of file layout.php */ 
/* Location: ./application/libraries/layout.php */

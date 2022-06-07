<?php  

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if ( ! function_exists('css_url')) { 
	function css_url($nom) {  
		return base_url() . 'assets/' . $nom . '.css'; 
	} 
} 

if ( ! function_exists('js_url')) { 
	function js_url($nom) {  
		return base_url() . 'assets/' . $nom . '.js'; 
	} 
} 

if ( ! function_exists('img_url')) { 
	function img_url($nom) {  
		return base_url() . 'assets/' . $nom; 
	} 
} 

if ( ! function_exists('img')) { 
	function img($nom, $alt = '') {  
		return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />'; 
	} 
}

if ( ! function_exists('site_url')) { 
	function site_url($uri = '') {    
		if( ! is_array($uri))  {   
			// Tous les paramètres sont insérés dans un tableau   
			$uri = func_get_args();  
		}   
		// On ne modifie rien ici  
		$CI =& get_instance();   
		return $CI->config->site_url($uri); 
	} 
}
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
// ---------------------------------------------------------------------------

/**
 * This class describes my model.
 */
class MY_Model extends CI_Model { 
	/** 
	* Insère une nouvelle ligne dans la base de données. 
	*/ 

	/**
	 * { function_description }
	 *
	 * @param      array    $options_echappees      The options echappees
	 * @param      array    $options_non_echappees  The options non echappees
	 *
	 * @return     boolean  ( description_of_the_return_value )
	 */
	public function create($options_echappees = array(), $options_non_echappees = array()) { 
	// Vérification des données à insérer 
		if(empty($options_echappees) AND empty($options_non_echappees)) {  
			return false; 
		}  

		return (bool) $this->db->set($options_echappees)
			->set($options_non_echappees, null, false)
			->insert($this->table); 
	} 

	/** 
	* Récupère des données dans la base de données. 
	*/ 

	/**
	 * { function_description }
	 *
	 * @param      string  $select    The select
	 * @param      array   $where     The where
	 * @param      string  $order_by  The order by
	 * @param      <type>  $nb        The number of
	 * @param      <type>  $debut     The debut
	 *
	 * @return     array   ( description_of_the_return_value )
	 */
	public function read($select = '*', $where = array(), $order_by='id', $nb = null, $debut = null) { 
		$results = array();
		$results = $this->db->select($select)                        
			->from($this->table)                        
			->where($where)              
			->limit($nb, $debut)                        
			->order_by($order_by, 'desc')                        
			->get()
			->result(); 

		return $results;
	}

	/** 
	* Récupère des données dans la base de données. 
	*/ 

	
	/**
	 * Reads an inner join.
	 *
	 * @param      string  $innerJoin  The inner join
	 * @param      array   $where      The where
	 * @param      string  $order_by   The order by
	 * @param      <type>  $nb         The number of
	 * @param      <type>  $debut      The debut
	 *
	 * @return     array   ( description_of_the_return_value )
	 */
	public function readInnerJoin($innerJoin= null,$champ1='id',$champ2='id', $where = array(), $order_by='id', $nb = null, $debut = null) { 
		$results = array();
		$results = $this->db->select('*')                        
			->from($this->table)  
			->join($innerJoin, $this->table.'.'.$champ1.'='.$innerJoin.'.'.$champ2 , 'left')                     
			->where($where)              
			->limit($nb, $debut)                        
			->order_by($this->table.'.'.$order_by, 'desc')                        
			->get()
			->result(); 

		return $results;
	}
	/**
	 * { function_description }
	 *
	 * @param      string  $row    The row
	 * @param      string  $select    The select
	 * @param      array   $where     The where
	 * @param      string  $order_by  The order by
	 *
	 * @return     array   ( description_of_the_return_value )
	 */
	public function max_row($row = '') { 
		$results = array(); $var = 0;
		$results = $this->db->select($row)                        
			->from($this->table)   
			->limit(1)                        
			->order_by($row .' DESC')                        
			->get()
			->result(); 

			foreach ($results as $result) {
				$var = $result->$row;
			}

		return (int) $var;
	}

	/**
	 * Searches for the first match.
	 *
	 * @param      string  $where     The where
	 * @param      string  $q         The quarter
	 * @param      string  $order_by  The order by
	 * @param      <type>  $nb        The number of
	 * @param      <type>  $debut     The debut
	 *
	 * @return     array   ( description_of_the_return_value )
	 */
	public function search($where = '', $q = '', $order_by='id', $nb = null, $debut = null) { 
		$results = array();
		$results = $this->db->select('*')                        
			->from($this->table)                        
			->or_like($where, $q, '%', false)              
			->limit($nb, $debut)                        
			->order_by($order_by)                        
			->get()
			->result(); 

		return $results;
	}

  

	/**
	* Modifie une ou plusieurs lignes dans la base de données. 
	*/ 

	/**
	 * { function_description }
	 *
	 * @param      array    $where                  The where
	 * @param      array    $options_echappees      The options echappees
	 * @param      array    $options_non_echappees  The options non echappees
	 *
	 * @return     boolean  ( description_of_the_return_value )
	 */
	public function update($where = array(), $options_echappees = array(),  $options_non_echappees = array())
 	{   
	 	// Vérification des données à mettre à jour 
	 	if(empty($options_echappees) AND empty($options_non_echappees)) {  
	 		return false; 
	 	}  
	 	// Raccourci dans le cas où on sélectionne l'id 
	 	if(is_integer($where)) {  
	 		$where = array('id' => $where); 
	 	} 
	 	return (bool) $this->db->set($options_echappees) 
		 	->set($options_non_echappees, null, false)
		 	->where($where) 
		 	->update($this->table); 
	 }


	/** 
	* Supprime une ou plusieurs lignes de la base de données. 
	*/ 

	/**
	 * Deletes the given where.
	 *
	 * @param      array    $where  The where
	 *
	 * @return     boolean  ( description_of_the_return_value )
	 */
	public function delete($where) { 
		if(is_integer($where)) {  
			$where = array('id' => $where); 
		}  

		return (bool) $this->db->where($where)->delete($this->table); 
	}

	/** 
	* Retourne le nombre de résultats. 
	*/ 

	/**
	 * { function_description }
	 *
	 * @param      array    $champ   The champ
	 * @param      <type>   $valeur  The valeur
	 *
	 * @return     integer  ( description_of_the_return_value )
	 */
	public function count($champ = array(), $valeur = null) 
	// Si $champ est un array, la variable $valeur sera ignorée par la méthode where() 
	{ 
		return (int) $this->db->where($champ, $valeur)
		->from($this->table)
		->count_all_results(); 
	}

} 
/* End of file MY_Model.php */ 
/* Location: ./system/application/core/MY_Model.php */
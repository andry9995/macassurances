<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('shissab');
		$this->load->model('AproposModel');
	}

	public function run()
	{

		$entities = array(
			array(
				'api' => 'apropos',
				'model' => 'AproposModel',
				'multiple' => false
			),
			array(
				'api' => 'sections',
				'model' => 'SectionModel',
				'multiple' => true
			),
			array(
				'api' => 'customers',
				'model' => 'CustomerModel',
				'multiple' => true
			),
			array(
				'api' => 'sliders',
				'model' => 'SliderModel',
				'multiple' => true
			),
			array(
				'api' => 'actualites',
				'model' => 'ActualiteModel',
				'multiple' => true
			),
			array(
				'api' => 'produits',
				'model' => 'ProduitModel',
				'multiple' => true
			),
			array(
				'api' => 'bureaux',
				'model' => 'BureauModel',
				'multiple' => true
			),
			array(
				'api' => 'membres',
				'model' => 'MembreModel',
				'multiple' => true
			)
		);

		$this->process($entities);
	}

	public function process($entities)
	{
		foreach ($entities as $entity) {

			$api = $entity['api'];
			$model = $entity['model'];
			$multiple = $entity['multiple'];

			$this->load->model($model);

			$data = (array)$this->shissab->$api();

			if (!!$multiple) {
		        foreach ($data as $item) {

		        	$item = (array)$item;

		        	$this->fetch( 
		        		$item, 
		        		$this->$model 
		        	);
		        }
			} else {
        		$this->fetch($data, $this->$model);
			}
			
		}
	}

	public function apropos()
	{

        $apropos = (array)$this->shissab->apropos();

        $this->fetch($apropos, $this->AproposModel);
	}

	public function fetch($data, $model)
	{
		$exist = $model->read( '*', array('id' => $data['id']) );

		if (!empty($exist)) {
			$model->update(
				array('id' => $data['id']),
				$data
			);
		} else {
	        $model->create($data);
		}

	}
}

<?php 

$config['menu'] = array(
	array(
		'name' => 'Accueil',
		'path' => '',
		'children' => []
	),
	array(
		'name' => 'Nos Produits',
		'path' => 'services',
		'children' => []
	),
	array(
		'name' => 'Réseau et Contact',
		'path' => 'agences',
		'children' => []
	),
	array(
		'name' => 'À Propos',
		'path' => '',
		'children' => [
			array(
				'name' => 'Notre Histroire',
				'path' => 'histoire',
			),
			array(
				'name' => 'Nos Actualités',
				'path' => 'actualites',
			)
		]
	)
);
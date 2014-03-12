<?php
App::uses('AppModel', 'Model');
/**
 * Artist Model
 *
 * @property Product $Product
 */
class Artist extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'firstname';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'artist_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

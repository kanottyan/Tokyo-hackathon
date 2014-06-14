<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 * @property  $
 */
class Client extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasMany = array(
		'ParkingPlace' => array(
			'className' => 'ParkingPlace',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

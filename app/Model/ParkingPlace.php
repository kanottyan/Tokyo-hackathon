<?php
App::uses('AppModel', 'Model');
/**
 * ParkingPlace Model
 *
 * @property Client $Client
 */
class ParkingPlace extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

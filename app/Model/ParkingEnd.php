<?php
App::uses('AppModel', 'Model');
/**
 * ParkingEnd Model
 *
 * @property  $
 */
class ParkingEnd extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ParkingTimeBike' => array(
			'className' => 'ParkingTimeBike',
			'foreignKey' => 'time_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
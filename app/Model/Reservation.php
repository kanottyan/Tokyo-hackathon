<?php
App::uses('AppModel', 'Model');
/**
 * Reservation Model
 *
 * @property ParkingPlace $ParkingPlace
 */
class Reservation extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'user_email';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ParkingPlace' => array(
			'className' => 'ParkingPlace',
			'foreignKey' => 'parking_place_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

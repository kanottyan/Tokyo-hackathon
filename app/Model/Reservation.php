<?php
App::uses('AppModel', 'Model');
/**
 * Reservation Model
 *
 * @property ParkingPlace $ParkingPlace
 * @property User $User
 */
class Reservation extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'parking_place_id';


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
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

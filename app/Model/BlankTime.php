<?php
App::uses('AppModel', 'Model');
/**
 * BlankTime Model
 *
 * @property ParkingPlace $ParkingPlace
 */
class BlankTime extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'end_time';


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

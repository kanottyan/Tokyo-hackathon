<?php
App::uses('AppModel', 'Model');
/**
 * ParkingTimeBike Model
 *
 * @property Bike $Bike
 */
class ParkingTimeBike extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Bike' => array(
			'className' => 'Bike',
			'foreignKey' => 'bike_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
			'ParkingPlace' => array(
			'className' => 'ParkingPlace',
			'foreignKey' => 'bike_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public $hasMany = array(
        'TimeStart' => array(
            'className' => 'TimeStart',
            'foreignKey' => 'time_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ),
        'TimeEnd' => array(
            'className' => 'TimeEnd',
            'foreignKey' => 'time_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        )
    );
}

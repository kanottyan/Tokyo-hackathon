<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Bike $Bike
 */
class BlankTime extends AppModel {


  //The Associations below have been created with all possible keys, those that are not needed can be removed
/**
 * hasMany associations
 *
 * @var array
 */
   public $belongsTo = array(
        'ParkingPlace' => array(
          'className' => 'ParkingPlace',
          'foreignKey' => 'parking_place_id'
          )
    );

   public $hasOne = array(
        'ParkingStart' => array(
          'className' => 'ParkingStart',
          'foreignKey' => 'time_id'
          ),
        'ParkingEnd' => array('ParkingEnd',
        'foreignKey' => 'time_id'
          )
    );




   # とりあえずymタイプにしときました
   public $validate = array(
        'startTime' => array(
            'rule' => array('datetime', 'ym'),
            'message' => 'Please enter a valid date and time.'
        ),
        'endTime' => array(
            'rule' => array('datetime', 'ym'),
            'message' => 'Please enter a valid date and time.'
        ),
    );
}



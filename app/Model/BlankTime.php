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



<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Bike $Bike
 */
class User extends AppModel {


  //The Associations below have been created with all possible keys, those that are not needed can be removed
/**
 * hasMany associations
 *
 * @var array
 */
  public $hasMany = array(
    'ParkingPlace' => array(
      'className' => 'ParkingPlace',
      'foreignKey' => 'parking_place_id',
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

    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'This Field cannot be null'
            ),
        ),
        'telNum' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'This Field cannot be null'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'This Field must be numbers',
            ),
        ),
        'gender' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'This Field cannot be null'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'This Field must be numbers',
            ),
        ),
        'age' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'This Field cannot be null'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'This Field must be numbers',
            ),
        ),
        'email' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'This Field cannot be null'
            ),
            'email' => array(
                'rule' => 'email',
                'message' => 'This Field must be email format'
            ),
        ),
        'address' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'This Field cannot be null'
            ),
        ),
        'loginId' => array(
        ),
        'loginPassword' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'This Field cannot be null'
            ),
        ),
    );
}

<?php
/**
 * UserTopsController
 * 
 * @package       goodfind/2015
 * @author        N.kano
 * @since         1.0.0
 * @version       1.0.0
 * @copyright     Copyright(C) Team-e
 */
App::uses('AppController', 'Controller');
//App::uses('CakeEmail', 'Network/Email');
class UserTopsController extends AppController
{
    public $name ='UserTops';
    public $uses = array(
        'ParkingPlace',
        'ParkingTimeBike',
        'ParkingStart',
        'ParkingEnd',
        'Bike',
    );
    public $helpers = array(
        'Html',
        'Form'
    );

    /**
     * index
     * @param:
     * @description: 
     * @return: 
     * @author: S.Yamasaki
     * @since: 1.0.0
     */
    public function index(){
        $this->set('test','testでーす');
        $this->Bike->find('all');
    }
}

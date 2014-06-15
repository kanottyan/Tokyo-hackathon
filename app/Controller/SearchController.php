<?php
App::uses('AppController', 'Controller');
/**
 * ParkingPlaces Controller
 *
 * @property ParkingPlace $ParkingPlace
 * @property PaginatorComponent $Paginator
 */
class SearchController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $uses = 'ParkingPlace';
    public $name = 'Search';
    public $components = array('Paginator');
    function beforeFilter() {
      $this->Auth->allow();
      //一旦全部見れるようにする
      //parent::beforeFilter();
      //$this->Auth->allow(array('login', 'add'));
      //$darget_latitude = $this->reqest->query['lat'];
      //$darget_longtidute = $this->reqest->query['long'];
      $this->set(compact('darget_latitude','$darget_longtidute'));
    }
    public $helpers = array(
        'Html',
        'Form'
    );

/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->set('test', 'testでーす');
        $park_data = $this->ParkingPlace->find('all');
        $this->set(compact('park_data'));
    }
}

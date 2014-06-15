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
        $options = array(
        'conditions' => array(
                'AND' => array(
                    'User.name' => 'Daniel asdfistpher',
                    'User.name' => 'Daniel asdfistpher'
                )
            ) 
        );
                
        $all_data = $this->ParkingPlace->find('all');
        for($i = 0;$i<count($all_data);$i++){
            $park_data['parking_place_id'][$i] = $all_data[$i]['ParkingPlace']['parking_place_id'];
            $park_data['price'][$i] = $all_data[$i]['ParkingPlace']['price'];
            $park_data['latitude'][$i] = $all_data[$i]['ParkingPlace']['latitude'];
            $park_data['longtitude'][$i] = $all_data[$i]['ParkingPlace']['longtitude'];
        }
        // just test
        #for($i = 0;$i<count($all_data);$i++){
        #echo($park_data['parking_place_id'][$i]);
        #}
        #for($i = 0;$i<count($park_data);$i++){
        #print($park_data[$i]['ParkingPlace']['price']);
        #}

        #for($i = 0;$i<count($park_data);$i++){
        #print($park_data[$i]['ParkingPlace']['price']);
        #}
        $this->set(compact('park_data'));
    }
}

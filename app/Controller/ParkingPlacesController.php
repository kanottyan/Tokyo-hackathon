<?php
App::uses('AppController', 'Controller');
/**
 * ParkingPlaces Controller
 *
 * @property ParkingPlace $ParkingPlace
 * @property PaginatorComponent $Paginator
 */
class ParkingPlacesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    function beforeFilter() {
      $this->Auth->allow();
      //一旦全部見れるようにする
      //parent::beforeFilter();
      //$this->Auth->allow(array('login', 'add'));
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ParkingPlace->recursive = 0;
		$this->set('parkingPlaces', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ParkingPlace->exists($id)) {
			throw new NotFoundException(__('Invalid parking place'));
		}
		$options = array('conditions' => array('ParkingPlace.' . $this->ParkingPlace->primaryKey => $id));
		$this->set('parkingPlace', $this->ParkingPlace->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ParkingPlace->create();
			if ($this->ParkingPlace->save($this->request->data)) {
				$this->Session->setFlash(__('The parking place has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parking place could not be saved. Please, try again.'));
			}
		}
		$users = $this->ParkingPlace->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ParkingPlace->exists($id)) {
			throw new NotFoundException(__('Invalid parking place'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ParkingPlace->save($this->request->data)) {
				$this->Session->setFlash(__('The parking place has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parking place could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ParkingPlace.' . $this->ParkingPlace->primaryKey => $id));
			$this->request->data = $this->ParkingPlace->find('first', $options);
		}
		$users = $this->ParkingPlace->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ParkingPlace->id = $id;
		if (!$this->ParkingPlace->exists()) {
			throw new NotFoundException(__('Invalid parking place'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ParkingPlace->delete()) {
			$this->Session->setFlash(__('The parking place has been deleted.'));
		} else {
			$this->Session->setFlash(__('The parking place could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

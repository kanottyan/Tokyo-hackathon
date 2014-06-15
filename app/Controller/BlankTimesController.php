<?php
App::uses('AppController', 'Controller');
/**
 * BlankTimes Controller
 *
 * @property BlankTime $BlankTime
 * @property PaginatorComponent $Paginator
 */
class BlankTimesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BlankTime->recursive = 0;
		$this->set('blankTimes', $this->Paginator->paginate());
	}

	//ここも一旦Authは全許可にします（時間があったらログイン認証を付けましょう）
    function beforeFilter() {
      $this->Auth->allow();
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BlankTime->exists($id)) {
			throw new NotFoundException(__('Invalid blank time'));
		}
		$options = array('conditions' => array('BlankTime.' . $this->BlankTime->primaryKey => $id));
		$this->set('blankTime', $this->BlankTime->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BlankTime->create();
			if ($this->BlankTime->save($this->request->data)) {
				return $this->flash(__('The blank time has been saved.'), array('action' => 'index'));
			}
		}
		$parkingPlaces = $this->BlankTime->ParkingPlace->find('list');
		$this->set(compact('parkingPlaces'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BlankTime->exists($id)) {
			throw new NotFoundException(__('Invalid blank time'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BlankTime->save($this->request->data)) {
				return $this->flash(__('The blank time has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('BlankTime.' . $this->BlankTime->primaryKey => $id));
			$this->request->data = $this->BlankTime->find('first', $options);
		}
		$parkingPlaces = $this->BlankTime->ParkingPlace->find('list');
		$this->set(compact('parkingPlaces'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BlankTime->id = $id;
		if (!$this->BlankTime->exists()) {
			throw new NotFoundException(__('Invalid blank time'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BlankTime->delete()) {
			return $this->flash(__('The blank time has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The blank time could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}

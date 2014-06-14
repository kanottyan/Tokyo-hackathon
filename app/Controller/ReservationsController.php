<?php
App::uses('AppController', 'Controller');
/**
 * Reservations Controller
 *
 * @property Reservation $Reservation
 * @property PaginatorComponent $Paginator
 */
class ReservationsController extends AppController {

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
		$this->Reservation->recursive = 0;
		$this->set('reservations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
		$this->set('reservation', $this->Reservation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reservation->create();
			if ($this->Reservation->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
			}
		}
		$parkingPlaces = $this->Reservation->ParkingPlace->find('list');
		$users = $this->Reservation->User->find('list');
		$this->set(compact('parkingPlaces', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reservation->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
			$this->request->data = $this->Reservation->find('first', $options);
		}
		$parkingPlaces = $this->Reservation->ParkingPlace->find('list');
		$users = $this->Reservation->User->find('list');
		$this->set(compact('parkingPlaces', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Reservation->id = $id;
		if (!$this->Reservation->exists()) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reservation->delete()) {
			$this->Session->setFlash(__('The reservation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reservation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('ParkingPlace', 'Model');

/**
 * ParkingPlace Test Case
 *
 */
class ParkingPlaceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parking_place',
		'app.address',
		'app.client'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ParkingPlace = ClassRegistry::init('ParkingPlace');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ParkingPlace);

		parent::tearDown();
	}

}

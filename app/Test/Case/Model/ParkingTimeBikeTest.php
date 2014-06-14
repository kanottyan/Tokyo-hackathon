<?php
App::uses('ParkingTimeBike', 'Model');

/**
 * ParkingTimeBike Test Case
 *
 */
class ParkingTimeBikeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parking_time_bike',
		'app.address',
		'app.bike',
		'app.user',
		'app.time'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ParkingTimeBike = ClassRegistry::init('ParkingTimeBike');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ParkingTimeBike);

		parent::tearDown();
	}

}

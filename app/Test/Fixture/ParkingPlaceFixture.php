<?php
/**
 * ParkingPlaceFixture
 *
 */
class ParkingPlaceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'address_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'space_size' => array('type' => 'integer', 'null' => false, 'default' => null),
		'nearest_station' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'price_perhour' => array('type' => 'integer', 'null' => false, 'default' => null),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'address_id', 'unique' => 1),
			'client_id' => array('column' => 'client_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'address_id' => 1,
			'client_id' => 1,
			'space_size' => 1,
			'nearest_station' => 'Lorem ipsum dolor ',
			'price_perhour' => 1,
			'address' => 'Lorem ipsum dolor sit amet'
		),
	);

}

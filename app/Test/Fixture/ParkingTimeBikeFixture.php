<?php
/**
 * ParkingTimeBikeFixture
 *
 */
class ParkingTimeBikeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'address_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'bike_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'time_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'time_id', 'unique' => 1)
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
			'bike_id' => 1,
			'time_id' => 1
		),
	);

}

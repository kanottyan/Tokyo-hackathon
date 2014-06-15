
<div class="parkingPlaces form">
<div class="col-lg-2"></div>
<div class="col-lg-8">
<?php echo $this->Form->create('ParkingPlace'); ?>
	<?php
		echo $this->Form->input('user_id', array(
			'user_id' => 'user_id',
			'placeholder' => 'user_id',
		));

		echo $this->Form->input('latitude', array(
			'latitude' => '経度',
			'placeholder' => '緯度',
		));
		echo $this->Form->input('longtitude', array(
			'longtitude' => 'longtitude',
			'placeholder' => '経度',
		));
		echo $this->Form->input('price', array(
			'price' => 'price',
			'placeholder' => '値段/h',
		));
		echo $this->Form->input('file', array(
			'type' => 'file',
			'label' => '駐車場の写真',
			'help' => '駐車可能な場所の写真を載せて下さい。'
		));
	?>
<?php echo $this->Form->end(array(
		'text' => 'test',
		'class' => 'btn btn-info'
	)); ?>
</div>
<div class="col-lg-2"></div>


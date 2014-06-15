<div class="parkingPlaces form">
<?php echo $this->Form->create('ParkingPlace'); ?>
	<?php
		echo $this->Form->input('user_id', array(
			'user_id' => 'user_id',
			'placeholder' => 'user_id',
		));
		echo $this->Form->input('latitude', array(
			'latitude' => 'latitude',
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Parking Places'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blank Times'), array('controller' => 'blank_times', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blank Time'), array('controller' => 'blank_times', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>

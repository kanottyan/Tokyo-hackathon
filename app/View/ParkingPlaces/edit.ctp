<div class="parkingPlaces form">
<?php echo $this->Form->create('ParkingPlace'); ?>
	<fieldset>
		<legend><?php echo __('Edit Parking Place'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longtitude');
		echo $this->Form->input('price');
		echo $this->Form->input('img_url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ParkingPlace.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ParkingPlace.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parking Places'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blank Times'), array('controller' => 'blank_times', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blank Time'), array('controller' => 'blank_times', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>

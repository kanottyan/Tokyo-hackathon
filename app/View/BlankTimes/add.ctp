<div class="blankTimes form">
	<h2>次に提供できる時間を入力して下さい<h2>
<?php echo $this->Form->create('BlankTime'); ?>
	<fieldset>
		<legend><?php echo __('Add Blank Time'); ?></legend>
	<?php
		echo $this->Form->input('parking_place_id');
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Blank Times'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parking Places'), array('controller' => 'parking_places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parking Place'), array('controller' => 'parking_places', 'action' => 'add')); ?> </li>
	</ul>
</div>

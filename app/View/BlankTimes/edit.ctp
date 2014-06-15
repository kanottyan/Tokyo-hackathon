<div class="blankTimes form">
<?php echo $this->Form->create('BlankTime'); ?>
	<fieldset>
		<legend><?php echo __('Edit Blank Time'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BlankTime.end_time')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BlankTime.end_time'))); ?></li>
		<li><?php echo $this->Html->link(__('List Blank Times'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parking Places'), array('controller' => 'parking_places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parking Place'), array('controller' => 'parking_places', 'action' => 'add')); ?> </li>
	</ul>
</div>

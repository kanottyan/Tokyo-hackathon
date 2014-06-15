<div class="blankTimes view">
<h2><?php echo __('Blank Time'); ?></h2>
	<dl>
		<dt><?php echo __('Parking Place'); ?></dt>
		<dd>
			<?php echo $this->Html->link($blankTime['ParkingPlace'][''], array('controller' => 'parking_places', 'action' => 'view', $blankTime['ParkingPlace']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($blankTime['BlankTime']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($blankTime['BlankTime']['end_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Blank Time'), array('action' => 'edit', $blankTime['BlankTime']['end_time'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Blank Time'), array('action' => 'delete', $blankTime['BlankTime']['end_time']), null, __('Are you sure you want to delete # %s?', $blankTime['BlankTime']['end_time'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Blank Times'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blank Time'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parking Places'), array('controller' => 'parking_places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parking Place'), array('controller' => 'parking_places', 'action' => 'add')); ?> </li>
	</ul>
</div>

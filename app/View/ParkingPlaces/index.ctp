<div class="parkingPlaces index">
	<h2><?php echo __('Parking Places'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('longtitude'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('img_url'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parkingPlaces as $parkingPlace): ?>
	<tr>
		<td><?php echo h($parkingPlace['ParkingPlace']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($parkingPlace['User']['name'], array('controller' => 'users', 'action' => 'view', $parkingPlace['User']['id'])); ?>
		</td>
		<td><?php echo h($parkingPlace['ParkingPlace']['latitude']); ?>&nbsp;</td>
		<td><?php echo h($parkingPlace['ParkingPlace']['longtitude']); ?>&nbsp;</td>
		<td><?php echo h($parkingPlace['ParkingPlace']['price']); ?>&nbsp;</td>
		<td><?php echo h($parkingPlace['ParkingPlace']['img_url']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $parkingPlace['ParkingPlace']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $parkingPlace['ParkingPlace']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $parkingPlace['ParkingPlace']['id']), null, __('Are you sure you want to delete # %s?', $parkingPlace['ParkingPlace']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Parking Place'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blank Times'), array('controller' => 'blank_times', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blank Time'), array('controller' => 'blank_times', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>

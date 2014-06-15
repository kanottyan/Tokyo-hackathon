<div class="reservations index">
	<h2><?php echo __('Reservations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('parking_place_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('end_time'); ?></th>
			<th><?php echo $this->Paginator->sort('user_email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reservations as $reservation): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($reservation['ParkingPlace'][''], array('controller' => 'parking_places', 'action' => 'view', $reservation['ParkingPlace']['id'])); ?>
		</td>
		<td><?php echo h($reservation['Reservation']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['end_time']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['user_email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reservation['Reservation']['user_email'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reservation['Reservation']['user_email'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reservation['Reservation']['user_email']), null, __('Are you sure you want to delete # %s?', $reservation['Reservation']['user_email'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reservation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parking Places'), array('controller' => 'parking_places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parking Place'), array('controller' => 'parking_places', 'action' => 'add')); ?> </li>
	</ul>
</div>

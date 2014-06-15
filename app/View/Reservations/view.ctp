<div class="reservations view">
<h2><?php echo __('Reservation'); ?></h2>
	<dl>
		<dt><?php echo __('Parking Place'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reservation['ParkingPlace'][''], array('controller' => 'parking_places', 'action' => 'view', $reservation['ParkingPlace']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Email'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['user_email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reservation'), array('action' => 'edit', $reservation['Reservation']['user_email'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reservation'), array('action' => 'delete', $reservation['Reservation']['user_email']), null, __('Are you sure you want to delete # %s?', $reservation['Reservation']['user_email'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parking Places'), array('controller' => 'parking_places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parking Place'), array('controller' => 'parking_places', 'action' => 'add')); ?> </li>
	</ul>
</div>

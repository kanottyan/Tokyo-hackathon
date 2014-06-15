<div class="parkingPlaces view">
<h2><?php echo __('Parking Place'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
	<div class="control-group<?php if($this->Form->error('name')) echo ' error' ?>">
	<label for="ModelName">名称</label>
	<?php echo $this->Form->input('name', array('label' => false, 'div' => 'controls', 'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')))); ?>
</div>		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parkingPlace['User']['name'], array('controller' => 'users', 'action' => 'view', $parkingPlace['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latitude'); ?></dt>
		<dd>
			<?php echo h($parkingPlace['ParkingPlace']['latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longtitude'); ?></dt>
		<dd>
			<?php echo h($parkingPlace['ParkingPlace']['longtitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($parkingPlace['ParkingPlace']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img Url'); ?></dt>
		<dd>
			<?php echo h($parkingPlace['ParkingPlace']['img_url']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parking Place'), array('action' => 'edit', $parkingPlace['ParkingPlace']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Parking Place'), array('action' => 'delete', $parkingPlace['ParkingPlace']['id']), null, __('Are you sure you want to delete # %s?', $parkingPlace['ParkingPlace']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parking Places'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parking Place'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blank Times'), array('controller' => 'blank_times', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blank Time'), array('controller' => 'blank_times', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Blank Times'); ?></h3>
	<?php if (!empty($parkingPlace['BlankTime'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Parking Place Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parkingPlace['BlankTime'] as $blankTime): ?>
		<tr>
			<td><?php echo $blankTime['parking_place_id']; ?></td>
			<td><?php echo $blankTime['start_time']; ?></td>
			<td><?php echo $blankTime['end_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'blank_times', 'action' => 'view', $blankTime['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'blank_times', 'action' => 'edit', $blankTime['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blank_times', 'action' => 'delete', $blankTime['id']), null, __('Are you sure you want to delete # %s?', $blankTime['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Blank Time'), array('controller' => 'blank_times', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reservations'); ?></h3>
	<?php if (!empty($parkingPlace['Reservation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Parking Place Id'); ?></th>
		<th><?php echo __('Starttime'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parkingPlace['Reservation'] as $reservation): ?>
		<tr>
			<td><?php echo $reservation['parking_place_id']; ?></td>
			<td><?php echo $reservation['starttime']; ?></td>
			<td><?php echo $reservation['end_time']; ?></td>
			<td><?php echo $reservation['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reservations', 'action' => 'view', $reservation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reservations', 'action' => 'edit', $reservation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reservations', 'action' => 'delete', $reservation['id']), null, __('Are you sure you want to delete # %s?', $reservation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

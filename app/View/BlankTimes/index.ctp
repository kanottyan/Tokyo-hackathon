<div class="blankTimes index">
	<h2><?php echo __('Blank Times'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('parking_place_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('end_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($blankTimes as $blankTime): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($blankTime['ParkingPlace'][''], array('controller' => 'parking_places', 'action' => 'view', $blankTime['ParkingPlace']['id'])); ?>
		</td>
		<td><?php echo h($blankTime['BlankTime']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($blankTime['BlankTime']['end_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $blankTime['BlankTime']['end_time'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blankTime['BlankTime']['end_time'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $blankTime['BlankTime']['end_time']), null, __('Are you sure you want to delete # %s?', $blankTime['BlankTime']['end_time'])); ?>
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
		<li><?php echo $this->Html->link(__('New Blank Time'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parking Places'), array('controller' => 'parking_places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parking Place'), array('controller' => 'parking_places', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="clients index">
	<h2><?php echo __('Clients'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('img_url'); ?></th>
			<th><?php echo $this->Paginator->sort('login_id'); ?></th>
			<th><?php echo $this->Paginator->sort('login_password'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clients as $clients): ?>
	<tr>
		<td><?php echo h($clients['Client']['id']); ?>&nbsp;</td>
		<td><?php echo h($clients['Client']['name']); ?>&nbsp;</td>
		<td><?php echo h($clients['Client']['gender']); ?>&nbsp;</td>
		<td><?php echo h($clients['Client']['age']); ?>&nbsp;</td>
		<td><?php echo h($clients['Client']['email']); ?>&nbsp;</td>
		<td><?php echo h($clients['Client']['address']); ?>&nbsp;</td>
		<td><?php echo h($clients['Client']['img_url']); ?>&nbsp;</td>
		<td><?php echo h($clients['Client']['login_id']); ?>&nbsp;</td>
		<td><?php echo h($clients['Client']['login_password']); ?>&nbsp;</td>
		<!-- 坂本さんここからちょっと情報ついかしといて下さい。ageやemailとかとか-->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clients['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clients['Client']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clients['Client']['id']), null, __('Are you sure you want to delete # %s?', $clients['Client']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Clients'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>

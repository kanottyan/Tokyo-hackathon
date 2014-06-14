<div class="cliants form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php echo $this->Form->input('name'); ?>
	<?php echo $this->Form->input('email'); ?>
	<?php echo $this->Form->input('許容台数', array('type' => 'textarea')); ?>
	<?php echo $this->Form->input('最寄り駅', array('type' => 'textarea')); ?>
	<?php echo $this->Form->input('住所', array('type' => 'textarea')); ?>
	<?php echo $this->Form->input('年齢', array('type' => 'number')); ?>
	<?php echo $this->Form->input('料金', array('type' => 'textarea')); ?>
	<?php echo $this->Form->input('start', array('type' => 'number')); ?>
	<?php echo $this->Form->input('end', array('type' => 'number')); ?>
	<?php echo $this->Form->input('性別', array('type' => 'textarea')); ?>
	<?php echo $this->Form->input('画像URL', array('type' => 'textarea')); ?>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>

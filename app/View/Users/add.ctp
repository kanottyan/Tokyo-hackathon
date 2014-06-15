<div class="users form">
<!-- 汚くてすいませんっす -->
<div class="col-lg-2"></div>
<div class="col-lg-8">
<?php echo $this->Form->create('User'); ?>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('name', array(
			'name' => 'name',
			'placeholder' => 'name',
		));
    ?>
    <br/>
	<?php
		echo $this->Form->input('tel_num', array(
			'label' => 'tel_num : ',
			'placeholder' => 'tel_num',
		));
	?>
	<br/>
	<?php
		echo $this->Form->input('gender', array(
			'label' => 'gender : ',
			'placeholder' => 'gender',
		));
	?>
	<br/>
	<?php
		echo $this->Form->input('age', array(
			'label' => 'age : ',
			'placeholder' => 'age',
		));
	?>
	<br/>
	<?php
		echo $this->Form->input('email', array(
			'label' => 'Email address : ',
			'placeholder' => 'Enter email',
		));
	?>
	<br/>
	<?php
		echo $this->Form->input('address', array(
			'label' => 'address : ',
		));
    ?>
	<br/>
	<?php
        echo $this->Form->input('password', array(
			'type' => 'password',
			'label' => 'Password : ',
			'placeholder' => 'Password'
		));
    ?>
    <br/>
    <?php
        echo $this->Form->input('is_users', array(
			'type' => 'checkbox',
			'label' => 'is_users : ',
			'checkboxLabel' => 'is_users'
		));
    ?>
    <br/>
<?php echo $this->Form->end(array(
		'text' => 'test',
		'class' => 'btn btn-info'
	)); ?>
</div>
<div class="col-lg-2"></div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

			'placeholder' => 'address',
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>

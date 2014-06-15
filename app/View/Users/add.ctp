<div class="users form">
<!-- 汚くてすいませんっす -->
<?php echo $this->Form->create('User'); ?>
		<legend><?php echo __('会員登録'); ?></legend>
	<ul style="list-style:none">
	<li><?php
		echo $this->Form->input('name', array(
			'name' => 'name',
			'placeholder' => '氏名',
		));
    ?></li>
    <br/>
	<li><?php
		echo $this->Form->input('tel_num', array(
			'label' => 'TEL : ',
			'placeholder' => '電話番号',
		));
	?></li>
	<br/>
	<li><?php
		echo $this->Form->input('gender', array(
			'label' => '性別',
			'placeholder' => '男',
		));
	?></li>
	<br/>
	<li><?php
		echo $this->Form->input('age', array(
			'label' => '年齢 : ',
			'placeholder' => '25歳',
		));
	?></li>
	<br/>
	<li><?php
		echo $this->Form->input('email', array(
			'label' => 'Email : ',
			'placeholder' => 'piyopiyo@gmail.com',
		));
	?>
	</li>
	<br/>
	<li><?php
		echo $this->Form->input('address', array(
			'label' => '住所 : ',
		));
    ?></li>
	<br/>
	<li><?php
        echo $this->Form->input('password', array(
			'type' => 'password',
			'label' => 'Password : ',
			'placeholder' => 'Password'
		));
    ?></li>
    <br/>
    <li><?php
        echo $this->Form->input('is_users', array(
			'type' => 'checkbox',
			'label' => 'バイクを停めたい！！！ ',
			'checkboxLabel' => 'i am rider'
		));
    ?></li>
    <br/>

<li><?php echo $this->Form->end(array(
		'text' => 'test',
		'class' => 'btn btn-info'
	)); ?></li>
	</ul>
</div>


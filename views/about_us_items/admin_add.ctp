<div class="aboutUsItems form">
<?php echo $this->Form->create('AboutUsItem');?>
	<fieldset>
		<legend><?php __('Admin Add About Us Item'); ?></legend>
	<?php
		echo $this->Form->input('menu_title');
		echo $this->Form->input('content_title');
		echo $this->Form->input('content_text');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List About Us Items', true), array('action' => 'index'));?></li>
	</ul>
</div>

<?php echo $this->element('actions_menu'); ?>

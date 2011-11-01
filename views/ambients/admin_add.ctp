<div class="ambients form">
<?php echo $this->Form->create('Ambient');?>
	<fieldset>
		<legend><?php __('Admin Add Ambient'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

<?php echo $this->element('actions_menu'); ?>

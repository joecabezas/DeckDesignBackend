<div class="contactInfos form">
<?php echo $this->Form->create('ContactInfo');?>
	<fieldset>
		<legend><?php __('Admin Add Contact Info'); ?></legend>
	<?php
		echo $this->Form->input('info');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

<?php echo $this->element('actions_menu'); ?>

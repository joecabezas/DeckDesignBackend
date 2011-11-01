<div class="ambientItems form">
<?php echo $this->Form->create('AmbientItem', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Admin Edit Ambient Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ambient_id');
		echo $this->Form->input('name');

		echo $this->Form->input('image', array('type' => 'file', 'label' => 'Imagen'));
		echo $this->Form->input('image_dir', array('type' => 'hidden'));

		echo $this->Form->input('mask', array('type' => 'file', 'label' => 'Máscara'));
		echo $this->Form->input('mask_dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

<?php echo $this->element('actions_menu'); ?>

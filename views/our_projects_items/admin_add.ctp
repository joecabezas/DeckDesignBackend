<div class="ourProjectsItems form">
<?php echo $this->Form->create('OurProjectsItem', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Admin Add Our Projects Item'); ?></legend>
	<?php
		echo $this->Form->input('content_title');
		echo $this->Form->input('content_text');

		echo $this->Form->input('image', array('type' => 'file', 'label' => 'Imagen'));
		echo $this->Form->input('image_dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

<?php echo $this->element('actions_menu'); ?>

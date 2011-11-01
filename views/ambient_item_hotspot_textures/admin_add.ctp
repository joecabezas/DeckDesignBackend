<div class="ambientItemHotspotTextures form">
<?php echo $this->Form->create('AmbientItemHotspotTexture', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Admin Add Ambient Item Hotspot Texture'); ?></legend>
	<?php
		echo $this->Form->input('ambient_item_hotspot_id');
		echo $this->Form->input('name');

		echo $this->Form->input('image', array('type' => 'file', 'label' => 'Imagen'));
		echo $this->Form->input('image_dir', array('type' => 'hidden'));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

<?php echo $this->element('actions_menu'); ?>

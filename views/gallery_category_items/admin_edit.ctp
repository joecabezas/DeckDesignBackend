<div class="galleryCategoryItems form">
<?php echo $this->Form->create('GalleryCategoryItem', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Admin Edit Gallery Category Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('gallery_category_id');
		echo $this->Form->input('content_title');
		echo $this->Form->input('content_text');

		echo $this->Form->input('image', array('type' => 'file', 'label' => 'Imagen'));
		echo $this->Form->input('image_dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

<?php echo $this->element('actions_menu'); ?>

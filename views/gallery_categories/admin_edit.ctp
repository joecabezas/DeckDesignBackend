<div class="galleryCategories form">
<?php echo $this->Form->create('GalleryCategory');?>
	<fieldset>
		<legend><?php __('Admin Edit Gallery Category'); ?></legend>
	<?php
		echo $this->Form->input('id');

		//crear raiz
		array_unshift($galleryCategoryParents, array('0' => '---'));


		echo $this->Form->input('gallery_category_id', array('options' => $galleryCategoryParents));
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

<?php echo $this->element('actions_menu'); ?>

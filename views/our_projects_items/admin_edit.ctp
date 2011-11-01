<div class="ourProjectsItems form">
<?php echo $this->Form->create('OurProjectsItem', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Admin Edit Our Projects Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('content_title');
		echo $this->Form->input('content_text');

		echo $this->Form->input('image', array('type' => 'file', 'label' => 'Imagen'));
		echo $this->Form->input('image_dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('OurProjectsItem.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('OurProjectsItem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Our Projects Items', true), array('action' => 'index'));?></li>
	</ul>
</div>

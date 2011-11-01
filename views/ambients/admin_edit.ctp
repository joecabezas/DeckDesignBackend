<div class="ambients form">
<?php echo $this->Form->create('Ambient');?>
	<fieldset>
		<legend><?php __('Admin Edit Ambient'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Ambient.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Ambient.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ambients', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ambient Items', true), array('controller' => 'ambient_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ambient Item', true), array('controller' => 'ambient_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
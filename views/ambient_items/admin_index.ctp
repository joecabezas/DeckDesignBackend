<div class="ambientItems index">
	<h2><?php __('Ambient Items');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('ambient_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('image');?></th>
			<th><?php echo $this->Paginator->sort('mask');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ambientItems as $ambientItem):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ambientItem['AmbientItem']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ambientItem['Ambient']['name'], array('controller' => 'ambients', 'action' => 'view', $ambientItem['Ambient']['id'])); ?>
		</td>
		<td><?php echo $ambientItem['AmbientItem']['name']; ?>&nbsp;</td>
		<td>
			<?php
				$files_dir = Inflector::underscore(Inflector::singularize($this->params['controller']));
				$field = 'image';
				$img = $ambientItem['AmbientItem']['image'];
				$img_dir = $ambientItem['AmbientItem']['image_dir'];
				$img_url = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'chica_'.$img;

				echo $html->image($img_url, array('style' => 'width:150px;'));
			?>
		</td>
		<td>
			<?php
				$files_dir = Inflector::underscore(Inflector::singularize($this->params['controller']));
				$field = 'mask';
				$img = $ambientItem['AmbientItem']['mask'];
				$img_dir = $ambientItem['AmbientItem']['mask_dir'];
				$img_url = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'chica_'.$img;

				echo $html->image($img_url, array('style' => 'width:150px;'));
			?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ambientItem['AmbientItem']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ambientItem['AmbientItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ambientItem['AmbientItem']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>

<?php echo $this->element('actions_menu'); ?>

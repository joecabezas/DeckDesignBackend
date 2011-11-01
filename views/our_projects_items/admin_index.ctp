<div class="ourProjectsItems index">
	<h2><?php __('Our Projects Items');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('content_title');?></th>
			<th><?php echo $this->Paginator->sort('content_text');?></th>
			<th><?php echo $this->Paginator->sort('image');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ourProjectsItems as $ourProjectsItem):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ourProjectsItem['OurProjectsItem']['id']; ?>&nbsp;</td>
		<td><?php echo $ourProjectsItem['OurProjectsItem']['content_title']; ?>&nbsp;</td>
		<td><?php echo $ourProjectsItem['OurProjectsItem']['content_text']; ?>&nbsp;</td>
		<td>
			<?php
				$files_dir = Inflector::underscore(Inflector::singularize($this->params['controller']));
				$field = 'image';
				$img = $ourProjectsItem['OurProjectsItem']['image'];
				$img_dir = $ourProjectsItem['OurProjectsItem']['image_dir'];
				$img_url = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'chica_'.$img;

				echo $html->image($img_url, array('style' => 'width:150px;'));
			?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ourProjectsItem['OurProjectsItem']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ourProjectsItem['OurProjectsItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ourProjectsItem['OurProjectsItem']['id'])); ?>
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

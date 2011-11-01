<div class="ambientItemHotspots index">
	<h2><?php __('Ambient Item Hotspots');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('ambient_item_id');?></th>
			<th><?php echo $this->Paginator->sort('tl_x');?></th>
			<th><?php echo $this->Paginator->sort('tl_y');?></th>
			<th><?php echo $this->Paginator->sort('tr_x');?></th>
			<th><?php echo $this->Paginator->sort('tr_y');?></th>
			<th><?php echo $this->Paginator->sort('bl_x');?></th>
			<th><?php echo $this->Paginator->sort('bl_y');?></th>
			<th><?php echo $this->Paginator->sort('br_x');?></th>
			<th><?php echo $this->Paginator->sort('br_y');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ambientItemHotspots as $ambientItemHotspot):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ambientItemHotspot['AmbientItemHotspot']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ambientItemHotspot['AmbientItem']['name'], array('controller' => 'ambient_items', 'action' => 'view', $ambientItemHotspot['AmbientItem']['id'])); ?>
		</td>
		<td><?php echo $ambientItemHotspot['AmbientItemHotspot']['tl_x']; ?>&nbsp;</td>
		<td><?php echo $ambientItemHotspot['AmbientItemHotspot']['tl_y']; ?>&nbsp;</td>
		<td><?php echo $ambientItemHotspot['AmbientItemHotspot']['tr_x']; ?>&nbsp;</td>
		<td><?php echo $ambientItemHotspot['AmbientItemHotspot']['tr_y']; ?>&nbsp;</td>
		<td><?php echo $ambientItemHotspot['AmbientItemHotspot']['bl_x']; ?>&nbsp;</td>
		<td><?php echo $ambientItemHotspot['AmbientItemHotspot']['bl_y']; ?>&nbsp;</td>
		<td><?php echo $ambientItemHotspot['AmbientItemHotspot']['br_x']; ?>&nbsp;</td>
		<td><?php echo $ambientItemHotspot['AmbientItemHotspot']['br_y']; ?>&nbsp;</td>
		<td><?php echo $ambientItemHotspot['AmbientItemHotspot']['created']; ?>&nbsp;</td>
		<td><?php echo $ambientItemHotspot['AmbientItemHotspot']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View', true), array('action' => 'view', $ambientItemHotspot['AmbientItemHotspot']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ambientItemHotspot['AmbientItemHotspot']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ambientItemHotspot['AmbientItemHotspot']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ambientItemHotspot['AmbientItemHotspot']['id'])); ?>
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

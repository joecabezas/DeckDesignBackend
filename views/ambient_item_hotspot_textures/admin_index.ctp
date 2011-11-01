<div class="ambientItemHotspotTextures index">
	<h2><?php __('Ambient Item Hotspot Textures');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('ambient_item_hotspot_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('image');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ambientItemHotspotTextures as $ambientItemHotspotTexture):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ambientItemHotspotTexture['AmbientItemHotspotTexture']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ambientItemHotspotTexture['AmbientItemHotspot']['id'], array('controller' => 'ambient_item_hotspots', 'action' => 'view', $ambientItemHotspotTexture['AmbientItemHotspot']['id'])); ?>
		</td>
		<td><?php echo $ambientItemHotspotTexture['AmbientItemHotspotTexture']['name']; ?>&nbsp;</td>
		<td>
			<?php
				$files_dir = Inflector::underscore(Inflector::singularize($this->params['controller']));
				$field = 'image';
				$img = $ambientItemHotspotTexture['AmbientItemHotspotTexture']['image'];
				$img_dir = $ambientItemHotspotTexture['AmbientItemHotspotTexture']['image_dir'];
				$img_url = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'chica_'.$img;

				echo $html->image($img_url, array('style' => 'width:150px;'));
			?>
		</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View', true), array('action' => 'view', $ambientItemHotspotTexture['AmbientItemHotspotTexture']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ambientItemHotspotTexture['AmbientItemHotspotTexture']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ambientItemHotspotTexture['AmbientItemHotspotTexture']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ambientItemHotspotTexture['AmbientItemHotspotTexture']['id'])); ?>
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

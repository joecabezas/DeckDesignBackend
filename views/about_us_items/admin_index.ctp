<div class="aboutUsItems index">
	<h2><?php __('About Us Items');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('menu_title');?></th>
			<th><?php echo $this->Paginator->sort('content_title');?></th>
			<th><?php echo $this->Paginator->sort('content_text');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($aboutUsItems as $aboutUsItem):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $aboutUsItem['AboutUsItem']['id']; ?>&nbsp;</td>
		<td><?php echo $aboutUsItem['AboutUsItem']['menu_title']; ?>&nbsp;</td>
		<td><?php echo $aboutUsItem['AboutUsItem']['content_title']; ?>&nbsp;</td>
		<td><?php echo $aboutUsItem['AboutUsItem']['content_text']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $aboutUsItem['AboutUsItem']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $aboutUsItem['AboutUsItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $aboutUsItem['AboutUsItem']['id'])); ?>
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

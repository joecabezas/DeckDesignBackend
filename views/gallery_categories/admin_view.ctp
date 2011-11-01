<div class="galleryCategories view">
<h2><?php  __('Gallery Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galleryCategory['GalleryCategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gallery Category Parent'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($galleryCategory['GalleryCategoryParent']['name'], array('controller' => 'gallery_categories', 'action' => 'view', $galleryCategory['GalleryCategoryParent']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galleryCategory['GalleryCategory']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galleryCategory['GalleryCategory']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galleryCategory['GalleryCategory']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gallery Category', true), array('action' => 'edit', $galleryCategory['GalleryCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Gallery Category', true), array('action' => 'delete', $galleryCategory['GalleryCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $galleryCategory['GalleryCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gallery Categories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery Category', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gallery Categories', true), array('controller' => 'gallery_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery Category Parent', true), array('controller' => 'gallery_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gallery Category Items', true), array('controller' => 'gallery_category_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery Category Item', true), array('controller' => 'gallery_category_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Gallery Categories');?></h3>
	<?php if (!empty($galleryCategory['GalleryCategoryChild'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Gallery Category Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($galleryCategory['GalleryCategoryChild'] as $galleryCategoryChild):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $galleryCategoryChild['id'];?></td>
			<td><?php echo $galleryCategoryChild['gallery_category_id'];?></td>
			<td><?php echo $galleryCategoryChild['name'];?></td>
			<td><?php echo $galleryCategoryChild['created'];?></td>
			<td><?php echo $galleryCategoryChild['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'gallery_categories', 'action' => 'view', $galleryCategoryChild['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'gallery_categories', 'action' => 'edit', $galleryCategoryChild['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'gallery_categories', 'action' => 'delete', $galleryCategoryChild['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $galleryCategoryChild['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Gallery Category Child', true), array('controller' => 'gallery_categories', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Gallery Category Items');?></h3>
	<?php if (!empty($galleryCategory['GalleryCategoryItem'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Gallery Category Id'); ?></th>
		<th><?php __('Content Title'); ?></th>
		<th><?php __('Content Text'); ?></th>
		<th><?php __('Image'); ?></th>
		<th><?php __('Image Dir'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($galleryCategory['GalleryCategoryItem'] as $galleryCategoryItem):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $galleryCategoryItem['id'];?></td>
			<td><?php echo $galleryCategoryItem['gallery_category_id'];?></td>
			<td><?php echo $galleryCategoryItem['content_title'];?></td>
			<td><?php echo $galleryCategoryItem['content_text'];?></td>
			<td><?php echo $galleryCategoryItem['image'];?></td>
			<td><?php echo $galleryCategoryItem['image_dir'];?></td>
			<td><?php echo $galleryCategoryItem['created'];?></td>
			<td><?php echo $galleryCategoryItem['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'gallery_category_items', 'action' => 'view', $galleryCategoryItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'gallery_category_items', 'action' => 'edit', $galleryCategoryItem['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'gallery_category_items', 'action' => 'delete', $galleryCategoryItem['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $galleryCategoryItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Gallery Category Item', true), array('controller' => 'gallery_category_items', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

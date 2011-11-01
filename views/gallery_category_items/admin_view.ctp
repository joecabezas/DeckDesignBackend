<div class="galleryCategoryItems view">
<h2><?php  __('Gallery Category Item');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galleryCategoryItem['GalleryCategoryItem']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gallery Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($galleryCategoryItem['GalleryCategory']['name'], array('controller' => 'gallery_categories', 'action' => 'view', $galleryCategoryItem['GalleryCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galleryCategoryItem['GalleryCategoryItem']['content_title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content Text'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galleryCategoryItem['GalleryCategoryItem']['content_text']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galleryCategoryItem['GalleryCategoryItem']['image']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image Dir'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galleryCategoryItem['GalleryCategoryItem']['image_dir']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galleryCategoryItem['GalleryCategoryItem']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galleryCategoryItem['GalleryCategoryItem']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gallery Category Item', true), array('action' => 'edit', $galleryCategoryItem['GalleryCategoryItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Gallery Category Item', true), array('action' => 'delete', $galleryCategoryItem['GalleryCategoryItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $galleryCategoryItem['GalleryCategoryItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gallery Category Items', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery Category Item', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gallery Categories', true), array('controller' => 'gallery_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery Category', true), array('controller' => 'gallery_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>

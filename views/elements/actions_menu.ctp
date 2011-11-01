<div class="actions">
	<h3><?php __('Administration'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Logout', true), array('controller' => 'users','action' => 'logout', 'admin' => false)); ?></li>
	</ul>
	<h3><?php __('Our Projects'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Our Projects Items', true), array('controller' => 'OurProjectsItems', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Our Projects Item', true), array('controller' => 'OurProjectsItems', 'action' => 'add'));?></li>
	</ul>

	<h3><?php __('About us'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List About Us Items', true), array('controller' => 'AboutUsItems', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New About Us Item', true), array('controller' => 'AboutUsItems', 'action' => 'add')); ?></li>
	</ul>

	<h3><?php __('Ambients'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Ambients', true), array('controller' => 'Ambients', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Ambient', true), array('controller' => 'Ambients', 'action' => 'add'));?></li>
	</ul>

	<h3><?php __('Ambient Items'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Ambient Items', true), array('controller' => 'AmbientItems', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Ambient Item', true), array('controller' => 'AmbientItems', 'action' => 'add'));?></li>
	</ul>

	<h3><?php __('Ambient Item Hotspots'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ambient Item Hotspots', true), array('controller' => 'AmbientItemHotspots', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Ambient Item Hotspot', true), array('controller' => 'AmbientItemHotspots', 'action' => 'add'));?></li>
	</ul>

	<h3><?php __('Hotspot Textures'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hotspot Textures', true), array('controller' => 'AmbientItemHotspotTextures', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Hotspot Texture', true), array('controller' => 'AmbientItemHotspotTextures', 'action' => 'add'));?></li>
	</ul>

	<h3><?php __('Contact Info'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('View Contact Info', true), array('controller' => 'ContactInfos', 'action' => 'index'));?></li>
	</ul>

	<h3><?php __('Gallery Categories'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Gallery Categories', true), array('controller' => 'GalleryCategories', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Gallery Category', true), array('controller' => 'GalleryCategories', 'action' => 'add'));?></li>
	</ul>

	<h3><?php __('Gallery Category Items'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Gallery Category Items', true), array('controller' => 'GalleryCategoryItems', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Gallery Category Item', true), array('controller' => 'GalleryCategoryItems', 'action' => 'add'));?></li>
	</ul>
</div>

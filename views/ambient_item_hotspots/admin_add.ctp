<div class="ambientItemHotspots form">
<?php echo $this->Form->create('AmbientItemHotspot');?>
	<fieldset>
		<legend><?php __('Admin Add Ambient Item Hotspot'); ?></legend>
	<?php	echo $this->Form->input('ambient_item_id');	?>

		<fieldset>
			<legend><?php __('Top Left Corner'); ?></legend>
			<?php	echo $this->Form->input('tl_x', array('label' => 'X'));	?>
			<?php	echo $this->Form->input('tl_y', array('label' => 'Y'));	?>
		</fieldset>

		<fieldset>
			<legend><?php __('Top Right Corner'); ?></legend>
			<?php	echo $this->Form->input('tr_x', array('label' => 'X'));	?>
			<?php	echo $this->Form->input('tr_y', array('label' => 'Y'));	?>
		</fieldset>

		<fieldset>
			<legend><?php __('Bottom Left Corner'); ?></legend>
			<?php	echo $this->Form->input('bl_x', array('label' => 'X'));	?>
			<?php	echo $this->Form->input('bl_y', array('label' => 'Y'));	?>
		</fieldset>


		<fieldset>
			<legend><?php __('Bottom Right Corner'); ?></legend>
			<?php	echo $this->Form->input('br_x', array('label' => 'X'));	?>
			<?php	echo $this->Form->input('br_y', array('label' => 'Y'));	?>
		</fieldset>

	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

<?php echo $this->element('actions_menu'); ?>


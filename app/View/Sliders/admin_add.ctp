<div class="sliders form">
<?php echo $this->Form->create('Slider'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Slider'); ?></legend>
	<?php
		echo $this->Form->input('link');
		echo $this->Form->input('title');
		echo $this->Form->input('subtitle');
		echo $this->Form->input('image');
		echo $this->Form->input('position');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sliders'), array('action' => 'index')); ?></li>
	</ul>
</div>
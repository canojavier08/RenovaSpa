<div class="opiniones form">
<?php echo $this->Form->create('Opinione'); ?>
	<fieldset>
		<legend><?php echo __('Add Opinione'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Opiniones'), array('action' => 'index')); ?></li>
	</ul>
</div>

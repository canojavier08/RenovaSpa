<div class="opiniones form">
<?php echo $this->Form->create('Opinione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Opinione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Opinione.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Opinione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Opiniones'), array('action' => 'index')); ?></li>
	</ul>
</div>

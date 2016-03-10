<div class="circustanciasMedicas form">
<?php echo $this->Form->create('CircustanciasMedica'); ?>
	<fieldset>
		<legend><?php echo __('Edit Circustancias Medica'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CircustanciasMedica.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CircustanciasMedica.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Circustancias Medicas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>

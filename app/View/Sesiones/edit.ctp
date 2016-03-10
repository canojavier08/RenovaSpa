<div class="sesiones form">
<?php echo $this->Form->create('Sesione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sesione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('opinion_id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('terapeuta_id');
		echo $this->Form->input('tratamiento_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sesione.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Sesione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sesiones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Opiniones'), array('controller' => 'opiniones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opinione'), array('controller' => 'opiniones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terapeutas'), array('controller' => 'terapeutas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terapeuta'), array('controller' => 'terapeutas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamiento'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Cliente'); ?></legend>
	<?php
		echo $this->Form->input('pais_id');
		echo $this->Form->input('idioma_id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('agencia_id');
		echo $this->Form->input('circustancias_medica_id');
		echo $this->Form->input('fecha_alta');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('edad');
		echo $this->Form->input('correo_electronico');
		echo $this->Form->input('habitacion');
		echo $this->Form->input('firma');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Paises'), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paise'), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Idiomas'), array('controller' => 'idiomas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Idioma'), array('controller' => 'idiomas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hoteles'), array('controller' => 'hoteles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotele'), array('controller' => 'hoteles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agencias'), array('controller' => 'agencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agencia'), array('controller' => 'agencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Circustancias Medicas'), array('controller' => 'circustancias_medicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Circustancias Medica'), array('controller' => 'circustancias_medicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sesiones'), array('controller' => 'sesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sesione'), array('controller' => 'sesiones', 'action' => 'add')); ?> </li>
	</ul>
</div>

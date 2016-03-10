
<div class="page-header">
	<h2><?php echo __('Lista de Clientes'); ?></h2>

</div>
	<div class="col-xl-12">
	<table class="table table-bordered">
	<thead>
	<tr>
			<!--<th><?php// echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('pais_id'); ?></th>
			<th><?php echo $this->Paginator->sort('idioma_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('agencia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('circustancias_medica_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_alta'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_electronico'); ?></th>
			<th><?php echo $this->Paginator->sort('habitacion'); ?></th>
			<th><?php echo $this->Paginator->sort('firma'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<!--<td><?php// echo h($cliente['Cliente']['id']); ?>&nbsp;</td>-->
		<td>
			<?php echo $this->Html->link($cliente['Paise']['nombre'], array('controller' => 'paises', 'action' => 'view', $cliente['Paise']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['Idioma']['nombre'], array('controller' => 'idiomas', 'action' => 'view', $cliente['Idioma']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['Hotele']['nombre'], array('controller' => 'hoteles', 'action' => 'view', $cliente['Hotele']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['Agencia']['nombre_comercial'], array('controller' => 'agencias', 'action' => 'view', $cliente['Agencia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['CircustanciasMedica']['nombre'], array('controller' => 'circustancias_medicas', 'action' => 'view', $cliente['CircustanciasMedica']['id'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['fecha_alta']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['edad']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['correo_electronico']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['habitacion']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['firma']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['id']), array('class' => 'label label-danger'), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
</table>


	</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, Mostrando {:current} filas de {:count} en total.')
	));
	?>	</p>
	

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?></li>
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

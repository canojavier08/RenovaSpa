
<div class="page-header">
	<h2><?php echo __('Sesiones'); ?></h2>
</div>
<div class="col-xl-12">

	<table class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('opinion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('terapeuta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tratamiento_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sesiones as $sesione): ?>
	<tr>
		<td><?php echo h($sesione['Sesione']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sesione['Opinione']['nombre'], array('controller' => 'opiniones', 'action' => 'view', $sesione['Opinione']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesione['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $sesione['Cliente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesione['Terapeuta']['nombre'], array('controller' => 'terapeutas', 'action' => 'view', $sesione['Terapeuta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesione['Tratamiento']['nombre'], array('controller' => 'tratamientos', 'action' => 'view', $sesione['Tratamiento']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sesione['Sesione']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sesione['Sesione']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sesione['Sesione']['id']), array('class' => 'label label-danger'), __('Are you sure you want to delete # %s?', $sesione['Sesione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sesione'), array('action' => 'add')); ?></li>
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

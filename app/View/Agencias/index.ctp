
<div class="page-header">
	<h2><?php echo __('Agencias'); ?></h2>
</div>
<div class="col-xl-12">

	<table  class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('razon_social'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_comercial'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_electronico'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($agencias as $agencia): ?>
	<tr>
		<td><?php echo h($agencia['Agencia']['id']); ?>&nbsp;</td>
		<td><?php echo h($agencia['Agencia']['razon_social']); ?>&nbsp;</td>
		<td><?php echo h($agencia['Agencia']['nombre_comercial']); ?>&nbsp;</td>
		<td><?php echo h($agencia['Agencia']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($agencia['Agencia']['correo_electronico']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $agencia['Agencia']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agencia['Agencia']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agencia['Agencia']['id']), array('class' => 'label label-danger'), __('Are you sure you want to delete # %s?', $agencia['Agencia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Agencia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>

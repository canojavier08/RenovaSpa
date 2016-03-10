
<div class="page-header">
	<h2><?php echo __('Lista de Idiomas'); ?></h2>
</div>
<div class="col-lx-12">

	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($idiomas as $idioma): ?>
	<tr>
		<td><?php echo h($idioma['Idioma']['id']); ?>&nbsp;</td>
		<td><?php echo h($idioma['Idioma']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $idioma['Idioma']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $idioma['Idioma']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $idioma['Idioma']['id']), array('class' => 'label label-danger'), __('Are you sure you want to delete # %s?', $idioma['Idioma']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Idioma'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>

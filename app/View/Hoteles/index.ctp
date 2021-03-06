
<div class="page-header">
	<h2><?php echo __('Hoteles'); ?></h2>
</div>
<div class="col-xl-12">

	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($hoteles as $hotele): ?>
	<tr>
		<td><?php echo h($hotele['Hotele']['id']); ?>&nbsp;</td>
		<td><?php echo h($hotele['Hotele']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($hotele['Hotele']['ubicacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotele['Hotele']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotele['Hotele']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotele['Hotele']['id']), array('class' => 'label label-danger'), __('Are you sure you want to delete # %s?', $hotele['Hotele']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hotele'), array('action' => 'add')); ?></li>
	</ul>
</div>

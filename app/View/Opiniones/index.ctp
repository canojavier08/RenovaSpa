
<div class="page-header">
	<h2><?php echo __('Opiniones'); ?></h2>
</div>
<div class="col-xl-12">
	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($opiniones as $opinione): ?>
	<tr>
		<td><?php echo h($opinione['Opinione']['id']); ?>&nbsp;</td>
		<td><?php echo h($opinione['Opinione']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $opinione['Opinione']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $opinione['Opinione']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $opinione['Opinione']['id']), array('class' => 'label label-danger'), __('Are you sure you want to delete # %s?', $opinione['Opinione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Opinione'), array('action' => 'add')); ?></li>
	</ul>
</div>

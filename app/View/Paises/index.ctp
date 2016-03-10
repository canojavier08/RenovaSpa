
<div class="page-header">
	<h2><?php echo __('Lista de Paises'); ?></h2>
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
	<?php foreach ($paises as $paise): ?>
	<tr>
		<td><?php echo h($paise['Paise']['id']); ?>&nbsp;</td>
		<td><?php echo h($paise['Paise']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $paise['Paise']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paise['Paise']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paise['Paise']['id']), array('class' => 'label label-danger'), __('Are you sure you want to delete # %s?', $paise['Paise']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Paise'), array('action' => 'add')); ?></li>
	</ul>
</div>


<div class="page-header">
	<h2><?php echo __('Circustancias Medicas'); ?></h2>
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
	<?php foreach ($circustanciasMedicas as $circustanciasMedica): ?>
	<tr>
		<td><?php echo h($circustanciasMedica['CircustanciasMedica']['id']); ?>&nbsp;</td>
		<td><?php echo h($circustanciasMedica['CircustanciasMedica']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $circustanciasMedica['CircustanciasMedica']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $circustanciasMedica['CircustanciasMedica']['id']), array('class' => 'label label-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $circustanciasMedica['CircustanciasMedica']['id']), array('class' => 'label label-danger'), __('Are you sure you want to delete # %s?', $circustanciasMedica['CircustanciasMedica']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Circustancias Medica'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>

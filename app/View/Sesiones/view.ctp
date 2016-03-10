<div class="sesiones view">
<h2><?php echo __('Sesione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sesione['Sesione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opinione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Opinione']['nombre'], array('controller' => 'opiniones', 'action' => 'view', $sesione['Opinione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $sesione['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terapeuta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Terapeuta']['nombre'], array('controller' => 'terapeutas', 'action' => 'view', $sesione['Terapeuta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tratamiento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Tratamiento']['nombre'], array('controller' => 'tratamientos', 'action' => 'view', $sesione['Tratamiento']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sesione'), array('action' => 'edit', $sesione['Sesione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sesione'), array('action' => 'delete', $sesione['Sesione']['id']), array(), __('Are you sure you want to delete # %s?', $sesione['Sesione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sesiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sesione'), array('action' => 'add')); ?> </li>
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

<div class="opiniones view">
<h2><?php echo __('Opinione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($opinione['Opinione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($opinione['Opinione']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Opinione'), array('action' => 'edit', $opinione['Opinione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Opinione'), array('action' => 'delete', $opinione['Opinione']['id']), array(), __('Are you sure you want to delete # %s?', $opinione['Opinione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Opiniones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opinione'), array('action' => 'add')); ?> </li>
	</ul>
</div>

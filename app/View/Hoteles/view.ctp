<div class="hoteles view">
<h2><?php echo __('Hotele'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotele['Hotele']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($hotele['Hotele']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo h($hotele['Hotele']['ubicacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotele'), array('action' => 'edit', $hotele['Hotele']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotele'), array('action' => 'delete', $hotele['Hotele']['id']), array(), __('Are you sure you want to delete # %s?', $hotele['Hotele']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hoteles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotele'), array('action' => 'add')); ?> </li>
	</ul>
</div>




<br>
<br>

<div >
<h2><?php echo __('Cliente'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Paise']['nombre'], array('controller' => 'paises', 'action' => 'view', $cliente['Paise']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idioma'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Idioma']['nombre'], array('controller' => 'idiomas', 'action' => 'view', $cliente['Idioma']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotele'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Hotele']['nombre'], array('controller' => 'hoteles', 'action' => 'view', $cliente['Hotele']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agencia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Agencia']['nombre_comercial'], array('controller' => 'agencias', 'action' => 'view', $cliente['Agencia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Circustancias Medica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['CircustanciasMedica']['nombre'], array('controller' => 'circustancias_medicas', 'action' => 'view', $cliente['CircustanciasMedica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Alta'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['fecha_alta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Electronico'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['correo_electronico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Habitacion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['habitacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firma'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['firma']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="btn-group">
	<h3>Elige una opción</h3>
 <?php echo $this->Html->link(__('Imprimir hoja'), array('action' => 'view', $cliente['Cliente']['id'], 'ext' => 'pdf'), array('class' => 'label label-info')); ?>
	
</div>


<div class="related">
	<h3><?php echo __('Related Sesiones'); ?></h3>
	<?php if (!empty($cliente['Sesione'])): ?>
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Opinion Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Terapeuta Id'); ?></th>
		<th><?php echo __('Tratamiento Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Sesione'] as $sesione): ?>
		<tr>
			<td><?php echo $sesione['id']; ?></td>
			<td><?php echo $sesione['opinion_id']; ?></td>
			<td><?php echo $sesione['cliente_id']; ?></td>
			<td><?php echo $sesione['terapeuta_id']; ?></td>
			<td><?php echo $sesione['tratamiento_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sesiones', 'action' => 'view', $sesione['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sesiones', 'action' => 'edit', $sesione['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sesiones', 'action' => 'delete', $sesione['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $sesione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>

</div>
<?php endif; ?>

	<div class="actions">
		<ul>

			<li><?php echo $this->Html->link(__('New Sesione'), array('controller' => 'sesiones', 'action' => 'add'), array('class' => 'btn btn-sm btn-default')); ?> </li>
		</ul>
	</div>
</div>

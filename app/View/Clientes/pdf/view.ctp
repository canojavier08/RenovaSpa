<div class="Clientes view">
  
   <h3>Revise bien sus datos antes de mandar el archivo a imprimir.</h3> 
  
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pais'); ?></dt>
		<dd>
			<?php echo h($cliente['Paise']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idioma'); ?></dt>
		<dd>
			<?php echo h($cliente['Idioma']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo h($cliente['Hotele']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agencia'); ?></dt>
		<dd>
			<?php echo h($cliente['Agencia']['nombre_comercial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Circunstancias_medicas'); ?></dt>
		<dd>
			<?php echo h($cliente['CircustanciasMedica']['nombre']); ?>
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

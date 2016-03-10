
<div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Renova Spa</h3>
              <nav id="menu">
                <ul class="nav masthead-nav">
                 
                  <li><?php echo $this->Html->link('Lista de clientes', array('controller' => 'clientes', 'action' => 'index'))?></li>
                  <li><?php echo $this->Html->link('Paises', array('controller' => 'paises', 'action' => 'index'))?></li>
                  <li><?php echo $this->Html->link('Idiomas', array('controller' => 'idiomas', 'action' => 'index')) ?></li>
                  <li><?php echo $this->Html->link('Hoteles', array('controller' => 'hoteles', 'action' => 'index')) ?></li>
                  <li><?php echo $this->Html->link('Agencias', array('controller' => 'agencias', 'action' => 'index')) ?></li>
                  <li><?php echo $this->Html->link('Circunstancias Medicas', array('controller' => 'circustanciasMedicas', 'action' => 'index')) ?></li>
                  <li><?php echo $this->Html->link('Sesiones', array('controller' => 'sesiones', 'action' => 'index')) ?></li>
                   <li><?php echo $this->Html->link('Opiniones', array('controller' => 'opiniones', 'action' => 'index')) ?></li>
                  
                </ul>
              </nav>
            </div>
          </div>
          <br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>          			
  	<div class="inner cover">
          <h1 class="cover-heading">Bienvenido</h1>
            <p class="lead">Gracias por su preferencia</p>
           
            <?php //echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
  </div>
  </div>
  </div>
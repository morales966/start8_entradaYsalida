<!-- Menu horizontal -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        	<i class="fa fa-align-center"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    	<li class="nav-item">
			<a href="#" class="nav-link"><?php echo AuthComponent::user('name') ?></a>
		</li>
		<li class="nav-item">
			<a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'logout')) ?>" class="nav-link">
				Cerrar
			</a>
		</li>
    </ul>
</nav>
<!-- Fin menu horizontal -->

<!-- Menu vertical -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- añadir a la funcion que valida la opcion del manu para agregarle active -->
				<li class="nav-item">
					<a href="<?php echo $this->Html->url(array('controller'=>'Pages','action'=>'index')) ?>" class="nav-link">
						<p>
							Inicio
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'index')) ?>" class="nav-link">
						<p>
							Usuarios
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo $this->Html->url(array('controller'=>'Pages','action'=>'informes')) ?>" class="nav-link">
						<p>
							Informes
						</p>
					</a>
				</li>
			</ul>
		</nav>
    </div>
</aside>
<!-- Fin menu horizontal -->
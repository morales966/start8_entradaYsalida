<div class="container">
	<div class="contenedor_registro">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-5">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="row">
					<div class="col-md-6">
						<a href="<?php echo $this->Html->url(array('action'=>'registro_salida')) ?>" class="btn btn-primary">
							Cambiar a registro de salida
			        	</a>
					</div>
					<div class="col-md-6">
						<a href="<?php echo $this->Html->url(array('controller' => 'Users','action'=>'login')) ?>" class="btn btn-primary">
							Iniciar sesión
			        	</a>
					</div>
				</div>
				
				<h2>Bienvenido(Entrada)</h2>
				<?php echo $this->Form->create('Schedule',array('data-parsley-validate')); ?>
			        <?php echo $this->Form->input('codigo',array('placeholder' => 'Por favor ingresa el código asignado a tu usuario','label' => false,'class' => 'form-control','required' => true)); ?>
					<button class="btn btn-primary form-control" type="submit">Registrar</button>
				</form>
			</div>
		</div>
	</div>
</div>
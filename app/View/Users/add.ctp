<div class="content-wrapper">
	<div class="container">
		<div class="users form">
		<?php echo $this->Form->create('User',array('data-parsley-validate')); ?>
			<fieldset>
				<legend><?php echo __('Registro de usuario'); ?></legend>
			
				<div class="form-group">
					<?php echo $this->Form->input('name',array('placeholder' => 'Nombre completo','label' => false,'class' => 'form-control')); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email',array('placeholder' => 'Correo electrónico','label' => false,'class' => 'form-control')); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('code',array('placeholder' => 'Código','label' => false,'class' => 'form-control')); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('password',array('placeholder' => 'Contraseña','label' => false,'class' => 'form-control')); ?>
				</div>
				<div class="form-group">
					<?php 
					$roles = array('U'=>'Usuario','V'=>'Visitante','A'=>'Administrador');
					echo $this->Form->input('role', array('type'=>'select','options' => $roles,'label' => false,'class' => 'form-control','empty' => 'Selecciona el rol'))  ?>
				</div>
			</fieldset>
			<button class="btn btn-success" type="submit">Guardar</button>
			<a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'index')) ?>" class="btn btn-primary ">
           		 Atrás
         	</a>
		</form>
		</div>
	</div>
</div>
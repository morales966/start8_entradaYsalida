<div class="content-wrapper">
	<div class="container">
		<div class="users form">
		<?php echo $this->Form->create('Usuario'); ?>
			<fieldset>
				<legend><?php echo __('Registro de usuario'); ?></legend>
			
			<div class="form-group">
				<?php echo $this->Form->input('nombre',array('placeholder' => 'Nombre completo','label' => false,'class' => 'form-control')); ?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('email',array('placeholder' => 'Correo electrónico','label' => false,'class' => 'form-control')); ?>
			</div>
			<div class="form-group">
              <?php echo $this->Form->input('password',array('placeholder' => 'Contraseña','label' => false,'class' => 'form-control')); ?>
         	</div>

			</fieldset>
		<a href="#" class="btn btn-primary">
			<?php echo $this->Form->end(__('Guardar')) ?>
        </a>
		</div>
	</div>
</div>
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
              <?php echo $this->Form->input('password',array('placeholder' => 'Contraseña','label' => false,'class' => 'form-control')); ?>
         	</div>

			</fieldset>
			<button class="btn btn-primary form-control" type="submit">Guardar</button>
			<a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'index')) ?>" class="btn btn-primary">
           		 Atrás
         	</a>
		</form>
		</div>
	</div>
</div>
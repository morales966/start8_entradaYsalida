<div class="content-wrapper">
	<div class="container">
		<div class="users form">
		<?php echo $this->Form->create('User'); ?>
			<fieldset>
				<legend><?php echo __('Actualizar usuarios'); ?></legend>
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
			</form>
		</div>
		<div class="actions">
			<h3><?php echo __('Opciones'); ?></h3>
			<ul>

			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('¿Estás seguro/a de que quieres eliminar a # %s?', $user['User']['id']))); ?>
			<?php echo $this->Html->link(__('Ver usuarios'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
</div>

<div class="content-wrapper">
	<div class="container">
		<div class="users form">
		<?php echo $this->Form->create('User'); ?>
			<fieldset>
				<legend><?php echo __('Actualizar usuarios'); ?></legend>
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
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
</div>

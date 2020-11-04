<div class="content-wrapper">
	<div class="container">
		<div class="users view">
		<h2><?php echo __('User'); ?></h2>
			<dl>
						
				<dt><?php echo __('Nombre'); ?></dt>
				<dd>
					<?php echo h($user['User']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Email'); ?></dt>
				<dd>
					<?php echo h($user['User']['email']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Password'); ?></dt>
				<dd>
					<?php echo h($user['User']['password']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Rol'); ?></dt>
				<dd>
					<?php echo h($user['User']['role']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Opciones'); ?></h3>
			<ul>
				<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('¿Estás seguro/a de que quieres eliminar a # %s?', $user['User']['id']))); ?>
								
			</ul>
		</div>
	</div>
</div>

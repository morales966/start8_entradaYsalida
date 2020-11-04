<div class="content-wrapper">
	<div class="container">	
		<div class="users index">
				<h2><?php echo __('Usuarios'); ?></h2>
					<div class="actions">
						<ul>
							<?php echo $this->Html->link(('Registrar nuevo usuario'), array('action' => 'add')); ?>
						</ul>
					</div>
				<div class="table-responsive">
				<table id="tableDT" class="table table-striped table-bordered" style="width:100%">
					<thead class="thead-light">
								<tr>
									<th>Nombre</th>
									<th>Correo eléctronico</th>
									<th>Contraseña</th>
									<th>Opciones</th>

								</tr>
					</thead>
					
					<tbody>
						<?php foreach ($users as $user): ?>
							<tr>
								<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['nombre']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</div>				
			</div>

		</div>
	</div>
</div>

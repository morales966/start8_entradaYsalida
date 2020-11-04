<div class="content-wrapper">
	<div class="container">	
		<div class="users index">
				<h2><?php echo __('Usuarios'); ?></h2>
					<div class="actions">
						<ul>
							<?php echo $this->Html->link(('Registrar usuario'), array('action' => 'add')); ?>
						</ul>
					</div>
				<table cellpadding="0" cellspacing="0">
				<thead>
				<tr>
						
						<th><?php echo $this->Paginator->sort('nombre'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('Contraseña'); ?></th>
						<th class="actions"><?php echo __('Opciones'); ?></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($Users as $user): ?>
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
				<p>
				<?php
				echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>	</p>
				<div class="paging">
				<?php
					echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
					echo $this->Paginator->numbers(array('separator' => ''));
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
				?>
				</div>

		</div>
		</div>
		</div>

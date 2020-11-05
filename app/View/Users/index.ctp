<div class="content-wrapper">
	<div class="container">	
		<div class="users index">
			<div class="row">
				<div class='col-md-6'>
					<h2>Usuarios</h2>
				</div>
				<div class='col-md-6'>
					<div class="actions">
						<ul>
							<?php echo $this->Html->link(('Registrar nuevo usuario'), array('action' => 'add')); ?>
						</ul>
					</div>
				</div>
			</div>
					
			<div class="table-responsive">
				<table id="tableDT" class="table table-striped table-bordered" style="width:100%">
					<thead class="thead-light">
						<tr>
							<th>Nombre</th>
							<th>Correo eléctronico</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($users as $user): ?>
							<tr>
								<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

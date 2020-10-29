<div class="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>Registro de ingreso o salida</h2>
				<div class="table-responsive">
					<table id="tableDT" class="table table-striped table-bordered" style="width:100%">
						<thead class="thead-light">
							<tr>
								<th>Registro</th>
								<th>Nombre</th>
								<th>Correo eléctronico</th>
								<th>Fecha y hora de registro</th>

							</tr>
						</thead>
						<tbody>
							<?php foreach ($schedules as $user): ?>
								<tr>
									<td><?php echo $this->Utilities->estado_usuario($user['Schedule']['tipo']); ?>&nbsp;</td>
									<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
									<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
									<td><?php echo h($user['Schedule']['created']); ?>&nbsp;</td>
				
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
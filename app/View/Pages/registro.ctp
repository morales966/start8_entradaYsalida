<div class="container">
	<div class="contenedor_registro">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-5">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<?php echo $this->Form->create('Schedule',array('data-parsley-validate')); ?>
			        <?php echo $this->Form->input('codigo',array('placeholder' => 'Por favor ingresa el código asignado a tu usuario','label' => false,'class' => 'form-control','required' => true)); ?>
					<button class="btn btn-primary form-control" type="submit">Registrar</button>
				</form>
			</div>
		</div>
	</div>
</div>
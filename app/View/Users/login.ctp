<div class="sidenav">
   <div class="login-main-text">
      <h2>Horario</h2>
      <p>Lleva el control del horario de entrada y salida de tus empleados</p>
   </div>
  <div class="main">
     <div class="col-md-12 col-sm-12">
        <a class="btn btn-primary" href="<?php echo $this->Html->url(array('controller'=>'Pages','action'=> 'registro')) ?>">
          Iniciar registro de entrada o salida
        </a>
     </div>
  </div>
</div>
<div class="main">
   <div class="col-md-6 col-sm-12">
      <div class="login-form">
        <?php echo $this->Form->create('User',array('data-parsley-validate')); ?>
          <div class="form-group">
              <?php echo $this->Form->input('email',array('placeholder' => 'Correo electrónico','label' => false,'class' => 'form-control')); ?>
          </div>
          <div class="form-group">
              <?php echo $this->Form->input('password',array('placeholder' => 'Conntraseña','label' => false,'class' => 'form-control')); ?>
          </div>
           <?php echo $this->Form->button('Iniciar sesión',array('class' => 'btn btn-primary')); ?>
          <a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'remember_password')) ?>" class="btn btn-primary">
            Restablecer contraseña
          </a>
        </form>
      </div>
   </div>
</div>
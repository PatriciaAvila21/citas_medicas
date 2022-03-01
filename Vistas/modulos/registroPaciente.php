
  
  <div class="login-box">
  <div class="login-logo">
    <a href=""><b>Formulario de registro</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <form method="post">

    <div class="form-group has-feedback">
     
        <input type="text" maxlength="10" class="form-control" name="cedula" placeholder="Ingrese su numero de cédula" required>
		     <input type="hidden" name="rolP" value="Paciente">
        <span class="glyphicon glyphicon-thumbs-up form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="apellido" class="form-control" placeholder="Apellidos completos">
        <span class="glyphicon glyphicon-thumbs-up form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="nombre" class="form-control" placeholder="Nombres completos">
        <span class="glyphicon glyphicon-thumbs-up form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="email" name="correo" class="form-control" placeholder="Correo electronico">
        <span class="glyphicon glyphicon-thumbs-up form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="telefono" class="form-control" required maxlength="10" placeholder="Telefono">
        <span class="glyphicon glyphicon-thumbs-up form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="direccion" class="form-control" placeholder="Direccion">
        <span class="glyphicon glyphicon-thumbs-up form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
        <span class="glyphicon glyphicon-thumbs-up form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="date" name="fechaNac" class="form-control" placeholder="">
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="genero" class="form-control" placeholder="Sexo">
        <span class="glyphicon glyphicon-thumbs-up form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="usuario" class="form-control" placeholder="Crear Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="clave" class="form-control" placeholder="Crear contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="hidden" name="documento" class="form-control" placeholder="">
       
      </div>


<div class="row">
  
  <!-- /.col -->
  <div class="col-xs-12">
    <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
    <a href="ingreso-Paciente" class="text-center">Ya tengo una cuenta</a> 
    
  </div>
  <!-- /.col -->
</div>
<?php

   //   $ingreso = new PacientesC();
    // $ingreso -> CrearPacienteC();

    $crear = new PacientesC();
    $crear -> RegistroPacienteC();
      ?>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>

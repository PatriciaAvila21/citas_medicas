<?php

if($_SESSION["rol"] != "Administrador"){

	echo '<script>

	window.location = "inicio";
	</script>';

	return;

}


?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Secretarias</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-header">
				
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearSecretaria">Crear Secretaria</button>
				
			</div>


			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped dt-responsive DT">
					
					<thead>
						
						<tr>
							
							<th>N°</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Foto</th>
							<th>Usuario</th>
							<th>Correo Electronico</th>
							<th>Borrar</th>

						</tr>

					</thead>

					<tbody>

						<?php

						$resultado = SecretariasC::VerSecretariasC();

						foreach ($resultado as $key => $value) {
							
							echo '<tr>
							
									<td>'.($key+1).'</td>
									<td>'.$value["apellido"].'</td>
									<td>'.$value["nombre"].'</td>';

									if($value["foto"] == ""){

										echo '<td><img src="Vistas/img/defecto.png" width="40px"></td>';

									}else{

										echo '<td><img src="'.$value["foto"].'" width="40px"></td>';

									}

									echo '<td>'.$value["usuario"].'</td>

									<td>'.$value["correo"].'</td>

									<td>
										
										<div class="btn-group">
										    <button class="btn btn-success EditarSecretaria" Sid="'.$value["id"].'" data-toggle="modal" data-target="#EditarSecretaria"><i class="fa fa-pencil"></i></button>
											
											<button class="btn btn-danger EliminarSecretaria" Sid="'.$value["id"].'" imgS="'.$value["foto"].'"><i class="fa fa-times"></i></button>
											
										</div>

									</td>

								</tr>';

						}

						?>


					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>



<div class="modal fade" rol="dialog" id="CrearSecretaria">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form method="post" role="form">
				
				<div class="modal-body">
					
					<div class="box-body">
						
						<div class="form-group">
							
							<h2>Apellido:</h2>

							<input type="text" class="form-control input-lg" name="apellido" required>

							<input type="hidden" name="rolS" value="Secretaria">

						</div>

						<div class="form-group">
							
							<h2>Nombre:</h2>

							<input type="text" class="form-control input-lg" name="nombre" required>

						</div>



						<div class="form-group">
							
							<h2>Usuario:</h2>

							<input type="text" class="form-control input-lg" name="usuario" required>

						</div>

						<div class="form-group">
							
							<h2>Contraseña:</h2>

							<input type="text" class="form-control input-lg" name="clave" required>

						</div>

					</div>

				</div>


				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary">Crear</button>

					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

				</div>

				<?php

				$crear = new SecretariasC();
				$crear -> CrearSecretariaC();

				?>

			</form>

		</div>

	</div>

</div>



<div class="modal fade" rol="dialog" id="EditarSecretaria">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form method="post" role="form">
				
				<div class="modal-body">
					
					<div class="box-body">

					<div class="col-md-12">
						    <div class="form-group form-group-default">
						      <label>Cédula:</label>
							       <input type="text" maxlength="10" class="form-control" id="cedulaE" name="cedulaE" required>
								   <input type="hidden" id="Sid" name="Sid">
					     	</div>
					</div>

					<div class="col-md-6">
						    <div class="form-group form-group-default">
						      <label>Apellidos:</label>
   							    <input type="text" class="form-control" id="apellidoE" name="apellidoE" required>
						    </div>
						</div>

						<div class="col-md-6">
						    <div class="form-group form-group-default">
						      <label>Nombres:</label>
   							    <input type="text" class="form-control" id="nombreE" name="nombreE" required>
						    </div>
						</div>
						

						<div class="col-md-6">
						    <div class="form-group form-group-default">
						      <label>Telefono:</label>
							  <input name="telefonoE" id="telefonoE" type="text" class="form-control" required maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
						    </div>
						</div>
						
						<div class="col-md-6">
						    <div class="form-group form-group-default">
						      <label>Direccion:</label>
   							    <input type="text" class="form-control" id="direccionE" name="direccionE" required>
						    </div>
						</div>
						<div class="col-md-6">
						    <div class="form-group form-group-default">
						      <label>Ciudad:</label>
   							    <input type="text" class="form-control" id="ciudadE" name="ciudadE" required>
						    </div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Sexo</label>
				             	<select class="form-control" name="sexoE">
								 <option id="sexoE"></option>
				        		<option value="Masculino">Masculino</option>
					        	<option value="Femenino">Femenino</option>
				                </select>
							</div>
						</div>


						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Usuario:</label>
								<input id="usuarioE" name="usuarioE" type="text" class="form-control" placeholder="Ingrese su usuario" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Contraseña:</label>
								<input  id="clave" name="clave" type="password" class="form-control" placeholder="Ingrese su contraseña" required>
							</div>
						</div>
						

					</div>

				</div>


				<div class="modal-footer">
					
					<button type="submit" class="btn btn-success">Guardar Cambios</button>

					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

				</div>

				<?php

				$actualizar = new SecretariasC();
				$actualizar -> ActualizarSecretariaC();

				?>

			</form>

		</div>

	</div>

</div>


<?php

$borrarD = new SecretariasC();
$borrarD -> BorrarSecretariaC();
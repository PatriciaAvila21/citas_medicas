<?php

if($_SESSION["rol"] != "Secretaria" && $_SESSION["rol"] != "Doctor" && $_SESSION["rol"] != "Administrador"){

	echo '<script>

	window.location = "inicio";
	</script>';

	return;

}


?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Pacientes</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-header">

				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearPaciente">Crear Paciente</button>
				
			</div>

			<div class="card-tools">
											<a href="../view/especialidad/reporte.php" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
												Exportar
											</a>
											<a href="#" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												Imprimir
											</a>
										</div>
										<div class="card-body">


			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped DT">
					
					<thead>
						
						<tr>
							
							<th>N°</th>
							<th>Cedula</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Telefono</th>
							<th>Direccion</th>
							<th>Fecha de Nacimiento</th>
							<th>Foto</th>
							<th>Usuario</th>
							<th>Contraseña</th>
							<th style="width: 10%" >Editar / Borrar</th>

						</tr>

					</thead>
					<tfoot>
						<tr>
							<th>N°</th>
							<th>Cedula</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Telefono</th>
							<th>Direccion</th>
							<th>Fecha de Nacimiento</th>
							<th>Foto</th>
							<th>Usuario</th>
							<th>Contraseña</th>
							<th>Editar / Borrar</th>
						</tr>
					</tfoot>

					<tbody>

						<?php

						$columna = null;
						$valor = null;

						$resultado = PacientesC::VerPacientesC($columna, $valor);

						foreach ($resultado as $key => $value) {
							
							echo '<tr>
					
									<td>'.($key+1).'</td>
									<td>'.$value["cedula"].'</td>
									<td>'.$value["apellido"].'</td>
									<td>'.$value["nombre"].'</td>
									<td>'.$value["correo"].'</td>
									<td>'.$value["telefono"].'</td>
									<td>'.$value["direccion"].'</td>
									<td>'.$value["fechaNac"].'</td>';

									if($value["foto"] == ""){

										echo '<td><img src="Vistas/img/defecto.png" width="40px"></td>';

									}else{

										echo '<td><img src="'.$value["foto"].'" width="40px"></td>';

									}
									

									echo '<td>'.$value["usuario"].'</td>

									<td>'.$value["clave"].'</td>

									<td>
										
										<div class="btn-group">
											
											
											<button class="btn btn-success EditarPaciente" Pid="'.$value["id"].'" data-toggle="modal" data-target="#EditarPaciente"><i class="fa fa-pencil"></i> Editar</button>
											
											<button class="btn btn-danger EliminarPaciente" Pid="'.$value["id"].'" imgP="'.$value["foto"].'"><i class="fa fa-times"></i> Borrar</button>
											

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



<div class="modal fade" rol="dialog" id="CrearPaciente">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form method="post" role="form">
				
				<div class="modal-body">
					
					<div class="box-body">

					<div class="col-md-12">
						    <div class="form-group form-group-default">
						      <label>Cédula:</label>
							       <input type="text" maxlength="10" class="form-control" name="cedula" placeholder="Ingrese su numero de cédula" required>
							       <input type="hidden" name="rolP" value="Paciente">
					     	</div>
					</div>
						
						<div class="col-md-6">
						    <div class="form-group form-group-default">
						      <label>Apellidos:</label>
   							    <input type="text" class="form-control" name="apellido" placeholder="Ingrese sus apellidos completos" required>
						    </div>
						</div>

						<div class="col-md-6">
						    <div class="form-group form-group-default">
						      <label>Nombres:</label>
                              <input type="text" class="form-control" name="nombre" placeholder="Ingrese sus nombres completos" required>
                        	</div>
						</div>

						<div class="col-md-6">
						  <div class="form-group form-group-default">
							<label>Correo Electronico:</label>
      							<input type="email" class="form-control" name="correo" placeholder="Ingrese su correo electronico" required>
                          </div>
					    </div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Teléfono:</label>
								<input name="telefono" type="text" class="form-control" required maxlength="10" placeholder="Ingrese teléfono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Dirección</label>
								<input name="direccion" type="text" class="form-control" placeholder="Ingrese su direccion" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Ciudad:</label>
								<option>Seleccionar...</option>
								<select class="form-control" name="ciudad" required>
								<option value="Masculino">Azuay</option>
					        	<option value="Femenino">Bolivar</option>
								<option value="Femenino">Cañar</option>
								<option value="Femenino">Carchi</option>
								<option value="Femenino">Chimborazo</option>
								<option value="Femenino">Cotopaxi</option>
								<option value="Femenino">El Oro
								<option value="Femenino">Esmeraldas</option>
								<option value="Femenino">Galapagos</option>
								<option value="Femenino">Guayas</option>
								<option value="Femenino">Imbabura</option>
								<option value="Femenino">Loja</option>
								<option value="Femenino">Los Rios</option>
								<option value="Femenino">Manabi</option>
								</option>
				                </select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Fecha nacimiento</label>
								<input name="fechaNac" type="date" class="form-control" placeholder="Ingrese fecha" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Sexo</label>
				             	<select class="form-control" name="genero" required>
								 <option>Seleccionar...</option>
				        		<option value="Masculino">Masculino</option>
					        	<option value="Femenino">Femenino</option>
				                </select>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group form-group-default">
								<label>Documento:</label>
								<input name="documento" type="text" class="form-control" placeholder="Ingrese su numero de documento" required>
							</div>
						</div>
<!-- 
						<div class="form-group">
							
							<h2>Documento:</h2>

							<input type="text" class="form-control input-lg" name="documento" required>

						</div>-->
						<div class="modal-header">
               				<center><h4 class="modal-title" id="myModalLabel">Crear credenciales del paciente</h4></center>
		                </div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Usuario:</label>
								<input id="usuario" name="usuario" type="text" class="form-control" placeholder="Ingrese su usuario" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Contraseña:</label>
								<input  name="clave" type="text" class="form-control" placeholder="Ingrese su contraseña" required>
							</div>
						</div>


					</div>

				</div>


				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary">Crear</button>

					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

				</div>

				<?php

				$crear = new PacientesC();
				$crear -> CrearPacienteC();

				?>

			</form>

		</div>

	</div>

</div>


<div class="modal fade" rol="dialog" id="EditarPaciente">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form method="post" role="form">
				
				<div class="modal-body">
					
					<div class="box-body">

					<div class="form-group">
							
							<h2>Cedula:</h2>

							<input type="text" maxlength="10" class="form-control input-lg" id="cedulaE" name="cedulaE" required>

							<input type="hidden" id="Pid" name="Pid">

						</div>
						
						<div class="form-group">
							
							<h2>Apellido:</h2>

							<input type="text" class="form-control input-lg" id="apellidoE" name="apellidoE" required>

						</div>

						<div class="form-group">
							
							<h2>Nombre:</h2>

							<input type="text" class="form-control input-lg" id="nombreE" name="nombreE" required>

						</div>

						<div class="form-group">
							
							<h2>Correo Electronico:</h2>

							<input type="email" class="form-control input-lg" id="correoE" name="correoE" required>

						</div>

						<div class="form-group">
							
							<h2>Telefono:</h2>

							<input name="telefonoE" id="telefonoE" type="text" class="form-control" required maxlength="10" placeholder="Ingrese teléfono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">

						</div>

						<div class="form-group">
							
							<h2>Direccion:</h2>

							<input type="text" class="form-control input-lg" id="direccionE" name="direccionE" required>

						</div>

						<div class="form-group">
							
							<h2>Ciudad:</h2>

							<input type="text" class="form-control input-lg" id="ciudadE" name="ciudadE" required>

						</div>

						<div class="form-group">
							
							<h2>Documento:</h2>

							<input type="text" class="form-control input-lg" id="documentoE" name="documentoE" required>

						</div>

						<div class="form-group">
							
							<h2>Usuario:</h2>

							<input type="text" class="form-control input-lg" id="usuarioE" name="usuarioE" required>

						</div>

						<div class="form-group">
							
							<h2>Contraseña:</h2>

							<input type="text" class="form-control input-lg" id="claveE" name="claveE" required>

						</div>

					</div>

				</div>


				<div class="modal-footer">
					
					<button type="submit" class="btn btn-success">Guardar Cambios</button>

					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

				</div>

				<?php

				$actualizar = new PacientesC();
				$actualizar -> ActualizarPacienteC();

				?>

			</form>

		</div>

	</div>

</div>


<?php

$borrarP = new PacientesC();
$borrarP -> BorrarPacienteC();
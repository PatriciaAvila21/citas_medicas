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
			<!-- 

			<div class="card-tools">
											<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
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

										


			<div class="box-body">-->

			
				
				<table class="table table-bordered table-hover table-striped DT"  >
					
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
									

									echo '

									<td>
										
										<div class="text-center">
											
											
											<button class="btn btn-success EditarPaciente" Pid="'.$value["id"].'" data-toggle="modal" data-target="#EditarPaciente"><i class="fa fa-pencil"></i></button>
											
											<button class="btn btn-danger EliminarPaciente" Pid="'.$value["id"].'" imgP="'.$value["foto"].'"><i class="fa fa-times"></i></button>
											
											
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
								<select class="form-control" name="ciudad">
								<option>Seleccionar...</option>
								<option value="Azuay">Azuay</option>
					        	<option value="Bolivar">Bolivar</option>
								<option value="Cañar">Cañar</option>
								<option value="Carchi">Carchi</option>
								<option value="Chimborazo">Chimborazo</option>
								<option value="Cotopaxi">Cotopaxi</option>
								<option value="El Oro">El Oro</option>
								<option value="Esmeraldas">Esmeraldas</option>
								<option value="Galapagos">Galapagos</option>
								<option value="Guayas">Guayas</option>
								<option value="Imbabura">Imbabura</option>
								<option value="Loja">Loja</option>
								<option value="Los Rios">Los Rios</option>
								<option value="Manabi">Manabi</option>
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
				             	<select class="form-control" name="genero">
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
								<input  name="clave" type="password" class="form-control" placeholder="Ingrese su contraseña" required>
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

					<div class="col-md-12">
						    <div class="form-group form-group-default">
						      <label>Cédula:</label>
							       <input type="text" maxlength="10" class="form-control" id="cedulaE" name="cedulaE" required>
							       <input type="hidden" id="Pid" name="Pid">
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
						      <label>Correo Electronico:</label>
   							    <input type="email" class="form-control" id="correoE" name="correoE" required>
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
						      <label>Documento:</label>
   							    <input type="text" class="form-control" id="documentoE" name="documentoE" required>
						    </div>
						</div>
			

						<div class="col-md-6">
						    <div class="form-group form-group-default">
						      <label>Usuario:</label>
   							    <input type="text" class="form-control" id="usuarioE" name="usuarioE" required>
						    </div>
						</div>
			
						<div class="col-md-6">
						    <div class="form-group form-group-default">
						      <label>Contraseña:</label>
   							    <input type="password" class="form-control" id="clave" name="clave" required>
						    </div>
						</div>
			

					</div>

				</div>


				<div class="modal-footer">
					
					<button type="submit" class="btn btn-success">Guardar</button>

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
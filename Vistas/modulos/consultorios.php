<?php

if($_SESSION["rol"] != "Secretaria" && $_SESSION["rol"] != "Administrador"){

	echo '<script>

	window.location = "inicio";
	</script>';

	return;

}


?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Consultorios</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-header">
				
				<form method="post">
					
					<div class="col-md-6 col-xs-12">
						<input type="text" class="form-control" name="consultorioN" placeholder="Ingrese Nuevo Consultorio" required>
					</div>

					<button type="submit" class="btn btn-primary">Crear Consultorio</button>

				</form>

				<?php

				$crearC = new ConsultoriosC();
				$crearC -> CrearConsultorioC();

				?>

			</div>


			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped">
					
					<thead>
						
						<tr>
							
							<th>N°</th>
							<th>Nombre</th>
							<th>Acciones</th>

						</tr>

					</thead>

					<tbody>

						<?php

						$columna = null;
						$valor = null;

						$resultado = ConsultoriosC::VerConsultoriosC($columna, $valor);

						foreach ($resultado as $key => $value) {
							
							echo '<tr>
							
									<td>'.($key+1).'</td>

									<td>'.$value["nombre"].'</td>

									<td>
										
										<div class="btn-group">
											
											<a href="http://localhost/clinica/E-C/'.$value["id"].'">
												<button class="btn btn-success"><i class="fa fa-pencil"></i> Editar</button>
											</a>

											<a href="http://localhost/clinica/consultorios/'.$value["id"].'">
												<button class="btn btn-danger"><i class="fa fa-times"></i> Borrar</button>
											</a>

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


<?php

$borrarC = new ConsultoriosC();
$borrarC -> BorrarConsultorioC();
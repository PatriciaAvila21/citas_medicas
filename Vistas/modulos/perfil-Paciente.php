<?php

if($_SESSION["rol"] != "Paciente"){

	echo '<script>

	window.location = "inicio";
	</script>';

	return;

}

?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Perfil</h1>

	</section>


	<section class="content">
		
		<div class="box">
			
			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped">
					
					<thead>
						
						<tr>
							
							<th>Usuario</th>
							<th>Contraseña</th>
							<th>Cedula</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Correo</th>
							<th>Telefono</th>
							<th>Direccion</th>
							<th>Ciudad</th>
							<th>Fecha de nacimiento</th>
							<th>Sexo</th>
							<th>Foto</th>
							<th>Editar</th>

						</tr>

					</thead>

					<tbody>

						<?php

						$perfil = new PacientesC();
						$perfil -> VerPerfilPacienteC();

						?>

						
						
					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>
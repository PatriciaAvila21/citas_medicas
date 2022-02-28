<?php

if($_SESSION["rol"] != "Doctor"){

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
						    <th>Cedula</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Usuario</th>
							<th>Contraseña</th>
							<th>Fecha de Nacimiento</th>
							<th>Foto</th>
							<th>Especialidad</th>
							<th>Horarios</th>
							<th>Editar</th>

						</tr>

					</thead>

					<tbody>

						<?php

						$perfil = new DoctoresC();
						$perfil -> VerPerfilDoctorC();

						?>

						
						
					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>
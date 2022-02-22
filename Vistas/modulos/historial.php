<?php

if($_SESSION["id"] != substr($_GET["url"], 10)){

	echo '<script>

	window.location = "inicio";
	</script>';

	return;

}


?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Citas Médicas Agendadas</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped DT">
					
					<thead>
						
						<tr>
							
							<th>Fecha y Hora</th>
							<th>Médico</th>
							<th>Especialidad</th>

						</tr>

					</thead>

					<tbody>

						<?php

						$resultado = CitasC::VerCitasC();

						foreach ($resultado as $key => $value) {
							
							if($_SESSION["documento"] == $value["documento"]){

								echo '<tr>

									<td>'.$value["inicio"].'</td>';

									$columna = "id";
									$valor = $value["id_doctor"];

									$doctor = DoctoresC::DoctorC($columna, $valor);

									echo '<td>'.$doctor["apellido"].' '.$doctor["nombre"].'</td>';

									
									$columna = "id";
									$valor = $value["id_especialidad"];

									$consultorio = ConsultoriosC::VerConsultoriosC($columna, $valor);

									echo '<td>'.$consultorio["nombre"].'</td>';

								echo '</tr>';


							}
							

						}

						?> 
						

					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>


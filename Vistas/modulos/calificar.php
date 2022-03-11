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
		
		<h1>Calificación de citas médica</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			
				<table class="table table-bordered table-hover table-striped DT" >
					
					<thead>
						
						<tr>
							
							<th>Id</th>
							<th>Apellidos y nombres del médico</th>
							<th>Id del Paciente</th>
							<th>Fecha atención cita médica (DD/MM/YYY/)</th>
							<th>Calificación</th>

						</tr>

					</thead>
					<tfoot>
						<tr>
                        <th>Id</th>
							<th>Apellidos y nombres del médico</th>
							<th>Id del Paciente</th>
							<th>Fecha atención cita médica (DD/MM/YYY/)</th>
							<th>Calificación</th>

						</tr>
					</tfoot>

			

                    </table>


                    <table class="table table-bordered table-hover table-striped DT" >
					
					<thead>
						
						<tr>
							
							<th>Id</th>
							<th>Apellidos y nombres del médico</th>
							<th>Id del Paciente</th>
							<th>Nro. de pacientes atendidos</th>
							<th>Promedio de Calificación</th>

						</tr>

					</thead>
					<tfoot>
						<tr>
                        <th>Id</th>
							<th>Apellidos y nombres del médico</th>
							<th>Id del Paciente</th>
							<th>Nro. de pacientes atendidos</th>
							<th>Promedio de Calificación</th>

						</tr>
					</tfoot>

			

                    </table>

			</div>

		</div>

	</section>

</div>



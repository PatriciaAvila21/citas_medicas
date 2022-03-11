
$(".DT").on("click", ".EliminarSecretaria", function(){

	var Sid = $(this).attr("Sid");
	var imgS = $(this).attr("imgS");

	window.location = "index.php?url=secretarias&Sid="+Sid+"&imgS="+imgS;

})

$(".DT").on("click", ".EditarSecretaria", function(){

	var Sid = $(this).attr("Sid");
	var datos = new FormData();

	datos.append("Sid", Sid);

	$.ajax({

		url: "Ajax/secretariasA.php",
		method: "POST",
		data: datos,
		dataType: "json",
		contentType: false,
		cache: false,
		processData: false,

		success: function(resultado){

			$("#Sid").val(resultado["id"]);
			$("#cedulaE").val(resultado["cedula"]);
			$("#apellidoE").val(resultado["apellido"]);
			$("#nombreE").val(resultado["nombre"]);
			$("#telefonoE").val(resultado["telefono"]);
			$("#correoE").val(resultado["correo"]);
			$("#direccionE").val(resultado["direccion"]);
			$("#ciudadE").val(resultado["ciudad"]);
					
			$("#usuarioE").val(resultado["usuario"]);
			$("#clave").val(resultado["clave"]);

			$("#sexoE").html(resultado["sexo"]);
			$("#sexoE").val(resultado["sexo"]);


		} 

	})

})

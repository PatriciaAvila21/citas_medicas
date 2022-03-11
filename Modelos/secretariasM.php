<?php

require_once "ConexionBD.php";

class SecretariasM extends ConexionBD{

	//Ingreso Secretarias
	static public function IngresarSecretariaM($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("SELECT cedula, usuario, clave, nombre, apellido, correo, telefono, direccion, ciudad, fechaNac, genero, foto, rol, id FROM
		 $tablaBD WHERE usuario = :usuario");

		$pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();
		$pdo = null;

	}



	//Ver perfil secretaria
	static public function VerPerfilSecretariaM($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("SELECT cedula, usuario, clave, nombre, apellido, correo, telefono, direccion, ciudad, fechaNac,genero, foto, rol, id FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();
		$pdo = null;

	}



	//Actualizar Perfil Secretaria
	static public function ActualizarPerfilSecretariaM($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET cedula = :cedula, usuario = :usuario, clave = :clave, nombre = :nombre, apellido = :apellido, correo = :correo, telefono = :telefono, direccion = :direccion, ciudad = :ciudad, fechaNac = :fechaNac, genero = :genero, foto = :foto WHERE id = :id");

		$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
		$pdo -> bindParam(":cedula", $datosC["cedula"], PDO::PARAM_INT);
		$pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
		$pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
		$pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
		$pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
		$pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
		$pdo -> bindParam(":telefono", $datosC["telefono"], PDO::PARAM_INT);
		$pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
		$pdo -> bindParam(":ciudad", $datosC["ciudad"], PDO::PARAM_STR);
		$pdo -> bindParam(":fechaNac", $datosC["fechaNac"], PDO::PARAM_STR);
		$pdo -> bindParam(":genero", $datosC["genero"], PDO::PARAM_STR);
		$pdo -> bindParam(":foto", $datosC["foto"], PDO::PARAM_STR);

		if($pdo -> execute()){

			return true;

		}else{

			return false;

		}

		$pdo -> close();
		$pdo = null;

	}

	//Mostrar Secretarias
	static public function VerSecretariasM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD ORDER BY apellido ASC");

		$pdo -> execute();

		return $pdo -> fetchAll();

		$pdo -> close();
		$pdo = null;

	}



	//Crear Secretarias
	static public function CrearSecretariaM($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (nombre, apellido, usuario, clave, rol) VALUES (:nombre, :apellido, :usuario, :clave, :rol)");

		$pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
		$pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
		$pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
		$pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
		$pdo -> bindParam(":rol", $datosC["rol"], PDO::PARAM_STR);

		if($pdo -> execute()){

			return true;

		}else{

			return false;

		}

		$pdo -> close();
		$pdo = null;

	}



	//Borrar Secretarias
	static public function BorrarSecretariaM($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		if($pdo -> execute()){

			return true;

		}else{

			return false;

		}

		$pdo -> close();
		$pdo = null;

	}


//Editar Secretaria
static public function SecretariaM($tablaBD, $columna, $valor){

	if($columna != null){

		$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna");

		$pdo -> bindParam(":".$columna, $valor, PDO::PARAM_STR);

		$pdo->execute();

		return $pdo -> fetch();

	}

	$pdo -> close();
	$pdo = null;

}


//Actualizar Secretarias
static public function ActualizarSecretariaM($tablaBD, $datosC){

	$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET cedula = :cedula, apellido = :apellido, nombre = :nombre, correo = :correo, telefono = :telefono, direccion = :direccion, ciudad = :ciudad, sexo = :sexo, usuario = :usuario, clave = :clave WHERE id = :id");

	$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
	$pdo -> bindParam(":cedula", $datosC["cedula"], PDO::PARAM_STR);
	$pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
	$pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
	$pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
	$pdo -> bindParam(":telefono", $datosC["telefono"], PDO::PARAM_INT);
	$pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
	$pdo -> bindParam(":ciudad", $datosC["ciudad"], PDO::PARAM_STR);
	$pdo -> bindParam(":sexo", $datosC["sexo"], PDO::PARAM_STR);
	$pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
	$pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);

	if($pdo -> execute()){
		return true;
	}

	$pdo -> close();
	$pdo = null;

}

}
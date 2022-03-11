<?php

require_once "../Controladores/secretariasC.php";
require_once "../Modelos/secretariasM.php";

class SecretariasA{

	public $Sid;

	public function ESecretariaA(){

		$columna = "id";
		$valor = $this->Sid;

		$resultado = SecretariasC::SecretariaC($columna, $valor);

		echo json_encode($resultado);

	}

}

if(isset($_POST["Sid"])){

	$eS = new SecretariasA();
	$eS -> Sid = $_POST["Sid"];
	$eS -> ESecretariaA();

}
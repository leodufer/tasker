<?php 
include_once('sesion.php');


class Cliente{

	var $id;
	var $nombre;
	var $apellido;
	var $documento;
	var $direccion;
	var $email;
	
	var $sesion;

	function __construct(){
		$this->sesion = new Sesion();
	}

	function insertar(){
		$sql = "INSERT INTO clientes(nombre, 
									apellido, 
									documento, 
									direccion,
									email) VALUES ('$this->nombre',
													'$this->apellido',
													'$this->documento',
													'$this->direccion',
													'$this->email')";
		$this->sesion->executeQuery($sql);
	}

	function eliminar(){
		$sql = "DELETE FROM clientes WHERE id='$this->id'";
		$this->sesion->executeQuery($sql);
	}

function obtener(){
	$sql = "SELECT * FROM clientes WHERE id='$this->id'";
	$this->sesion->executeQuery($sql);
	$resultado = $this->sesion->fetchAll();
	foreach ($resultado as $res) {
		$this->nombre = $res["nombre"];
		$this->apellido = $res["apellido"];
		$this->documento = $res["documento"];
		$this->direccion = $res["direccion"];
		$this->email = $res["email"];
	}
}

function obtener_todos(){
	$sql = "SELECT * FROM clientes";
	$this->sesion->executeQuery($sql);
	return $this->sesion->fetchAll();	
}

function actualizar(){
	$sql = "UPDATE clientes set nombre = '$this->nombre',
								apellido = '$this->apellido',
								documento = '$this->documento',
								direccion = '$this->direccion',
								email = '$this->email' 	WHERE id = '$this->id'";
	$this->sesion->executeQuery($sql);
	}


}

?>
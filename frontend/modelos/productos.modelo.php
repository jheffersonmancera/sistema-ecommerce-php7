<?php 

require_once "conexion.php";

class ModeloProductos
{
	/*=============================================
	MOSTRAR CATEGORÍAS
	=============================================*/
	//1
	static public function mdlMostrarCategorias($tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		//2
		return $stmt ->fetchAll();
		$stmt -> close();
		$stmt = null;
	}

	/*=============================================
	MOSTRAR SUB-CATEGORÍAS
	=============================================*/
	static public function mdlMostrarSubCategorias($tabla, $id)
	{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_categoria = :id_categoria");
		//3
		$stmt -> bindParam(":id_categoria",$id, PDO::PARAM_INT);
		$stmt -> execute();
		
		return $stmt ->fetchAll();
		$stmt -> close();
		$stmt = null;
	}

}
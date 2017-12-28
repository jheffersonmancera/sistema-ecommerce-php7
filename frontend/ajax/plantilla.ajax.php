<?php


require_once "../controladores/plantilla.controlador.php";/* 5 */
require_once "../modelos/plantilla.modelo.php";

class AjaxPlantilla{

	public function ajaxEstiloPlantilla(){

		$respuesta = ControladorPlantilla::ctrEstiloPlantilla();

		echo json_encode($respuesta);//6
	}


}

$objeto = new AjaxPlantilla();
$objeto -> ajaxEstiloPlantilla();

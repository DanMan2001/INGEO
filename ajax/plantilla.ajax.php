<?php
require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/plantilla.modelo.php";

class AjaxPlantilla{
    public function ajaxEstiloPlantilla(){
        $respuesta = ControladorPlantilla::estiloPlantilla();
        echo json_decode($respuesta);
    }
}

$objeto = new AjaxPlantilla();
$objeto -> ajaxEstiloPlantilla();
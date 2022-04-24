<?php


//LLamada hacia la plantilla
class ControladorPlantilla{
    public function plantilla(){
        include "vistas/plantilla.php";
    }
    //Estilos dinamicos hacia la plantilla
    public function estiloPlantilla(){
    $tabla = "plantilla";
        $respuesta = modeloPlantilla::modeloEstiloPlantilla($tabla);
        return $respuesta;
    }
 
}



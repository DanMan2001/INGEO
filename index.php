<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/ingeo.controlador.php";
require_once "modelos/plantilla.modelo.php";
require_once "modelos/ingeo.modelo.php";
require_once "modelos/rutas.php";
$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();
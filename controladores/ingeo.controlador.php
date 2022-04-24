<?php
class controladorIngeo{
    static public function mostrarCategorias($item,$valor){
        $tabla = "categorias";
        $respuesta = ModeloIngeo::modeloMostrarCategorias($tabla, $item, $valor);
        return $respuesta;
    }
    static public function mostrarServicios($item,$valor){
        $tabla = "servicios";
        $respuesta = ModeloIngeo::modeloMostrarCategorias($tabla, $item, $valor);
        return $respuesta;
    }
    static public function mostrarProductos($item,$valor){
        $tabla = "productos";
        $respuesta = ModeloIngeo::modeloMostrarCategorias($tabla, $item, $valor);
        return $respuesta;
    }
    static public function mostrarSlider($item,$valor){
        $tabla = "slider";
        $respuesta = ModeloIngeo::modeloMostrarCategorias($tabla, $item, $valor);
        return $respuesta;
    }
    static public function mostrarTrabajos($item,$valor){
        $tabla ="trabajos";
        $respuesta = ModeloIngeo::modeloMostrarCategorias($tabla,$item,$valor);
        return $respuesta;
    }
    static public function mostrarTrabajosSecciones($item,$valor){
        $tabla = "trabajossecciones";
        $respuesta = ModeloIngeo::modeloMostrarCategorias($tabla,$item,$valor);
        return $respuesta;
    }
}
<?php
include "modulos/link_html.php";
?>
<body>
    <?php
    include "modulos/social-networks.php";
    include "modulos/cabezote.php";

 $rutas = array();
    $ruta = null;
    $inicio = "modulos/inicio.php";
    if(isset($_GET["ruta"])){
        $rutas = explode("/",$_GET["ruta"]);
        $item = "ruta";
            $valor = $_GET["ruta"];
        $rutaCategorias = controladorIngeo::mostrarCategorias($item, $valor);
        if($valor == $rutaCategorias["ruta"]){
            $ruta = $valor;
        }
        if ($ruta == "ingeo"){
             include "modulos/inicio.php";
            $inicio = "";
        }
        else if($ruta == "servicios"){
            include "modulos/servicios.php";
            $inicio = "";
        }
        else if($ruta == "nosotros"){
            include "modulos/nosotros.php";
            $inicio = "";
        }
        else if($ruta == "ventas"){
            include "modulos/ventas.php";
            $inicio = "";
        }
        else if($ruta =="contactanos"){
            include "modulos/contactanos.php";
            $inicio = "";
        }
        else{
            include "modulos/error404.php";
            $inicio = "";
        }
       
    }
    if($inicio!="" && $inicio!=null ){
    include $inicio;    
    }
    
    include "modulos/footer.php";
        ?>
</body>
<?php
include "modulos/script_html.php"
?>
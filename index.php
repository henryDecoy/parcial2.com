<?php 
 /*direccionador de peticiones a los diferentes controladores 
 y los controladores iran a los modelos a buscar datos si lo necesitan
 una vez tengan los datos los enviaran a las vistas para que las muestren 
 si a partir de una vista se quiere ir a otra pagina se enviara una peticion que pasara al index 
 el index buscara el controlador y una vez lo encuentra lo ejecuta */
 
    require_once("controllers/principal_controller.php");
    require_once("controllers/contacto_controller.php");
    require_once("controllers/usuario_controller.php");
    require_once("controllers/productos_controller.php");
    require_once("utils/seg.php");

    if (count($_GET)==0){
        call_user_func("principal_controller::index");
    }else{
        //para el metodo crear== index.php?c=contacto&m=crear
        // para el metodo mostrar == index.php?c=contacto&m=mostrar
        if(isset($_GET["c"]) && isset($_GET["m"])){
            $controlador = seg::decodificar($_GET["c"]);
            $metodo= seg::decodificar($_GET["m"]);
            call_user_func($controlador."_controller::".$metodo);
        }else {
            echo "hola";
        }
    }
?>


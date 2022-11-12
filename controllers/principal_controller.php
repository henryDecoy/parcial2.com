<?php 
require_once("utils/seg.php");
    class principal_controller{
        public static function index(){
            if (isset($_COOKIE["usuario"])){
                $_SESSION["usuario"]=seg::decodificar($_COOKIE["usuario"]);
                $_SESSION["nombre"]=seg::decodificar($_COOKIE["nombre"]);
            }
            $titulo="Pagina principal";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/principal/index.php");
            require_once("views/template/footer.php");
            
            
        }
        public static function error(){
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/principal/error.php");
            require_once("views/template/footer.php");
        }
    }
?>
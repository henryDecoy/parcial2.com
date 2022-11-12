<?php 
require_once("models/productos.php");


class productos_controller{
    public static function catalogo(){
        $titulo="login de usuario";
        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/principal/index.php");
        require_once("views/template/footer.php");
    }
    public static function validar(){
        if ($_POST) {
            $token= filter_var($_POST["token"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $_SESSION["token"] = $_POST["token"] ;
            if (!isset($_POST["token"]) || !seg::ValidaSesion($_POST["token"])) {
                echo "Acceso restringido";
                exit();
            }

            $id= filter_var($_POST["id"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $obj = new productos($id);
            $resultado = $obj->Buscar();
            var_dump($resultado);
            
            if (count($resultado) > 0) {
                header("location: index.php?c=".seg::codificar("productos")."&m=". seg::codificar("catalogo"). "&id=". $id);
            }else{
                header("location: index.php?c=".seg::codificar("productos")."&m=". seg::codificar("catalogo"));
            }
        }
    }
}
?>

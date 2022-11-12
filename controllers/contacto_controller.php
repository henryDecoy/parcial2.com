<?php
    require_once("models/contacto.php");
    class contacto_controller{
        public static function crear(){
            if(isset($_SESSION["usuario"])){
            $titulo="Creacion de comentario de contacto";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/contacto/crear.php");
            require_once("views/template/footer.php"); 
            }else{
                header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("error"));
            }
        }
        public static function mostrar(){

            if($_POST){

                if(!isset($_POST["token"])  |  !seg::ValidaSesion($_POST["token"])){
                echo "Acceso restringido";
                exit();
                }
                empty($_POST["txtNombre_contacto"])?$error[0]="El campo de Nombre es obligarotio":$nombre=$_POST["txtNombre_contacto"];
                empty($_POST["txtCorreo_contacto"])?$error[1]="El campo de Correo es obligarotio":$correo=$_POST["txtCorreo_contacto"];
                empty($_POST["txtComentario_contacto"])?$error[2]="El campo de Comentario es obligarotio":$comentario=$_POST["txtComentario_contacto"];;


                if(isset($error)){
                    $titulo="Creacion de comentario de contacto";
                    require_once("views/template/header.php");
                    require_once("views/template/navbar.php");
                    require_once("views/contacto/crear.php");
                    require_once("views/template/footer.php"); 

                }else{
                    $nombre=filter_var($nombre,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $contacto=new contacto($nombre, $correo, $comentario);
                    $resultado= $contacto -> getDatos();
                    $titulo="Mostrar datos de contacto";
                    require_once("views/template/header.php");
                    require_once("views/template/navbar.php");
                    require_once("views/contacto/mostrar.php");
                    require_once("views/template/footer.php"); 
                    
                }

               

               
            }
        }
    }
?>
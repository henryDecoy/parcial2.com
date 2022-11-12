<?php 

    if(session_status()==1)session_start();

    class seg{
        public static function codificar($p){
            return base64_encode(base64_encode($p));
        }

        public static function decodificar($p){
            return base64_decode(base64_decode($p));
        }
        public static function GetToken(){
            if (isset($_SESSION["token"]))
                return $_SESSION["token"];
            
            $token= sha1(random_bytes(100));
            $_SESSION["token"]=$token;
            return $token;
        }
        public static function ValidaSesion($token){
            if(!isset($token) | !hash_equals($token,$_SESSION["token"]))
                return false;
            
                return true;
        }

        public static function compras()
        {
            header("location: index.php?c=".seg::codificar("productos")."&m=". seg::codificar("catalogo")."#catalogo");
            if (!isset($_COOKIE["compras"])) {
                setcookie("compras", 1);
            } else {
                setcookie("compras", $_COOKIE["compras"] + 1);
            }
        }
    }
?>
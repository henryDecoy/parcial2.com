<?php
    class usuario{
        private $usuario;
        private $password;
        private $salt;
        private $nombre;

        public function __construct($usuario, $password,$salt, $nombre ){
            $this->usuario=$usuario;
            $this->password=$password;
            $this->salt=$salt;
            $this->nombre=$nombre;

        }
        public function valida_usuario(){
            #password=hash(password_usuario.salt);
            #salt=mb5(random_byte(100));
            $tabla[]=["usuario"=>"jperez","password"=>"e7b483fa6eacd2680c8d7c28ea487216a9cb0ead","salt"=>"4T18823CP74H","nombre"=>"Juan Perez"];
            $tabla[]=["usuario"=>"esalinas","password"=>"4d4e977c601a1aa5c871e671af7de7f7a7e3510b","salt"=>"NONGEN2TKPA4","nombre"=>"Enrique Salinas"];
            $tabla[]=["usuario"=>"isanchez","password"=>"f3300d8384bff989b8fb6a097099e0053f57f2ff","salt"=>"QUINNHTH8LFN","nombre"=>"Ivan Sanchez"];
            foreach($tabla as $t )
            {
                $pass=sha1($this->password.$t["salt"]);
                if($this->usuario==$t["usuario"] && $pass==$t["password"])
                    return $t;
            }
            return[];
        }
    }

?>
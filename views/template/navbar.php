<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><i class="bi bi-code"></i>S<i class="bi bi-diamond"></i>H<i class="bi bi-diamond-half"></i>O<i class="bi bi-diamond-fill"></i>P<i class="bi bi-code-slash"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reseñas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php if(isset($_SESSION["usuario"])){?><li><a class="dropdown-item" href="<?php echo"index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("crear")."" ?>">Crear Comentario</a></li><?php }?>
                        <?php if(isset($_SESSION["usuario"])){?> <li><hr class="dropdown-divider"></li><?php }?>
                        <?php if(isset($_SESSION["usuario"])){?> <li><a class="dropdown-item" href="<?php echo"index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("mostrar")."" ?>">Mostrar Comentario</a></li><?php }?>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mb-9 mb-lg-0 ">
                <?php if(isset($_SESSION["usuario"])){?>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION["usuario"]?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Editar perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo"index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("cerrar_sesion")?>">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                    <?php }else{ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo"index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("login")?>" tabindex="-1" >login</a>
                    </li>
                    <?php }?>
            </ul>
            <?php if(isset($_SESSION["usuario"])){?><form action="<?php echo"index.php?c=".seg::codificar("productos")."&m=".seg::codificar("validar")?>" method="post" class="d-flex">
                <input class="form-control me-2" type="text" name="id" placeholder="Search" aria-label="Search">
                <input type="hidden" value="<?php echo seg::GetToken() ?>" name="token">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form><?php }?>


           
        </div>
    </div>
</nav>


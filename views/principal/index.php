<?php
if (session_status() == 1) session_start();
require_once("models/productos.php");
require_once("controllers/productos_controller.php");

?>

<div id="carouselExampleCaptions" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <?php for ($i = 1; $i <= 3; $i++) { ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i ?>" aria-label="Slide <?php echo $i + 1 ?>"></button>
        <?php } ?>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="1000">
            <img src="../img/portada1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p>></p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="1000">
            <img src="../img/portada2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="1000">
            <img src="../img/portada3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="1000">
            <img src="../img/portada4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<!-- falta agregar productos y carousel -->

<div class="container-sm">
    <br>
    <h1 class="text-center"><b> <i class="bi bi-code"></i>S<i class="bi bi-diamond"></i>H<i class="bi bi-diamond-half"></i>O<i class="bi bi-diamond-fill"></i>P<i class="bi bi-code-slash"></i></b></h1>
    <h3 class="text-center"><b>Tu tienda de Plantillas para mejorar tu Marca</b></h3>
    <br>
</div>


<div class="container">
    <div class="row">
        <?php
        if (isset($_GET["id"])) {
            $obj = new productos($_GET["id"]);
            $producto = $obj->Buscar();
            $n = 7;
            foreach ($producto as $cosa) {
                if (count($producto) == $n) {
                    $n = 8; ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card border-success mb-3" style="max-width: 18rem;">
                            <img src=".../<?php echo $producto["imagen"] ?>" class="img-fluid" alt="...">
                            <div class="card-body text-success">
                                <h3 class="card-title"><?php echo $producto["producto"] ?></h3>
                                <h5 class="card-text"><?php echo $producto["descripcion"] ?></h5>
                                <p class="card-text">Precio de venta: <?php echo $producto["precio_venta"] ?></p>
                                <p class="card-text">Precio de compra: <?php echo $producto["costo_compra"] ?></p>
                                <p class="card-text">Existencia: <?php echo $producto["cantidad_existencia"] ?></p>
                                <hr>
                                <form method="post">
                                    <input type="hidden" name="Calcular" value="<?php echo $i  ?>">
                                    <?php if (isset($_SESSION["usuario"])) { ?><button class="btn btn-outline-success">
                                            <i class="bi bi-cart-plus"></i>&nbsp;Agregar al carrito
                                        </button> <?php } ?>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $i ?>">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </form>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?php echo $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $producto["producto"] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="text-align: center;">
                                                <img src=".../<?php echo $producto["imagen"] ?>" alt="">
                                            </div>
                                            <div class="modal-footer">
                                                <p>Copyright (c) 2021 ShopTemplates
                                                    <br> All Rights Reserved
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
            <?php  } else {
            $resultado = productos::Mostrar();
            $i = 0;
            foreach ($resultado as $producto) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-success mb-3" style="max-width: 18rem;">
                        <img src=".../<?php echo $producto["imagen"] ?>" class="img-fluid" alt="...">
                        <div class="card-body text-success">
                            <h3 class="card-title"><?php echo $producto["producto"] ?></h3>
                            <h5 class="card-text"><?php echo $producto["descripcion"] ?></h5>
                            <p class="card-text">Precio de venta: <?php echo $producto["precio_venta"] ?></p>
                            <p class="card-text">Precio de compra: <?php echo $producto["costo_compra"] ?></p>
                            <p class="card-text">Existencia: <?php echo $producto["cantidad_existencia"] ?></p>
                            <hr>
                            <form method="post">
                                <input type="hidden" name="Calcular" value="<?php echo $i  ?>">
                                <?php if (isset($_SESSION["usuario"])) { ?><button class="btn btn-outline-success">
                                        <i class="bi bi-cart-plus"></i>&nbsp;Agregar al carrito
                                    </button> <?php } ?>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $i ?>">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $producto["producto"] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="text-align: center;">
                                            <img src=".../<?php echo $producto["imagen"] ?>" alt="">
                                        </div>
                                        <div class="modal-footer">
                                            <p>Copyright (c) 2021 ShopTemplates
                                                <br> All Rights Reserved
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php $i += 1;}
        } ?>
    </div>

</div>

<br><br><br>
</div>
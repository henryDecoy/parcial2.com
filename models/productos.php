<?php 

class productos{

    private $id;
    private $imagen;
    private $producto;
    private $descripcion;
    private $costo_compra;
    private $precio_venta;
    private $cantidad_existencia;

    public function __construct($id)
    {
        $this->id=$id;

    }

    public function getId(){
        return $this->id;
    }
    public function getImagen(){
        return $this->imagen;
    }
    public function getProducto(){
        return $this->producto;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getCosto_compra(){
        return $this->costo_compra;
    }
    public function getPrecio_venta(){
        return $this->precio_venta;
    }
    public function getCantidad_existencia(){
        return $this->cantidad_existencia;
    }


    public static function carrousel(){
        $imagenes[]=["portadas"=>"../img/portada1.jpg"];
        $imagenes[]=["portadas"=>"../img/portada2.jpg"];
        $imagenes[]=["portadas"=>"../img/portada3.jpg"];
        $imagenes[]=["portadas"=>"../img/portada4.jpg"];
        $imagenes[]=["portadas"=>"../img/portada5.jpg"];
            return $imagenes;
       
    }

    public static function Mostrar(){

        $tabla[]=["id"=>"1","imagen"=>"../img/product1.jpg","producto"=>"Italian food","descripcion"=>"Social Media Post Template","costo_compra"=>"1.91","precio_venta"=>"1.99","cantidad_existencia"=>"11"];
        $tabla[]=["id"=>"2","imagen"=>"../img/product2.jpg","producto"=>"MInimalist Lifestyle","descripcion"=>"Social Media Post Template","costo_compra"=>"1.92","precio_venta"=>"2.99","cantidad_existencia"=>"12"];
        $tabla[]=["id"=>"3","imagen"=>"../img/product3.jpg","producto"=>"OktoBeerFest","descripcion"=>"Social Media Post Template","costo_compra"=>"1.93","precio_venta"=>"3.99","cantidad_existencia"=>"13"];
        $tabla[]=["id"=>"4","imagen"=>"../img/product4.jpg","producto"=>"Mararons","descripcion"=>"Social Media Post Template","costo_compra"=>"1.94","precio_venta"=>"4.99","cantidad_existencia"=>"14"];
        $tabla[]=["id"=>"5","imagen"=>"../img/product5.jpg","producto"=>"World book Day","descripcion"=>"Instagram Post Template","costo_compra"=>"1.95","precio_venta"=>"5.99","cantidad_existencia"=>"15"];
        $tabla[]=["id"=>"6","imagen"=>"../img/product6.jpg","producto"=>"Digitalism","descripcion"=>"Social Media Post Template","costo_compra"=>"1.96","precio_venta"=>"6.99","cantidad_existencia"=>"16"];
        $tabla[]=["id"=>"7","imagen"=>"../img/product7.jpg","producto"=>"Transportation","descripcion"=>"Social Media Post Template","costo_compra"=>"1.97","precio_venta"=>"7.99","cantidad_existencia"=>"17"];
        $tabla[]=["id"=>"8","imagen"=>"../img/product8.jpg","producto"=>"Mexican Food","descripcion"=>"Instagram Post Template","costo_compra"=>"1.98","precio_venta"=>"8.99","cantidad_existencia"=>"18"];
        
        return $tabla;
        
    }

    public function buscar(){
        $tabla[]=["id"=>"1","imagen"=>"../img/product1.jpg","producto"=>"Italian food","descripcion"=>"Social Media Post Template","costo_compra"=>"1.91","precio_venta"=>"1.99","cantidad_existencia"=>"11"];
        $tabla[]=["id"=>"2","imagen"=>"../img/product2.jpg","producto"=>"MInimalist Lifestyle","descripcion"=>"Social Media Post Template","costo_compra"=>"1.92","precio_venta"=>"2.99","cantidad_existencia"=>"12"];
        $tabla[]=["id"=>"3","imagen"=>"../img/product3.jpg","producto"=>"OktoBeerFest","descripcion"=>"Social Media Post Template","costo_compra"=>"1.93","precio_venta"=>"3.99","cantidad_existencia"=>"13"];
        $tabla[]=["id"=>"4","imagen"=>"../img/product4.jpg","producto"=>"Mararons","descripcion"=>"Social Media Post Template","costo_compra"=>"1.94","precio_venta"=>"4.99","cantidad_existencia"=>"14"];
        $tabla[]=["id"=>"5","imagen"=>"../img/product5.jpg","producto"=>"World book Day","descripcion"=>"Instagram Post Template","costo_compra"=>"1.95","precio_venta"=>"5.99","cantidad_existencia"=>"15"];
        $tabla[]=["id"=>"6","imagen"=>"../img/product6.jpg","producto"=>"Digitalism","descripcion"=>"Social Media Post Template","costo_compra"=>"1.96","precio_venta"=>"6.99","cantidad_existencia"=>"16"];
        $tabla[]=["id"=>"7","imagen"=>"../img/product7.jpg","producto"=>"Transportation","descripcion"=>"Social Media Post Template","costo_compra"=>"1.97","precio_venta"=>"7.99","cantidad_existencia"=>"17"];
        $tabla[]=["id"=>"8","imagen"=>"../img/product8.jpg","producto"=>"Mexican Food","descripcion"=>"Instagram Post Template","costo_compra"=>"1.98","precio_venta"=>"8.99","cantidad_existencia"=>"18"];
        
        foreach($tabla as $t){
            if ($this->id==$t["id"])
            return $t;
        }
        return [];
    }
}



?>
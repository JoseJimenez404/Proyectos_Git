<?php

interface ProductoInterface {
    public function getId();
    public function getNombre();
    public function getPrecio();
}

class Producto implements ProductoInterface {
    protected $id;
    protected $nombre;
    protected $precio;

    public function __construct($id, $nombre, $precio) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }
}

class CarritoDeCompras {
    protected $productos = [];

    public function agregarProducto(ProductoInterface $producto) {
        $this->productos[] = $producto;
    }

    public function removerProducto(ProductoInterface $producto) {
        $index = array_search($producto, $this->productos);
        if ($index !== false) {
            unset($this->productos[$index]);
        }
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio();
        }
        return $total;
    }
}

// Uso de las clases
$producto1 = new Producto(1, 'Camisa', 225);
$producto2 = new Producto(2, 'Pantalón', 30);

$carrito = new CarritoDeCompras();
$carrito->agregarProducto($producto1);
$carrito->agregarProducto($producto2);
$carrito->removerProducto($producto2);

$total = $carrito->calcularTotal();
echo "Total del carrito: $total"; // Salida: Total del carrito: 50


?>

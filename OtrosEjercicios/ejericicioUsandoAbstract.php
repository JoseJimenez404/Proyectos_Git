<?php
//clase abstracta, es la base para sus clases hijas.
// abstract class Vehiculo {
//     protected $marca;
	

//     public function __construct($marca) {
//         $this->marca = $marca;
//     }
// // ESTE ES UN METODO ABSTRACTO, POR LO TANTO SE TIENE QUE IMPLEMENTAR SI O SI EN SU CLASE HIJA.
//     abstract public function conducir();
// }

//Opcion 2 para usar un constructor

abstract class Vehiculo{
	function __construct(protected $marca)
	{
		
	}
}

class Automovil extends Vehiculo {
    public function conducir() {
        return "Conduciendo un automóvil de la marca " . $this->marca;
    }
}

class Motocicleta extends Vehiculo {
    public function conducir() {
        return  "Conduciendo una motocicleta de la marca " . $this->marca;
    }
}

// Uso de las clases
$automovil = new Automovil("Toyota");
echo $automovil->conducir(); // Salida: Conduciendo un automóvil de la marca Toyota

$motocicleta = new Motocicleta("Honda");
echo $motocicleta->conducir(); // Salida: Conduciendo una motocicleta de la marca Honda


?>
<?php
// Clase base Animal
abstract class Animal
{
    protected $nombre;
    protected $edad;
    protected $tipoAlimentacion;

    public function __construct($nombre, $edad, $tipoAlimentacion)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->tipoAlimentacion = $tipoAlimentacion;
    }

    abstract public function comer();

    abstract public function dormir();
}

// Clase León
class León extends Animal
{
    public function comer()
    {
        echo "El león $this->nombre está comiendo.";
    }

    public function dormir()
    {
        echo "El león $this->nombre está durmiendo.";
    }

    public function rugir()
    {
        echo "¡Rugido del león $this->nombre!";
    }
}

// Clase Tigre
class Tigre extends Animal
{
    public function comer()
    {
        echo "El tigre $this->nombre está comiendo.";
    }

    public function dormir()
    {
        echo "El tigre $this->nombre está durmiendo.";
    }

    public function caminarSigiloso()
    {
        echo "El tigre $this->nombre está caminando sigilosamente.";
    }
}

// Clase Elefante
class Elefante extends Animal
{
    public function comer()
    {
        echo "El elefante $this->nombre está comiendo.";
    }

    public function dormir()
    {
        echo "El elefante $this->nombre está durmiendo.";
    }

    public function jugar()
    {
        echo "El elefante $this->nombre está jugando.";
    }
}

// Clase Zoológico
class Zoológico
{
    private $animales = [];

    public function agregarAnimal(Animal $animal)
    {
        $this->animales[] = $animal;
    }

    public function mostrarInformaciónAnimales()
    {
        foreach ($this->animales as $animal) {
            echo "Nombre: " . $animal->nombre . ", Edad: " . $animal->edad . ", Tipo de alimentación: " . $animal->tipoAlimentacion . "<br>";
        }
    }

    public function alimentarAnimales()
    {
        foreach ($this->animales as $animal) {
            $animal->comer();
            echo "<br>";
        }
    }

    public function hacerDormirAnimales()
    {
        foreach ($this->animales as $animal) {
            $animal->dormir();
            echo "<br>";
        }
    }
}

// Uso del código

// Crear instancias de animales
$león = new León("Simba", 5, "Carnívoro");
$tigre = new Tigre("Sherkhan", 4, "Carnívoro");
$elefante = new Elefante("Dumbo", 8, "Herbívoro");

// Crear instancia del zoológico
$zoo = new Zoológico();

// Agregar animales al zoológico
$zoo->agregarAnimal($león);
$zoo->agregarAnimal($tigre);
$zoo->agregarAnimal($elefante);

// Mostrar información de los animale


<?php
require_once"App/traits/tecnicasSimples.php";//se pone antes de la clase que lo usa
require_once"App/traits/tecnicasEspeciales.php";
require_once"App/traits/tecnicasCombinadas.php";
require_once"App/clases/saiyayin.php";
require_once"App/clases/superSaiyayin.php";
require_once"App/otras/clases/superSaiyayin.php";



//operador de resolucion, son los 2 puntos
// echo Saiyayin::MostrarColorCabello();
// clase hija


// esta es una forma de acceder a los atributos desde fuera de la clase, 
// es decir, desde cuando se esta instanciando
$goku = new Saiyayin(nivel:1, nombre:"goku");
echo $goku->saludar("hola kakaroto, insecto....");
// echo $goku->AumentarVelocidad();
echo $goku->UsarHamekaka();

$gohan = new SuperSaiyayin("Gohan",190);
echo $gohan->saludar("Bienvenido gohan");
echo $gohan->NivelDePelea();
// echo $gohan->AumentarKi();
echo $gohan->UsarHamekaka();
?>

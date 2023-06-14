<?php

/*
//metodo magico ---- Constructor

//Agregar la primera letra del nombre de la clase en mayuscula
//clase padre

//np se puede hacer la herencia multiple
class Saiyayin{
	//tipado de datos, es asignar un tipo de dato que tendra el atributo (Tipar)
	//este es un tipado estricto, ya que tiene que se si o si un string o int

	public string $clase = "Saiyayin";

	//esta es un metodo magico, constructor que basicamente recibe directamente los parametros
	//y no tiene necesidad de usar la asignacion con el $this, si no que esta 
	//se puede usar solamente definiendo los parametros directamente de la funcion del constructor
	public function __construct(public string $nombre, public int $nivel)
	{

	}
	//las funciones tambien se pueden tipar, es decir, definir que tipo de dato
	// deve de devolver
	public function saludar($saludar = "Hola soy") : string{ //espera un texto, que se le puede pasar por nosotros mismos
		//cabe decir que le podemos poner un valor al parametro por defecto, para que no sea a fuerzas asignarle un valor;

		//tambien se puede llamar un metodo dentro de otro, de igual manera
		//se llama con la palabra reservada this -> ejemplo:
		return $saludar.$this->nombre."<br/>";
	}

	function NiveldePelea() {
		return "{$this->nombre} tiene un nivel de pelea de {$this->nivel} <br/> y pertenece al nivel {$this->clase} <br/>";
		// return $this->nombre."tiene un nivel de pelea de ".$this->nivel_pelea;
	}
}

*/

class Saiyayin{
	//Estamos haciendo uso del traits- Permite usar multiples traits, para nuevas funcionalidades
	use TecnicasCombinadas;

	protected string $nombre;
	public int $nivel;
	public string $clase = "Saiyayin";
	public static $cabello="Negro";
	// para definir una constante, por normalizacion va en mayuscula
	// se puede acceder a la constante sin instanciar la constante, solo usando self::
	const VELOCIDAD = "Normal";

	//esta es un metodo magico, constructor que basicamente recibe directamente los parametros
	//y no tiene necesidad de usar la asignacion con el $this, si no que esta 
	//se puede usar solamente definiendo los parametros directamente de la funcion del constructor
	public function __construct($nombre,$nivel)
	{
		$this->nombre = $nombre;
		$this->nivel = $nivel;
	}

	public static function MostrarColorCabello(){
		//con self accedes | llamas, a un metodo estatico, o con el nombre de la clase
		return "Tengo el cabello de color".self::$cabello;
	} 
	//las funciones tambien se pueden tipar, es decir, definir que tipo de dato
	// deve de devolver
	public function saludar($saludar = "Hola soy") : string{ //espera un texto, que se le puede pasar por nosotros mismos
		//cabe decir que le podemos poner un valor al parametro por defecto, para que no sea a fuerzas asignarle un valor;

		//tambien se puede llamar un metodo dentro de otro, de igual manera
		//se llama con la palabra reservada this -> ejemplo:
		return $saludar.$this->nombre."<br/>";
	}

	function NiveldePelea() {
		return ;
		// return $this->nombre."tiene un nivel de pelea de ".$this->nivel_pelea;
		return "Tengo el cabello de color".self::$cabello;
	}

}

?>
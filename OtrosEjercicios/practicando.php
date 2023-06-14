

<?php 
//hoy practicare lo que he aprendido.


// vamos a crear un sistema que presente a cada spiderman,tendra un nombre, alias
// edad,la habilidad que posee, si su telaraña es natural o de maquina, y tendra
// la habilidad de sacar su telaraña.

//formas de concatenar
trait Complementos{

	function Poder(){

	}
}

abstract class Spiderman{

	
	function __construct(
	protected $nombre,
	protected $alias,
	protected $edad)
	{

	}

	abstract public function getPresentarse();
}

class Tobey extends Spiderman{
	use Complementos;
	

	function getPresentarse()
	{
		return "Yo soy ".$this->nombre." me conocen como ".$this->alias." y tengo {$this->edad} <br/>";
	}

}

class Garfield extends Spiderman{

	function getPresentarse()
	{
		return "yo soy {$this->nombre}, me conocen como {$this->alias}, y tengo actualmente: {$this->edad}";
	}
}

$spider1 = new Tobey("Tobey Maguire","Mereyein","35");
echo $spider1->getPresentarse();

$spider2 = new Garfield("Andrew Garfiel", "Gewn sad",45);
echo $spider2->getPresentarse();

?>
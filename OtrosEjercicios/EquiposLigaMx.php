<?php


interface Porra{
	public function PorraOficial();
}


abstract class Equipos{
	// se puede asignar directamente el dato que se aceptara, o simplemente se puede poner solo la variable
	
	public function __construct(
		public string $Nombre,
		public string $Titulos,
		public string $AñoFundacion
	){}
	
	function getInformation(){}
		//cuando es abstracto si o si se deve de implementar
	// abstract public function porraOficial();
	

}

class Chivas extends Equipos implements Porra{

	public function getInformation(): string{
		$info1 ="el club mas grande de México, El {$this->Nombre}, se fundo en el año {$this->AñoFundacion}.<br/>";
		return $info1. "Actualmente tienen ".$this->Titulos." titulos en la maxima categoria del futbol mexicano <br/>";
	}

	
	public function porraOficial()
	{
		return "Chivas, Chivas, Chivas..... y arriba las chivassssss <br/>";
	}
}

class America extends Equipos implements Porra{

	public function getInformation(){
		$info1 ="el club mas sobrevalorado de México, El {$this->Nombre}, se fundo en el año {$this->AñoFundacion}.<br/>";
		return $info1. "Actualmente tienen ".$this->Titulos." titulos (todos robados hee) en la maxima categoria del futbol mexicano <br/>";
	}

	
	public function porraOficial()
	{
		return "Americaaa, Aguilas ¡¡  ** abucheos**";
	}
}

$chivitas = new Chivas("Club deportivo Guadalajara",15,1944);
echo $chivitas->getInformation();
echo $chivitas->porraOficial();


$america = new America("Club America FC",12,1899);
echo $america->getInformation();
echo $america->porraOficial();

?>
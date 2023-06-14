<?php


class SuperSaiyayin extends Saiyayin{
	public string $clase = "Super Saiyayin";
	public static $cabello="Amarillo";
	//hereda todos los metodos y atributos que no sean privados

	public function transformacion(){
		if($this->nivel >= 1500){
			$texto = $this->nombre." se transformo en ".$this->clase;
		}else{
			$texto = $this->nombre." No se transformo en  ".$this->clase;
		}
		return $texto;
	}

	public static function MostrarColorCabello(){
		//con self accedes | llamas, a un metodo estatico, o con el nombre de la clase
		return "Tengo el cabello de color".self::$cabello;
	} 
	
	
	public static function NuevoMetodo()
	{
		//con parent accedemos a una clase o metodo constante, e incluso para el constructor padre
		return parent::VELOCIDAD;
	}

}

?>